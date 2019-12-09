<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Attendance;
use app\models\Students;
use app\models\Subjects;

use app\models\TeachersGroups;
use app\models\TeachersSubjects;
use yii\db\Query;


class NewController extends Controller
{
    public function beforeAction($action) {

        if(Yii::$app->user->can('teacherRole')){

            $this->layout = 'teacher';
        } elseif (Yii::$app->user->can('userRole')) {

            $this->layout = 'student';
        }


        return parent::beforeAction($action);

    }


}