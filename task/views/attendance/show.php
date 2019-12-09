<?php
use yii\helpers\Html;
?>


<div class="teacher-weeks">
    <div class="container">
        <div class="row">
                <h1 class="text-center"><?=$ff[0]['subject_title']?></h1>
            <?php


            while(strtotime($startSem)<strtotime($endSem)){
                $n++;
                echo Html::a("$n неделя", ['/attendance/table'],
                    ['class' => 'btn btn-info btn-sm student-week  ml-4',
                        'subject_id'=>$subject_id,
//                        'group_id'=>$group_id,
                        'weekStart' => $startSem,
                        'weekEnd'=>date("Y-m-d", strtotime("this week Sun", strtotime($startSem))),
                    ]) ;
                $startSem = date("Y-m-d", strtotime("next week Mon", strtotime($startSem)));
            }
            ?>

        </div>
    </div>
</div>



<div class="table-responsive table-bordered table-student">
    <table class ="table table-hover table-striped">
        <thead>
        <tr class="table-success">
            <?php
                $w =$weekStart;

            while (strtotime($weekStart) <= strtotime($weekEnd)) {

                if (date('l', strtotime($weekStart)) != 'Saturday' and date('l', strtotime($weekStart)) != 'Sunday') {

                    $dates[] = date("Y-m-d", strtotime($weekStart));
                    $weekStart = date("d-m-Y", strtotime($weekStart));
                    echo "<th class='$i'>$weekStart </th>";
                }
                $weekStart = date("d-m-Y", strtotime("+1 day", strtotime($weekStart)));

            }
            ?>
        </tr>
        </thead>
        <tbody>
        <tr>

            <?php

            while (strtotime($w) <= strtotime($weekEnd)) {
                if (date('l', strtotime($w)) != 'Saturday' and date('l', strtotime($w)) != 'Sunday') {
                if(!$scores[$w]){
                    echo "<td>Не задано</td>";
                }else{
                    if($scores[$w]=='Был(а)'){
                        echo "<td style='background:green;color:white'>$scores[$w]</td>";
                    } else{
                        echo "<td style='background:red;color:white'>$scores[$w]</td>";
                    }

                }}
                $w = date("Y-m-d", strtotime("+1 day", strtotime($w)));

            }
            ?>
        </tr>

        </tbody>

    </table>
</div>

