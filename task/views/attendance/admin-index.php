<?
use yii\helpers\Html;
$months = array('Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' );

foreach ($months as $key=>$month){
    echo Html::a($month, ['attendance/update', 'month' => $key+1], ['class' => 'btn btn-success']) ;
}
