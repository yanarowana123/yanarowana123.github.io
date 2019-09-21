<script language="javascript" type="text/javascript" src="files/alt.js"></script>
<?php
/*
Данный скрипт разработан Михайленко Виктором Леонидовичем, далее автор.
Любое использование данного скрипта, разрешено только с письменного согласия автора.
Скрипт защещён законом: http://adminstation.ru/images/docs/doc1.jpg
Дата разработки: 14.10.2007 г.

-> Файл вывода финансовых взаисорасчётов
*/

$s = $_GET['s'];

if($_GET['conf']) {

	$query	= "SELECT * FROM enter WHERE id = ".intval($_GET['conf'])." LIMIT 1";
	$result	= mysql_query($query);
	$row	= mysql_fetch_array($result);

	mysql_query('UPDATE users SET pm_balance = pm_balance + '.$row['sum'].' WHERE login = "'.$row['login'].'" LIMIT 1');
	mysql_query("UPDATE enter SET status = 2 WHERE id = ".intval($_GET['conf'])." LIMIT 1");

	print '<p class="erok">Деньги зачислены на баланс пользователю</p>';
} elseif($_GET['cencel']) {

	$cencel = intval($_GET['cencel']);

	$query	= "SELECT * FROM output WHERE id = ".intval($cencel)." LIMIT 1";
	$result	= mysql_query($query);
	$row	= mysql_fetch_array($result);

	mysql_query("UPDATE output SET status = 6 WHERE id = ".intval($cencel)." LIMIT 1");
	mysql_query('UPDATE users SET pm_balance = pm_balance + '.$row['sum'].' WHERE login = "'.$row['login'].'" LIMIT 1');

	print '<p class="erok">Заявка отменена!</p>';
}

