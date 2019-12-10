<?php
use yii\helpers\Html;
?>




<!--<div class="teacher-dates">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!---->
<!--            <h1 class="text-center">Учебный год --><?//="$yearStart-$yearEnd"?><!--</h1>-->
<!--            <h2 class="text-center">Семестр --><?//=$semNum?><!--</h2>-->
<!--            <h3 class="text-center">Группа --><?//=$users[0]['group_title']?><!--</h3>-->
<!--            <h3 class="text-center">--><?//=$subject->subject_title?><!--</h3>-->
<!---->
<!--        </div>-->
<!--        <div class="row">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<section id="show-attendance">
<div class="teacher-weeks">
    <div class="container">
        <div class="row">

            <?php



            if(date('l', strtotime($startSem)) == 'Saturday' or date('l', strtotime($startSem)) == 'Sunday'){
                $startSem = date("Y-m-d",strtotime("next week Mon",strtotime($startSem)));
            }


            $n = 0;
            while(strtotime($startSem)<strtotime($endSem)){
                $n++;

                echo Html::a("$n неделя", ['teacher/dates'],
                    ['class' => 'btn btn-info btn-sm teacher-week  ml-4',
                        'subject_id'=>$post['subjectId'],
                        'group_id'=>$post['groupId'],
                        'weekStart' => $startSem,
                        'weekEnd'=>date("Y-m-d", strtotime("this week Sun", strtotime($startSem))),
                    ]) ;
                $startSem = date("Y-m-d", strtotime("next week Mon", strtotime($startSem)));
            }
            ?>

        </div>
    </div>
</div>



<div class="table-responsive table-bordered table-teacher">
    <table class ="table table-hover table-striped table-bordered">
        <thead>
        <tr class="table-success">
            <th class="table-success">Студент</th>
            <?php

            $i=0;
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
        <?php foreach ($students as $student):

            ?>
            <tr>
                <td class="warning"><?=$student['student_name']?></td>
                <?php
                for($i=1;$i<count($dates)+1;$i++):?>

                    <td  date="<?=$dates[$i-1]?>"class="info">
                        <select subject_id="<?=$post['subjectId']?>" date="<?=$dates[$i-1]?>" student_id="<?=$student['student_id']?>"  class='select selectpicker' >
                            <option   <?php if($student[$dates[$i-1]]=='Не задано'):?>selected="selected"<?php endif; ?> value="Не задано" >Не задано</option>
                            <option style="background: #5cb85c; color: #fff;" <?php if($student[$dates[$i-1]]=='Был(а)'):?>selected="selected"<?php endif; ?> value="Был(а)" >Был(а)</option>
                            <option style="background: red; color: #fff;" <?php if($student[$dates[$i-1]]=='Не был(а)'):?>selected="selected"<?php endif; ?> value="Не был(а)">Не был(а)</option>
                        </select>
                    </td>


                <? endfor;?>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
</section>

