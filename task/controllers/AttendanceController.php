<?php


namespace app\controllers;

use app\models\Students;
use app\models\TeachersGroups;
use Yii;

use app\models\Users;

use yii\db\Query;
use yii\web\Controller;


class AttendanceController extends NewController
{

//    public $layout = 'student';




    public function actionIndex(){


        $student_id =Yii::$app->user->id;

        $subjects = (new Query())
            ->select(['subjects.subject_id','subjects.subject_title','date'])
            ->distinct()
            ->from('subjects')
            ->leftJoin('teachers_groups','teachers_groups.subject_id=subjects.subject_id')
            ->leftJoin('students_groups','students_groups.group_id=teachers_groups.group_id')
            ->leftJoin('students','students_groups.student_id=students.student_id')
            ->where(['students.user_id'=>$student_id])
            ->all();




        return $this->render('index',compact('subjects'));
    }

    public function  actionShow(){
        $get = Yii::$app->request->get();
        $student_id =Yii::$app->user->id;
        $subject_id = $get['subject_id'];

        $student_id =Students::find()
            ->where(['user_id'=>$student_id])
            ->asArray()->one()['student_id'];


        $dateSem = (new Query())
            ->select('date')
            ->from('teachers_groups')
            ->leftJoin('students_groups','students_groups.group_id=teachers_groups.group_id')
            ->where(['subject_id'=>$subject_id,'students_groups.student_id'=>$student_id])
            ->one()['date'];

        if(date('Y',strtotime($dateSem))=='2020'){
            $weekStart ='2020-04-27';
            $weekEnd ='2020-05-01';
        } else{
            $weekStart ='2019-'.date('m-d', strtotime('mon this week'));
            $weekEnd ='2019-'.date('m-d', strtotime('sun this week'));

        }




        $ff = (new Query())
            ->select(['attendance.student_id','value','date','subject_title','teacher_fname'])
            ->from('attendance')
            ->leftJoin('subjects','subjects.subject_id=attendance.subject_id')
            ->leftJoin('teachers','teachers.teacher_id=attendance.teacher_id')
            ->leftJoin('students','students.student_id=attendance.student_id')
            ->where(['attendance.subject_id'=>$subject_id,'students.student_id'=>$student_id])
//            ->andWhere(['between','date',$weekStart,$weekEnd])
            ->all();

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



        $scores =[];
        foreach ($ff as $f){
            $scores[] =[
                $f['date']=>$f['value']
            ];
        }



        $scores = array_reduce($scores, function($carry, $item) {
            return $carry + $item;
        }, []);





        if(empty($ff))
            return 'Нет данных';
        return $this->render('show',compact('ff','subject_id','startSem','endSem',
        'weekStart','weekEnd','scores'));

    }

    public function actionTable(){
        $student_id =Yii::$app->user->id;
        $this->layout = 'forAjax';
        $post = Yii::$app->request->post();
        $subject_id = $post['subject_id'];
        $weekStart =$post['weekstart'];
        $weekEnd =$post['weekend'];
        $ff = (new Query())
            ->select(['attendance.student_id','value','date','subject_title','teacher_fname'])
            ->from('attendance')
            ->leftJoin('subjects','subjects.subject_id=attendance.subject_id')
            ->leftJoin('teachers','teachers.teacher_id=attendance.teacher_id')
            ->leftJoin('students','students.student_id=attendance.student_id')
            ->where(['attendance.subject_id'=>$subject_id,'students.user_id'=>$student_id,])
            ->andWhere(['between','date',$weekStart,$weekEnd])
            ->all();
        $scores =[];
        foreach ($ff as $f){
            $scores[] =[
                $f['date']=>$f['value']
            ];
        }



        $scores = array_reduce($scores, function($carry, $item) {
            return $carry + $item;
        }, []);

        return $this->render('table',compact('weekStart','weekEnd','scores'));
        return 's';
    }





}