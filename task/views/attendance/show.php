<?php


use app\models\Attendance;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

$arr =[];

foreach ($mm as $v){
    $arr[]=['date'=>$v['date'],'value'=>$v['value'],'user_name'=>$v['user']['user_name']];
}
$students = ArrayHelper::map($arr, 'date', 'value', 'user_name');

$dataProvider = new \yii\data\ArrayDataProvider([
    'allModels' => $students

]);





?>
<div class="table-responsive">
    <table class ="table table-hover table-striped">
        <thead>
        <tr>
            <th>Студент</th>
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

                    echo "<th date='$day_year.$day_month.$day_num' class='$i'>$day_year.$day_month.$day_num </th>";}

            }
            ?>

        </tr>
        </thead>
        <tbody>
        <?php if(empty($students)){
           echo "<h2>Нет данных</h2>";
        }?>


        <?php foreach ($students as $student=>$score):

            ?>
            <tr>
                <td><?= $student?></td>
                <?php
                for($i=1;$i<$day_count+1;$i++){
                    if($score[$col[$i-1]]=='Был(а)'){
                        echo  "<td class=\"success\">Был(а)</td>";
                    }
                    elseif($score[$col[$i-1]]=='Не был(а)'){
                        echo  "<td class=\"danger\">Не был(а)</td>";
                    } else{
                        echo "<td class=\"info\">Не задано</td>";
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



