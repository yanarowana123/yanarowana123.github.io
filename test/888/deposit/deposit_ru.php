


<div id="content">
			<!-- start BOX -->
			<div class="box">

			<?php




defined('ACCESS') or die();

if($login) {

if($_GET['add'] == "deposit") {

	$plan	= intval($_POST['plan']);
	$sum	= sprintf("%01.2f", $_POST['sum']);
	$reinv	= sprintf("%01.2f", $_POST['reinv']);
	$paysys	= intval($_POST['paysys']);

	if($plan && $sum) {

	$result	= mysql_query("SELECT * FROM plans WHERE id = ".$plan." LIMIT 1");
	$row	= mysql_fetch_array($result);

		if(!$row['id']) {
			print '<p class="er">�������� �������� ����</p>';
		} elseif($sum < $row['minsum'] || ($sum > $row['maxsum'] && $row['maxsum'] != 0)) {
			print '<p class="er">����� �� ������������� ��������� �����</p>';
		} elseif($sum > $pmbalance) {
			print '<p class="er">� ��� ������������ ������� �� �����, ����������� <a href="/enter/">���������</a> ���.</p>';
		} elseif($reinv < 0 && $reinv > 100) {
			print '<p class="er">������� ������������ ������ ���� �� 0 �� 100</p>';
		} else {

			if($row['bonusdeposit']) {
				$depo	= sprintf("%01.2f", $sum + $sum / 100 * $row['bonusdeposit']);
			} else {
				$depo	= $sum;
			}

			// ��������� ����
			if(cfgSET('datestart') <= time()) {
				$lastdate	= time();
				$weekend	= $row['weekend'];
				$day		= date("w");

				if($day == 0 && $weekend == 1) {
					$nad = intval((24 - date("H")) * 3600);
				} elseif($day == 6 && $weekend == 1) {
					$nad = intval((24 - date("H")) * 3600 + 86400);
				} else {
					$nad = 0;
				}

				if($row['period'] == 1) {
					$nextdate = $lastdate + 86400 + $nad;
				} elseif($row['period'] == 2) {
					$nextdate = $lastdate + 604800 + $nad;
				} elseif($row['period'] == 3) {
					$nextdate = $lastdate + 2592000 + $nad;
				} elseif($row['period'] == 4) {
					$nextdate = $lastdate + 3600 + $nad;
				}
			} else {
				$lastdate = time();
				if($row['period'] == 1) {
					$nextdate = cfgSET('datestart') + 86400;
				} elseif($row['period'] == 2) {
					$nextdate = cfgSET('datestart') + 604800;
				} elseif($row['period'] == 3) {
					$nextdate = cfgSET('datestart') + 2592000;
				} elseif($row['period'] == 4) {
					$nextdate = cfgSET('datestart') + 3600;
				}
			}

			$sql = "INSERT INTO `deposits` (username, user_id, date, plan, sum, paysys, lastdate, nextdate, reinvest) VALUES ('".$login."', ".$user_id.", ".time().", ".$plan.", ".$depo.", ".$paysys.", ".$lastdate.", ".$nextdate.", ".$reinv.")";
			mysql_query($sql);

			mysql_query('UPDATE users SET pm_balance = pm_balance - '.$sum.' WHERE id = '.$user_id.' LIMIT 1');

			// ��������� �����

			if($row['bonusbalance']) {
				$bonus	= sprintf("%01.2f", $sum / 100 * $row['bonusbalance']);
				mysql_query('UPDATE users SET pm_balance = pm_balance + '.$bonus.' WHERE id = '.$user_id.' LIMIT 1');
			}

			// ��������� ����� "�������" ���������
			if($uref) {

				// ������������ ���-�� �������
				$countlvl = mysql_num_rows(mysql_query("SELECT * FROM reflevels"));

				if($countlvl) {
					$i		= 0;
					$uid	= $user_id;
					$query	= "SELECT * FROM reflevels ORDER BY id ASC";
					$result	= mysql_query($query);
					while($row = mysql_fetch_array($result)) {
						if($i < $countlvl) {
							$lvlperc = $row['sum'];		// ������� ������
							$ps		 = sprintf("%01.2f", $sum / 100 * $lvlperc); // ����� �������

							if($uref) {

								// ������� ���� �� �������������� ������� � ������� ��������
								$get_refp	= mysql_query("SELECT ref_percent FROM users WHERE id = ".intval($urefp)." LIMIT 1");
								$rowrefp	= mysql_fetch_array($get_refp);
								$urefp		= $rowrefp['ref_percent'];

								if($i == 0 && $urefp) {
									$ps = sprintf("%01.2f", $sum / 100 * $urefp); // ����� �������
								}

								mysql_query('UPDATE users SET pm_balance = pm_balance + '.$ps.', reftop = reftop + '.$ps.' WHERE id = '.$uref.' LIMIT 1');

								mysql_query('UPDATE users SET ref_money = ref_money + '.$ps.' WHERE id = '.$uid.' LIMIT 1');

								// �������� ������ ���������� ������������

								$get_ref	= mysql_query("SELECT id, ref FROM users WHERE id = ".intval($uref)." LIMIT 1");
								$rowref		= mysql_fetch_array($get_ref);
								$uref		= $rowref['ref'];
								$uid		= $rowref['id'];

							}

						}
						$i++;
					}
				}

			}
			// ��������� � ����������

			print '<p class="erok">������� ������! <a href="/deposits/">� ������ ��������� �</a></p>';
		}

	} else {
		print '<br><p class="er">�������� �������� ����, ��������� ������� � ������� ����� ��������</p>';
	}

}
?>
<form method="post" action="?add=deposit">

<?php
$result	= mysql_query("SELECT * FROM plans WHERE status = 0 ORDER BY id ASC");
$i = 0;
while($row = mysql_fetch_array($result)) {

print "

<ul class=\"plans\">
<li>
<p class=\"radio\"><input  type=\"radio\" name=\"plan\" value=\"".$row['id']."\" checked /> </p>";

		print "<p class=\"title\"><span class=\"orange bold\">".$row['percent']."%</span> � ";
		if($row['period'] == 1) { print "����"; } elseif($row['period'] == 2) { print "������"; } elseif($row['period'] == 4) { print "���"; } else { print "�����"; }
		print ", ������ ".$row['days'];
		if($row['period'] == 4) { print " �����"; } elseif($row['period'] == 1) { print " ����"; } elseif($row['period'] == 2) { print " ������"; } elseif($row['period'] == 3) { print " �������"; }
		print "</p>
		<p class=\"limits\">Min : <span class=\"bold\">$".$row['minsum']."</span><br />Max : <span class=\"bold\">$".$row['maxsum']."</span></p>
		</li>
		</ul>




<tr>
	<td height=\"1\" bgcolor=\"#cccccc\"></td>
</tr>
<tr>
	<td height=\"15\"><script language=\"JavaScript\"><!-- var per['".$row['percent']."']; var cou['".$row['days']."']; //--></script></td>
</tr>";

$i++;
}
if(!$i) { print '<p class="warn">�� ������ ������ ������������� �� ������ �������� ������ ��� ���������</p>'; }
?>




<table width="100%">
<tr>
	<td align="right">����� ($): </td>
	<td width="205"><input style="width: 205px;" type="text" name="sum" value="<?php print $pmbalance; ?>" /></td>
</tr>

<?php
if(cfgSET('cfgReInv') == "on") {
	print '<tr>
	<td align="right">��������������� (%): </td>
	<td width="205"><input style="width: 198px;" type="text" name="reinv" value="0" /></td>
	</tr>';
}
?>

<tr>
	<td></td>
	<td><input style="width: 205px; margin: 5px 0 0 0" class="subm"  type="submit" value=" ������� ������� " /></td>
</tr>
</table>

</form>
<?php
} else {
	print "<p class=\"er\">��� ������� � ������ �������� ��� ���������� ����������������</p>";
	include "../login/login_ru.php";
}
?></div></div>