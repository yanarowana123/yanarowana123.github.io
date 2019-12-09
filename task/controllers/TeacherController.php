<?php


namespace app\controllers;


use app\models\Attendance;
use app\models\Students;
use app\models\Subjects;
use Yii;
use app\models\TeachersGroups;
use app\models\TeachersSubjects;
use yii\db\Query;
use yii\web\Controller;

class TeacherController extends NewController{

//    public $layout = 'teacher';

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
            $weekStart ='2019-'.date('m-d', strtotime('mon this week'));
            $weekEnd ='2019-'.date('m-d', strtotime('sun this week'));
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

        $startSem = "2019-09-01";

        $endSem = "2019-12-15";


        return $this->render('dates',compact('weekStart',
        'weekEnd','group_id','users','ff','subject_id','students','startSem','endSem','subject_title','subject'));
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