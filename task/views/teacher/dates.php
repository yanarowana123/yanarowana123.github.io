<?php
use yii\helpers\Html;
use yii\widgets\Pjax;

?>




<div class="teacher-dates">
    <div class="container">
        <div class="row">

            <h1 class="text-center">Учебный год 2019-2020</h1>
            <h2 class="text-center">Семестр 1</h2>
            <h3 class="text-center">Группа <?=$users[0]['group_title']?></h3>
            <h3 class="text-center"><?=$subject->subject_title?></h3>

        </div>
        <div class="row">

        </div>
    </div>
</div>


<?php

?>
<div class="teacher-weeks">
    <div class="container">
        <div class="row">

<?php

$n = 0;
while(strtotime($startSem)<strtotime($endSem)){
    $n++;
    echo Html::a("$n неделя", ['teacher/dates'],
        ['class' => 'btn btn-info btn-sm teacher-week  ml-4',
        'subject_id'=>$subject_id,
        'group_id'=>$group_id,
        'weekStart' => $startSem,
        'weekEnd'=>date("Y-m-d", strtotime("+7 day", strtotime($startSem))),
        ]) ;
    $startSem = date("Y-m-d", strtotime("+7 day", strtotime($startSem)));
}
?>

        </div>
    </div>
</div>



    <div class="table-responsive table-bordered table-teacher">
        <table class ="table table-hover table-striped">
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
                    for($i=1;$i<6;$i++):?>

                        <td  date="<?=$dates[$i-1]?>"class="info">
                            <select subject_id="<?=$subject_id?>" date="<?=$dates[$i-1]?>" student_id="<?=$student['student_id']?>"  class='select selectpicker' >
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

