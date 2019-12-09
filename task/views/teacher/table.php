
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


