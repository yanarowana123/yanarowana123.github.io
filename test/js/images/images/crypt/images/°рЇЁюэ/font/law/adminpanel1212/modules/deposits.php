<script language="javascript" type="text/javascript" src="files/alt.js"></script>
<?php
/*
������ ������ ���������� ���������� �������� ������������, ����� �����.
����� ������������� ������� �������, ��������� ������ � ����������� �������� ������.
������ ������� �������: http://adminstation.ru/images/docs/doc1.jpg
*/
defined('ACCESS') or die();


if($_GET['action'] == "addpercent") {
$date = time() - 86400;
	$percent	= sprintf("%01.2f", $_POST['percent']);

	if($percent > 0) {

		$query	= "SELECT * FROM users WHERE pm_balance > 0";
		$result	= mysql_query($query);
		while($row = mysql_fetch_array($result)) {
		$uref = $row['ref'];
$uid	= $row['id'];
			$p	= sprintf("%01.2f", $row['pm_balance'] / 100 * $percent);

			
				mysql_query('UPDATE users SET pm_balance = pm_balance + '.$p.' WHERE id = '.$row['id'].' LIMIT 1');
			

			// ������ � ����������
			mysql_query('INSERT INTO stat (user_id, date, plan, sum) VALUES ('.$uid.', '.time().', '.$percent.', '.$p.')');
			mysql_query("UPDATE perc SET perc_a = '$percent', full_perc = full_perc + '$percent' WHERE id = 1");
			
			
						// ��������� ����� "�������" ���������
	if($uref > 0) {

				// ������������ ���-�� �������
				$countlvl = mysql_num_rows(mysql_query("SELECT * FROM reflevels"));

				if($countlvl > 0) {
					$i		= 0;
					
					$queryq	= "SELECT * FROM reflevels ORDER BY id ASC";
					$resultq	= mysql_query($queryq);
					while($roww = mysql_fetch_array($resultq)) {
						if($i < $countlvl) {
							$lvlperc = $roww['sum'];		// ������� ������
							$ps		 = sprintf("%01.2f", $p / 100 * $lvlperc); // ����� �������

							if($uref > 0) {
									mysql_query('UPDATE users SET pm_balance = pm_balance + '.$ps.', reftop = reftop + '.$ps.' WHERE id = '.$uref.' LIMIT 1');

								mysql_query('UPDATE users SET ref_money = ref_money + '.$ps.' WHERE id = '.$uid.' LIMIT 1');

								// �������� ������ ���������� ������������

								$get_ref	= mysql_query("SELECT id, ref FROM users WHERE id = ".intval($uref)." LIMIT 1");
								$rowref		= mysql_fetch_array($get_ref);
								$uref		= $rowref['ref'];
								$uid		= $rowref['id'];
								echo $ps;

							}

						}
						$i++;
					}
				}

			
			// ��������� � ����������

		}
		
	}
		
		print '<p class="erok">�������� ���� ���������! �� ���������� ��������!</p>';
	} else {
		print '<p class="er">������� ������� ����������</p>';
	}
}

$money = 0.00;
$query	= "SELECT `pm_balance` FROM `users`";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['pm_balance'];
}
?>
<center><b>����� �������� ��������� �� �����: $<?php print sprintf("%01.2f", $money); ?></b></center>
<hr />
 

<form action="?a=deposits&action=addpercent" method="post">
<FIELDSET style="border: solid #666666 1px; padding: 10px; margin-top: 20px;">
<LEGEND><b>��������� �������� �� ��������� �������</b></LEGEND>
<table width="100%" border="0">
	<tr>
		<td><strong>������� �� ����� ������:</strong></td>
		<td><input style="width: 720px;" type="text" name="percent" size="93" /></td>
		<td></td>
	</tr>
	<tr>
		<td><strong>�������� ����:</strong></td>
		<td><select name="plan" style="width: 720px;">
		<option value="0">��������� �� ���� �������� ������</option>
<?php
$result	= mysql_query("SELECT * FROM plans ORDER BY id ASC");
while($row = mysql_fetch_array($result)) {
	print '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
?></select></td>
		<td align="center"><input type="image" src="images/save.gif" width="28" height="29" border="0" title="���������!" /></td>
	</tr>
</table>
</FIELDSET>
</form>