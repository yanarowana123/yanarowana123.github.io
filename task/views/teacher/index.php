<?php
use yii\helpers\Html;
?>
<h1>Группы</h1>
<?
//$groups = array('Математика15', 'Мат18','Ип23');

foreach ($groups as $key=>$group){
    echo Html::a($group['group']['group_title'], ['teacher/subjects',
        'groupId'=>$group['group_id'],'group_title'=>$group['group']['group_title']],
        ['class' => 'btn btn-success',
            '']) ;
}

