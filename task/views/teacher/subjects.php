<?php
use yii\helpers\Html;
?>
    <h1>Предметы</h1>
<?


foreach ($subjects as $subject){
    echo Html::a($subject['subject_title'],
        ['teacher/dates', 'subject_id'=>$subject['subject_id'],
            'group_id'=>$subject['group_id'],


            ],
        ['class' => 'btn btn-success',
         'subject_title'=>$subject['subject_title'],
         'group_id'=>$subject['group_id'],
         'group_title'=>$group_title
        ]) ;
}

