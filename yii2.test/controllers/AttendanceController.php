<?php


namespace app\controllers;

use Yii;
use app\models\Attendance;
use app\models\Users;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


class AttendanceController extends Controller
{

    public function actionIndex(){
        $get = Yii::$app->request->get();

        $month = $get['month'];
        $year = $get['year'];
        $users = Users::find()->all();

        if(empty($get)){
            $date = "2019-11-01";
            $end = "2019-11-" . date('t', strtotime($date));

        }else{
        $date = "$year-$month-01";
        $end = "$year-$month-" . date('t', strtotime($date));}

        return $this->render('index',compact('att','users','year','month','date','end',));
    }


    public function actionUpd(){
        $post = Yii::$app->request->post();
        $att =Attendance::findOne(['user_id'=>$post['user_id'],'date'=>$post['date']]);
//        $a = Attendance::find()->
//               where('YEAR(date)=:year and MONTH(date)=:month') ->
//               params(['year' => $year,'month'=>$month]) ->
//               all();



        if(empty($att)) {
            $model = new Attendance();
            $model->user_id = $post['user_id'];
            $model->date = $post['date'];
            $model->value = $post['selected'];
            $model->save();
        } else{
            $att->user_id = $post['user_id'];
            $att->date = $post['date'];
            $att->value = $post['selected'];
            $att->save();
        }

    }


    public function actionShow(){
        $get = Yii::$app->request->get();

        $month = $get['month'];
        $year = $get['year'];
        $users = Users::find()->with('attendances')->all();




        if(empty($get)) {
            $year=2019;
            $month=11;
        }
        $date = "$year-$month-01";
        $end = "$year-$month-" . date('t', strtotime($date));


//        $ff = Attendance::find('date')->
//                               where('YEAR(date)=:year and MONTH(date)=:month') ->
//                               params(['year' => $year,'month'=>$month]) ->orderBy('date')->
//                               asArray()->
//                               all();
        $ff = (new \yii\db\Query())->
            select(['date'])
            ->from('attendance')
            ->distinct()
            ->where('YEAR(date)=:year and MONTH(date)=:month')
            ->params(['year' => $year,'month'=>$month])
            ->orderBy('date')->
        all();
        $dataProvider = new ActiveDataProvider([
            'query' =>  Attendance::find()->
            where('YEAR(date)=:year and MONTH(date)=:month') ->
            params(['year' => $year,'month'=>$month]) ->orderBy('date')->
            asArray()

        ]);

        $mm = Attendance::find()->
                       where('YEAR(date)=:year and MONTH(date)=:month') ->
                       params(['year' => $year,'month'=>$month]) ->orderBy('date')->
                       asArray()->
                       all();


        debug($mm);

        return $this->render('show',compact('att','users','year','month','date',
            'end','ff','er','mm','dataProvider'));
    }






}