if($s == 2) {
	print "<p>Показать: <a href=\"?a=edit&s=2\"><u>Пополнение счёта</u></a> | <a href=\"?a=edit&s=1\">Вывод со счёта</a><hr /></p>";
?>
<div align="right">
	<a href="?a=edit&s=2&sort=1">В процессе</a> |
	<a href="?a=edit&s=2">Выполненые</a> |
	<a href="?a=edit&s=2&sort=3">В ожидании</a>
</div>
<?php
if ($_GET['action'] == 'clean') {
	$postvar = array_keys($_POST);
	$count	 = 0;
	while($count < count($postvar)) {
		$sid = $_POST[$postvar[$count]];

		$query		= 'UPDATE enter SET status = 5 WHERE id = '.$sid.' LIMIT 1';
		$query_res	= mysql_query($query);

	$count++;
	}
}

if (isset($_GET['sort'])) {
	$sort = $_GET['sort'];
} else {
	$sort = 0;
}

function topics_list($page, $num, $status, $query)
{
?>
<table align="center" width="100%" border="0" bgcolor="#547898" cellpadding="1" cellspacing="1">
<tr align="center" height="19" style="background:URL(images/menu.gif) repeat-x top left;">
	<td width="150"><b>Дата</b></td>
	<td><b>Логин</b></td>
	<td width="100"><b>Сумма</b></td>
	<td width="120"><b>Счет</b></td>
	<td width="70"><b>Система</b></td>
	<td width="70"><b>Статус</b></td>
</tr>
<form action='?a=edit&s=2&sort=<?php print $_GET[sort]; ?>&action=clean' method='post'>
<?php
	$result = mysql_query($query);
	$themes = mysql_num_rows($result);
	$total = intval(($themes - 1) / $num) + 1;
	if (empty($page) or $page < 0) $page = 1;
	if ($page > $total) $page = $total;
	$start = $page * $num - $num;
	$result = mysql_query($query.' LIMIT '.$start.', '.$num);
	while ($topics = mysql_fetch_array($result))
	{
		print '<tr align="center" bgcolor="#ffffff">
		<td><input type="checkbox" name="box'.$topics['id'].'" value="'.$topics['id'].'" /> '.date("d.m.Y H:i:s", $topics['date']).'</td>
		<td align="left"><a href="?a=edit_user&l='.$topics['login'].'" target="_blank"><b>'.$topics['login'].'</b></a></td>
		<td>'.$topics['sum'].'</td>
		<td>'.$topics['purse'].'</td>
		<td>'.$topics['paysys'].'</td>
		<td>'.$topics['status'].' ';
		
		if ($topics['status'] == 1) {
			print '<a href="?a=edit&s=2&sort=3&conf='.$topics['id'].'&l='.$topics['login'].'"><img border="0" src="images/status.gif" width="12" height="12" alt="Подтвердить платеж и зачислить деньги на баланс" /></a> ';
		}

		print '</td></tr>';
	}
?>
<tr><td><input class="input" type="submit" value="Очистить" /></td></tr>
</form>
</table>
<?php
	if ($page != 1) $pervpage = "<a href=?a=edit&s=2&sort=".$_GET['sort']."&page=". ($page - 1) .">«</a>";
	if ($page != $total) $nextpage = " <a href=?a=edit&sort=".$_GET['sort']."&s=2&page=". ($page + 1) .">»</a>";
	if ($page - 2 > 0) $page2left = " <a href=?a=edit&s=2&sort=".$_GET['sort']."&page=". ($page - 2) .">". ($page - 2) ."</a> | ";
	if ($page - 1 > 0) $page1left = " <a href=?a=edit&s=2&sort=".$_GET['sort']."&page=". ($page - 1) .">". ($page - 1) ."</a> | ";
	if ($page + 2 <= $total) $page2right = " | <a href=?a=edit&s=2&sort=".$_GET['sort']."&page=". ($page + 2) .">". ($page + 2) ."</a>";
	if ($page + 1 <= $total) $page1right = " | <a href=?a=edit&s=2&sort=".$_GET['sort']."&page=". ($page + 1) .">". ($page + 1) ."</a>";
	print "<b>Страницы: </b>".$pervpage.$page2left.$page1left."[".$page."]".$page1right.$page2right.$nextpage;
}

$sql = 'SELECT * FROM enter';

if($sort == 1) {
	$sql .= ' WHERE status != 2 AND status != 5 AND status != 1 ORDER BY id DESC';
} elseif($sort == 3) {
	$sql .= ' WHERE status = 1 ORDER BY id DESC';
} else {
	$sql .= ' WHERE status = 2 AND status != 5 ORDER BY id DESC';
}

$page = intval($_GET['page']);
topics_list($page, 50, $status, $sql);
} else {
	print "<p>Показать: <a href=\"?a=edit&s=2\">Пополнение счёта</a> | <a href=\"?a=edit&s=1\"><u>Вывод со счёта</u></a><hr /></p>";
?>
<div align="right"><a href="?a=edit&sort=1">Выполненные</a> | <a href="?a=edit&sort=0">Невыполненные</a></div>
<?php
$action = $_GET['action'];
if($action == "setstatus") {
	$id = $_GET['id'];

	$query_res = 'UPDATE output SET status = 2 WHERE id='.$id.' LIMIT 1';
	$query_res = mysql_query($query_res);

}

if ($_GET['action'] == 'clean') {
	$postvar = array_keys($_POST);
	$count	 = 0;
	while($count < count($postvar)) {
		$sid = $_POST[$postvar[$count]];

		$query		= 'UPDATE output SET status = 5 WHERE id = '.$sid.' LIMIT 1';
		$query_res	= mysql_query($query);

	$count++;
	}
}

if (isset($_GET['sort'])) {
	$sort = $_GET['sort'];
} else {
	$sort = 0;
}

function topics_list($page, $num, $status, $query, $cfgURL)
{
?>
<table align="center" width="100%" border="0" bgcolor="#547898" cellpadding="1" cellspacing="1">
<tr align="center" height="19" style="background:URL(images/menu.gif) repeat-x top left;">
	<td width="150"><b>Дата</b></td>
	<td><b>Логин</b></td>
	<td width="100"><b>Сумма</b></td>
	<td width="120"><b>Счет</b></td>
	<td width="100"><b>Система</b></td>
	<td width="70"><b>Действие</b></td>
</tr>
<form action='?a=edit&s=1&sort=<?php print $_GET[sort]; ?>&action=clean' method='post'>
<?php
	$result = mysql_query($query);
	$themes = mysql_num_rows($result);
	$total = intval(($themes - 1) / $num) + 1;
	if (empty($page) or $page < 0) $page = 1;
	if ($page > $total) $page = $total;
	$start = $page * $num - $num;
	$result = mysql_query($query.' LIMIT '.$start.', '.$num);
	$esum	= 0.00;
	$osum	= 0.00;
	while ($topics = mysql_fetch_array($result))
	{

		$esum	= sprintf ("%01.2f", $esum + $topics['sum']);
		$get_ps	= mysql_query("SELECT name FROM paysystems WHERE id = ".intval($topics['paysys'])." LIMIT 1");
		$rowps	= mysql_fetch_array($get_ps);

		print '<tr align="center" bgcolor="#ffffff">
		<td><input type="checkbox" name="box'.$topics['id'].'" value="'.$topics['id'].'" /> '.date("d.m.Y H:i:s", $topics['date']).'</td>
		<td align="left"><a href="?a=edit_user&l='.$topics['login'].'" target="_blank"><b>'.$topics['login'].'</b></a></td>
		<td>'.$topics['sum'].'</td>
		<td>'.$topics['purse'].'</td>
		<td>'.$rowps['name'].'</td>
		<td>';

		if (!$topics['status']) {
			print '<a href="?a=edit&action=setstatus&id='.$topics['id'].'&l='.$topics['login'].'"><img border="0" src="images/status.gif" width="12" height="12" alt="Заявка выполнена! Убрать!" /></a> ';
		}
			print "<img style=\"cursor: pointer;\" onclick=\"if(confirm('Вы уверены?')) top.location.href='del/output.php?id=".$topics['id']."'\"; src=\"images/del.gif\" width=\"12\" height=\"12\" border=\"0\" alt=\"Удалить\" /> <img style=\"cursor: pointer;\" onclick=\"if(confirm('Вы уверены?')) top.location.href='?a=edit&s=1&cencel=".$topics['id']."'\"; src=\"images/cencel_ico.gif\" width=\"12\" height=\"12\" border=\"0\" alt=\"Отменить заявку и вернуть средства на баланс\" /></td></tr>";
	}
?>
<tr>
	<td><input class="input" type="submit" name="submit" value="Очистить" /></td>
	<td></td>
	<td align="center"><b style="color: #ffffff;"><?php print $esum; ?></b></td>
	<td></td>
	<td></td>
</tr>
</form>
</table>
<?php
	if ($page != 1) $pervpage = "<a href=?a=edit&sort=".$_GET['sort']."&page=". ($page - 1) ."><<</a>";
	if ($page != $total) $nextpage = " <a href=?a=edit&sort=".$_GET['sort']."&page=". ($page + 1) .">>></a>";
	if ($page - 2 > 0) $page2left = " <a href=?a=edit&sort=".$_GET['sort']."&page=". ($page - 2) .">". ($page - 2) ."</a> | ";
	if ($page - 1 > 0) $page1left = " <a href=?a=edit&sort=".$_GET['sort']."&page=". ($page - 1) .">". ($page - 1) ."</a> | ";
	if ($page + 2 <= $total) $page2right = " | <a href=?a=edit&sort=".$_GET['sort']."&page=". ($page + 2) .">". ($page + 2) ."</a>";
	if ($page + 1 <= $total) $page1right = " | <a href=?a=edit&sort=".$_GET['sort']."&page=". ($page + 1) .">". ($page + 1) ."</a>";
	print "<b>Страницы: </b>".$pervpage.$page2left.$page1left."[".$page."]".$page1right.$page2right.$nextpage;
}

$sql = 'SELECT * FROM output';

switch ($sort)
{
case 0:
	$sql .= ' WHERE status = 0 ORDER BY id DESC';
	break;
case 1:
	$sql .= ' WHERE status = 2 ORDER BY id DESC';
	break;
}

$page = intval($_GET['page']);
topics_list($page, 50, $status, $sql, $cfgURL);

}
?>