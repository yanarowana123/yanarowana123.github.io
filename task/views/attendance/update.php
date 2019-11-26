<?php


use yii\helpers\ArrayHelper;
use yii\grid\GridView;
//$students = ArrayHelper::map($mm, 'date', 'value', 'user_id');


$arr =[];


foreach ($mm as $v){
    $arr[]=['date'=>$v['date'],'value'=>$v['value'],'user_name'=>$v['user']['user_name']];

}
$students = ArrayHelper::map($arr, 'date', 'value', 'user_name');


?>
<div class="table-responsive table-bordered">
    <table class ="table table-hover table-striped">
        <thead>
        <tr class="table-success">
            <th class="table-success">Студент</th>
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
        <?php if(empty($students)):?>
            <?php foreach ($users as $user):
                ?>
                <tr>
                    <td><?=$user['user_name']?></td>
                    <?php
                    for($i=1;$i<$day_count+1;$i++){
                        echo "<td class=''><select date=\"$i\" user_name=\"$user[user_name]\" class='select '><option value=\"Не задано\" >Не задано</option>
<option value=\"Был(а)\" >Был(а)</option>
<option value=\"Не был(а)\">Не был(а)</option> </select> </td>";
                    }
                    ?>
                </tr>
            <?php endforeach; ?>

        <?php endif;?>

        <?php foreach ($students as $student=>$score):

            ?>
            <tr>
                <td class="warning"><?= $student?></td>
                <?php
                for($i=1;$i<$day_count+1;$i++):?>


                    <td class="info">
                        <select date="<?=$i?>"  user_name="<?=$student?>" class='select selectpicker' >
                            <option   <?php if($score[$col[$i-1]]=='Не задано'):?>selected="selected"<?php endif; ?> value="Не задано" >Не задано</option>
                            <option style="background: #5cb85c; color: #fff;" <?php if($score[$col[$i-1]]=='Был(а)'):?>selected="selected"<?php endif; ?> value="Был(а)" >Был(а)</option>
                            <option style="background: red; color: #fff;" <?php if($score[$col[$i-1]]=='Не был(а)'):?>selected="selected"<?php endif; ?> value="Не был(а)">Не был(а)</option> </select>
                    </td>


                <? endfor;?>
            </tr>
        <?php endforeach;?>


        </tbody>


    </table>
</div>

