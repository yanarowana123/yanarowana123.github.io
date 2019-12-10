<?php


namespace app\controllers;


use app\models\Attendance;
use app\models\Students;
use app\models\Subjects;
use app\models\Teachers;
use Yii;
use app\models\TeachersGroups;
use app\models\TeachersSubjects;
use yii\db\Query;
use yii\web\Controller;

class TeacherController extends NewController{


    public function actionTest(){


        return $this->render('test');
    }

    public function actionShowgroups(){
        $this->layout = 'forAjax';
        $post = Yii::$app->request->post();
        $user_id =Yii::$app->user->id;

        $teacher_id = Teachers::find()
            ->where(['user_id'=>$user_id])
            ->asArray()->one()['teacher_id'];


        $ff = (new Query())->select('groups.group_title,groups.group_id')
            ->distinct()
            ->from('groups')
            ->innerJoin('teachers_groups','groups.group_id=teachers_groups.group_id')
            ->innerJoin('teachers','teachers.teacher_id=teachers_groups.teacher_id')
            ->where(['teachers.teacher_id'=>$teacher_id,'date'=>$post['date']])
            ->all();
        if(empty($ff))
            return 'Список групп пуст';


        $groupsArr =[];
        foreach ($ff as $f){
            $groupsArr[]=['group_title'=>$f['group_title'],
                'group_id'=>$f['group_id']];
        }

        return $this->render('showgroups',compact('groupsArr'));

    }


    public function actionShowsubjects(){
        $this->layout = 'forAjax';
        $post = Yii::$app->request->post();
        $user_id =Yii::$app->user->id;

        $teacher_id = Teachers::find()
            ->where(['user_id'=>$user_id])
            ->asArray()->one()['teacher_id'];



        $ff = (new \yii\db\Query())
            ->select('subject_title,subjects.subject_id')
            ->distinct()
            ->from('subjects')
            ->leftJoin('teachers_groups','teachers_groups.subject_id=subjects.subject_id')
//            ->leftJoin('teachers','teachers.teacher_id=teachers_groups.teacher_id')
            ->where(['teachers_groups.teacher_id'=>$teacher_id,'group_id'=>$post['groupId'],'date'=>$post['date']])
            ->all();

        $subjectsArr =[];
        foreach ($ff as $f){
            $subjectsArr[]=['subject_title'=>$f['subject_title'],
                'subject_id'=>$f['subject_id']];
        }


        return $this->render('showsubjects',compact('subjectsArr'));
    }

    public function actionShowattendance(){
        $this->layout = 'forAjax';
        $post = Yii::$app->request->post();

        $user_id =Yii::$app->user->id;

        $teacher_id = Teachers::find()
            ->where(['user_id'=>$user_id])
            ->asArray()->one()['teacher_id'];

        $weekStart = $post['weekstart'];
        $weekEnd = $post['weekend'];


        if(empty($weekStart)){
            if($post['date']=='2019-09-01'){
                $weekStart =date('Y-m-d', strtotime('mon this week'));
                $weekEnd =date('Y-m-d', strtotime('sun this week'));
            } else{
                $weekStart ='2020-04-27';
                $weekEnd ='2020-05-01';
            }

        }

        $yearSem = TeachersGroups::find()
            ->where(['subject_id'=>$post['subjectId'],'teacher_id'=>$teacher_id,'group_id'=>$post['groupId']])
            ->asArray()
            ->one();

        if(date('m',strtotime($yearSem['date']))=='01'){
            $yearStart=date('Y',strtotime($yearSem['date']))-1;
            $yearEnd=date('Y',strtotime($yearSem['date']));
            $semNum =2;
        } else{
            $yearStart=date('Y',strtotime($yearSem['date']));
            $yearEnd=date('Y',strtotime($yearSem['date']))+1;
            $semNum =1;
        }

        if(date('m',strtotime($yearSem['date']))=='01'){
            $startSem = "$yearEnd-01-21";
            $endSem = "$yearEnd-05-3";

        } else {
            $startSem = "$yearStart-09-01";
            $endSem = "$yearStart-12-15";
        }




        $users = (new Query())->select(['students.student_id','student_fname','student_sname'])
            ->from('students')
            ->leftJoin('students_groups','students_groups.student_id=students.student_id')
            ->where(['group_id'=> $post['groupId']])
            ->all();

        $ff = (new Query())->select(['students.student_id','students.student_fname',
            'student_sname','date','value','students_groups.group_id'])
            ->from('students')
            ->leftJoin('attendance','attendance.student_id=students.student_id')
            ->leftJoin('students_groups','students_groups.student_id=students.student_id')
            ->where(['group_id'=> $post['groupId']])
            ->andWhere(['attendance.subject_id'=>$post['subjectId']])
            ->andWhere(['between','date',$weekStart,$weekEnd])
            ->andWhere(['teacher_id'=>$teacher_id])
            ->andWhere(['status'=>1])
            ->all();

        $students =[];
        $ptudents=[];


        foreach ($users as $user){
            $students[] =['student_id'=>$user['student_id'],
                'student_name'=>$user['student_fname'].' '.$user['student_sname']];
        }


        foreach ($ff as $f){
            $ptudents [] = [
                'student_id'=>$f['student_id'],
                'student_name'=>$f['student_fname'].' '.$f['student_sname'],
                $f['date']=>$f['value']
            ];
        }



        if(empty($ff)){
            $ptudents = $students;
        } else {
            foreach ($students as &$value1) {
                foreach ($ptudents as $value2) {
                    if ($value1['student_id'] == $value2['student_id']) {
                        $value1 = array_merge($value1, $value2);
                    }
                }
            }
        }




        return $this->render('showattendance',compact('weekStart',
            'weekEnd','group_id','users','ff','subject_id','students','startSem','endSem','subject_title','subject',
            'yearStart','yearEnd','semNum','post'));
    }

















