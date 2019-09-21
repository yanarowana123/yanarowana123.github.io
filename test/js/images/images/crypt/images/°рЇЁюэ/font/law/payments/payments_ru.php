<?php
	 print $body;
?>

<center>	<table>

				<?php
$sql	= 'SELECT * FROM output WHERE status = 2 ORDER BY id DESC LIMIT 6';
$rs		= mysql_query($sql);
$i		= 0;
while($a = mysql_fetch_array($rs)) {
	print '
								<tr><td>'.$a['login'].'</td>
								<td>'.date("d.m.y H:i", $a['date']).'</td>

								<td class="value">$'.$a['sum'].'</td>
								</tr>
							';
$i++;
}

if($i == 0) {
	print '<tr><td><div class="m"><center>No found!</center></div></td></tr>';
}
?>



							</table></center>