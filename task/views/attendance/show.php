<?php


use yii\helpers\ArrayHelper;
use yii\grid\GridView;
$students = ArrayHelper::map($mm, 'date', 'value', 'user_id');



?>
<div class="table-responsive">
    <table class ="table table-hover table-striped">
        <thead>
        <tr>
            <td>Студент</td>
            <?php $i=0;while(strtotime($date) <= strtotime($end)) {
                $day_num = date('d', strtotime($date));
                $day_month = date('m', strtotime($date));
                $day_year = date('Y', strtotime($date));
                $day_name = date('l', strtotime($date));
                $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));

                if($day_name!='Saturday' and $day_name!='Sunday'){
                    $i++;
                    $day_count=$i;
                    $col[] = "$day_year-$day_month-$day_num";

                    echo "<td date='$day_year.$day_month.$day_num' class='$i'>$day_year.$day_month.$day_num </td>";}

            }
            ?>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student=>$score):

            ?>
            <tr>
                <td><?= $student?></td>
                <?php
                for($i=1;$i<$day_count+1;$i++){
                    if($score[$col[$i-1]]=='Был(а)'){
                        echo  "<td>Был(а)</td>";
                    }
                    elseif($score[$col[$i-1]]=='Не был(а)'){
                        echo  "<td>Не был(а)</td>";
                    } else{
                        echo "<td>Не задано</td>";
                    }

//                    echo "<td class=''><select date=\"$i\" data-id=\"$student\" class='select '><option value=\"Не задано\" >Не задано</option>
//<option value=\"Был(а)\" >Был(а)</option>
//<option value=\"Не был(а)\">Не был(а)</option> </select> </td>";
                }
                ?>
            </tr>
        <?php endforeach;?>

        </tbody>


    </table>
</div>