    public function actionIndex(){
        $teacher_id =Yii::$app->user->id;


        $groups = TeachersGroups::find()
            ->select('groups.group_id')
            ->distinct()
            ->joinWith('group')
            ->where(['teacher_id'=>$teacher_id])
            ->asArray()
            ->all();


        return $this->render('index',compact('groups'));
    }




    public function actionSubjects(){
        $get = Yii::$app->request->get();
        $group_id = $get['groupId'];
        $group_title = $get['group_title'];
        $teacher_id =Yii::$app->user->id;


        $subjects = (new \yii\db\Query())->
        select(['teachers_groups.subject_id','subjects.subject_title','teacher_id','group_id'])
            ->from('teachers_groups')
            ->leftJoin('subjects','subjects.subject_id = teachers_groups.subject_id')
//            ->leftJoin('subjects','attendance.subject_id = subjects.subject_id')
            ->where(['teachers_groups.teacher_id'=>$teacher_id])
            ->andWhere(['group_id'=>$group_id])
            -> all();




        return $this->render('subjects',compact('subjects','group_title'));
    }


    public function actionDates(){

        $get = Yii::$app->request->get();
        $subject_id = $get['subject_id'];
//        $weekStart = $get['week'][0];
//        $weekEnd = $get['week'][1];
        $group_id = $get['group_id'];
        $teacher_id =Yii::$app->user->id;

        if (empty($get))
            return '404';
        if(empty($weekStart)){
            $weekStart =date('Y-m-d', strtotime('mon this week'));
            $weekEnd =date('Y-m-d', strtotime('sun this week'));
        }


        $yearSem = TeachersGroups::find()->where(['subject_id'=>$subject_id])->asArray()->one();

        if(date('m',strtotime($yearSem['date']))=='01'){
            $yearStart=date('Y',strtotime($yearSem['date']))-1;
            $yearEnd=date('Y',strtotime($yearSem['date']));
            $semNum =2;
        } else{
            $yearStart=date('Y',strtotime($yearSem['date']));
            $yearEnd=date('Y',strtotime($yearSem['date']))+1;
            $semNum =1;
        }

        if(date('m',strtotime($yearSem['date']))=='01'){
            $startSem = "$yearEnd-01-21";
            $endSem = "$yearEnd-05-3";

        } else {
            $startSem = "$yearStart-09-01";
            $endSem = "$yearStart-12-15";
        }







        $users = (new Query())->select(['students.student_id','student_fname','student_sname',
            'group_title'])
            ->from('students')
            ->leftJoin('students_groups','students_groups.student_id=students.student_id')
            ->leftJoin('groups','students_groups.group_id=groups.group_id')
            ->where(['students_groups.group_id'=> $group_id ])
            ->all();

        $ff = (new Query())->select(['students.student_id','students.student_fname',
            'student_sname','date','value','students_groups.group_id'])
            ->from('students')
            ->leftJoin('attendance','attendance.student_id=students.student_id')
            ->leftJoin('students_groups','students_groups.student_id=students.student_id')
            ->where(['students_groups.group_id'=> $group_id])
            ->andWhere(['attendance.subject_id'=>$subject_id])
            ->andWhere(['between','date',$weekStart,$weekEnd])
            ->andWhere(['teacher_id'=>$teacher_id])
            ->andWhere(['status'=>1])
            ->all();





        $subject = Subjects::findOne($subject_id);



        $students =[];
        $ptudents=[];


        foreach ($users as $user){
            $students[] =['student_id'=>$user['student_id'],
                'student_name'=>$user['student_fname'].' '.$user['student_sname']];
        }


        foreach ($ff as $f){
            $ptudents [] = [
                'student_id'=>$f['student_id'],
                'student_name'=>$f['student_fname'].' '.$f['student_sname'],
                $f['date']=>$f['value']
            ];
        }


        if(empty($ff)){
            $ptudents = $students;
        } else {
            foreach ($students as &$value1) {
                foreach ($ptudents as $value2) {
                    if ($value1['student_id'] == $value2['student_id']) {
                        $value1 = array_merge($value1, $value2);
                    }
                }
            }
        }




        return $this->render('dates',compact('weekStart',
        'weekEnd','group_id','users','ff','subject_id','students','startSem','endSem','subject_title','subject',
        'yearStart','yearEnd','semNum'));
    }



