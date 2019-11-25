<?php


namespace app\controllers;

use Yii;
use app\models\Attendance;
use app\models\Users;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\web\Controller;


class AttendanceController extends Controller
{

    public function actionIndex(){

        return $this->render('index');
    }

    public function actionAdminIndex(){

        return $this->render('admin-index');
    }

    public function actionUpdate(){
        $get = Yii::$app->request->get();

        $month = $get['month'];
        $year=2019;
        $users = Users::find()->all();


        if(empty($get)) {
            $month=11;
        }

        $date = "$year-$month-01";
        $end = "$year-$month-" . date('t', strtotime($date));

        $ff = (new \yii\db\Query())->
        select(['date'])
            ->from('attendance')
            ->distinct()
            ->where('YEAR(date)=:year and MONTH(date)=:month')
            ->params(['year' => $year,'month'=>$month])
            ->orderBy('date')-> all();

        $mm = Attendance::find()->
        where('YEAR(date)=:year and MONTH(date)=:month') ->
        params(['year' => $year,'month'=>$month]) ->
        orderBy('date')->
        asArray()->
        all();
//        $rw = Attendance::find()->
//        where('YEAR(date)=:year and MONTH(date)=:month') ->
//        params(['year' => $year,'month'=>$month]) ->
//        with('user')->
//        orderBy('date')->
//        asArray()->
//        all();


        return $this->render('update',compact('att','users','year','month','date','end','ff','mm'));
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
        $year=2019;
        $users = Users::find()->with('attendances')->all();

        if(empty($get)) {

            $month=11;
        }
        $date = "$year-$month-01";
        $end = "$year-$month-" . date('t', strtotime($date));

        $ff = (new \yii\db\Query())->
            select(['date'])
            ->from('attendance')
            ->distinct()
            ->where('YEAR(date)=:year and MONTH(date)=:month')
            ->params(['year' => $year,'month'=>$month])
            ->orderBy('date')-> all();

//        $dataProvider = new ActiveDataProvider([
//            'query' =>  Attendance::find()->
//            where('YEAR(date)=:year and MONTH(date)=:month') ->
//            params(['year' => $year,'month'=>$month]) ->orderBy('date')->
//            asArray()
//
//        ]);

        $mm = Attendance::find()->
                       where('YEAR(date)=:year and MONTH(date)=:month') ->
                       params(['year' => $year,'month'=>$month]) ->

                       orderBy('date')->
                       asArray()->
                       all();





        return $this->render('show',compact('att','users','year','month','date',
            'end','ff','er','mm','dataProvider'));
    }



}