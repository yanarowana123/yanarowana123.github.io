<select name="subjectSelect" id="subjectSelect"  class="form-control">


    <option disabled selected value>Выбрать предмет</option>
    <?php
    foreach ($subjectsArr as $subjectArr){

        echo "<option value='$subjectArr[subject_id]'>$subjectArr[subject_title]</option>";
    }
    ?>
</select>