    public function actionUpd(){
        $post = Yii::$app->request->post();
        $teacher_id =Yii::$app->user->id;

        $att =Attendance::find()->
        where(['student_id'=>$post['student_id'],'date'=>$post['date'],'subject_id'=>$post['subject_id'],
            'teacher_id'=>$teacher_id])->
        one();



        if(empty($att)) {
            $model = new Attendance();

            $model->student_id =  $post['student_id'];
            $model->subject_id = $post['subject_id'];
            $model->date = $post['date'];
            $model->value = $post['selected'];
            $model->teacher_id = $teacher_id;
            $model->save();

        } else{

            $att->value = $post['selected'];
            $att->save();

        }
    }



    public function actionTable(){

        $this->layout = 'forAjax';
        $teacher_id =Yii::$app->user->id;
        $post = Yii::$app->request->post();
        $subject_id = $post['subject_id'];
        $weekStart = $post['weekstart'];
        $weekEnd = $post['weekend'];
        $group_id = $post['group_id'];


        $users = (new Query())->select(['students.student_id','student_fname','student_sname'])
            ->from('students')
            ->leftJoin('students_groups','students_groups.student_id=students.student_id')
            ->where(['group_id'=> $group_id ])
            ->all();

        $ff = (new Query())->select(['students.student_id','students.student_fname',
            'student_sname','date','value','students_groups.group_id'])
            ->from('students')
            ->leftJoin('attendance','attendance.student_id=students.student_id')
            ->leftJoin('students_groups','students_groups.student_id=students.student_id')
            ->where(['group_id'=> $group_id])
            ->andWhere(['attendance.subject_id'=>$subject_id])
            ->andWhere(['between','date',$weekStart,$weekEnd])
            ->andWhere(['teacher_id'=>$teacher_id])
            ->andWhere(['status'=>1])
            ->all();

        $students =[];
        $ptudents=[];


        foreach ($users as $user){
            $students[] =['student_id'=>$user['student_id'],
                'student_name'=>$user['student_fname'].' '.$user['student_sname']];
        }


        foreach ($ff as $f){
            $ptudents [] = [
                'student_id'=>$f['student_id'],
                'student_name'=>$f['student_fname'].' '.$f['student_sname'],
                $f['date']=>$f['value']
            ];
        }



        if(empty($ff)){
            $ptudents = $students;
        } else {
            foreach ($students as &$value1) {
                foreach ($ptudents as $value2) {
                    if ($value1['student_id'] == $value2['student_id']) {
                        $value1 = array_merge($value1, $value2);
                    }
                }
            }
        }



        return $this->render('table',compact('students','startSem','endSem','weekStart','weekEnd',
        'subject_id'));
    }

}