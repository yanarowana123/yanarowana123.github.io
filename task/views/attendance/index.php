<?php
use yii\helpers\Html;
?>
<div class="user-index">
    <div class="container">
        <div class="row">
            <?php
            foreach ($subjects as $subject){

                echo Html::a($subject['subject_title'], ['attendance/show', 'subject_id'=>$subject['subject_id']],
                    ['class' => 'btn btn-info btn-sm student-subject  ml-4',

                    ]) ;

            }
            ?>
        </div>
    </div>
</div>