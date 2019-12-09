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