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
        $post = Yii::$app->request->post();





        $month = $get['month'];
        $year=2019;
        $users = Users::find()->asArray()->all();


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
            with('user')->
        orderBy('date')->
        asArray()->
        all();


        return $this->render('update',compact('att','users','year','month','date','end','ff','mm'));
    }


    public function actionUpd(){
        $post = Yii::$app->request->post();
        $att =Attendance::find()->joinWith('user')->
            where(['user_name'=>$post['user_name'],'date'=>$post['date']])->
                    one();
        debug($att);
        $user_id = Attendance::find()->joinWith('user')->
        where(['user_name'=>$post['user_name']])->one();



        if(empty($att)) {
            $model = new Attendance();

//            $model->user_name = $post['user_name'];
            $model->user_id =  $user_id['user_id'];
            $model->date = $post['date'];
            $model->value = $post['selected'];
            $model->save();
            debug($att);
        } else{
//            $att->user_id = $post['user_id'];

            $att->date= $post['date'];
            $att->value = $post['selected'];
            $att->save();
            debug($att);
        }

    }


    public function actionShow(){
        $get = Yii::$app->request->get();

        $month = $get['month'];
        $year=2019;


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
        with('user')->
        orderBy('date')->
        asArray()->
        all();





        return $this->render('show',compact('att','users','year','month','date',
            'end','ff','er','mm','dataProvider'));
    }



}