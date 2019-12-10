


<select name="groupSelect" id="groupSelect"  class="form-control">


<option disabled selected value>Выбрать группу</option>
<?php
foreach ($groupsArr as $groupArr){

    echo "<option value='$groupArr[group_id]'>$groupArr[group_title]</option>";
}
?>
</select>
