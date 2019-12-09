<?php


namespace app\controllers;

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
            ->select(['subjects.subject_id','subjects.subject_title'])
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
        $weekStart ='2019-'.date('m-d', strtotime('mon this week'));
        $weekEnd ='2019-'.date('m-d', strtotime('sun this week'));
        $ff = (new Query())
            ->select(['attendance.student_id','value','date','subject_title','teacher_fname'])
            ->from('attendance')
            ->leftJoin('subjects','subjects.subject_id=attendance.subject_id')
            ->leftJoin('teachers','teachers.teacher_id=attendance.teacher_id')
            ->leftJoin('students','students.student_id=attendance.student_id')
            ->where(['attendance.subject_id'=>$subject_id,'students.user_id'=>$student_id])
//            ->andWhere(['between','date',$weekStart,$weekEnd])
            ->all();

        $startSem = "2019-09-01";
        $endSem = "2019-12-15";



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