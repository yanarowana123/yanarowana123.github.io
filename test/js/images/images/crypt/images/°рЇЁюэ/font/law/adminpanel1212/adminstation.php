<?php
/*
������ ������ ���������� ���������� �������� ������������, ����� �����.
����� ������������� ������� �������, ��������� ������ � ����������� �������� ������.
������ ������� �������: http://adminstation.ru/images/docs/doc1.jpg
���� ����������: 14.10.2007 �. - �������������� 17.04.2009 �.

-> ������� ���� ��������� AdminStation
*/

include "../cfg.php";
include "../ini.php";
if($status == 1 || $status == 2) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>AdminStation || ������� ���������� �������� �<?php print $cfgURL; ?>�</title>
<link href="files/favicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="files/styles.css" rel="stylesheet" type="text/css" />
<script src="files/jquery.js"></script>
<script language="JavaScript">
<!--
function popUP(url,width,height) {
	if(!width) { width = 780; }
	if(!height) { height = 450; }
	var posx = 200;
	var posy = 200;
	var w=window.open(url,'wind','left='+posx+',top='+posy+',width='+width+',height='+height+',status:no, help:no');
	return false;
}
//-->
</script>
</head>
<body>
<table align="center" width="990" height="100%" border="0" cellpadding="0" cellspacing="0">
	<tr height="65">
		<td>
			<table align="center" width="990" height="65" border="0" cellpadding="0" cellspacing="0">
				<tr valign="top">
					<td><a href="adminstation.php"><img src="images/logo.jpg" width="202" height="65" alt="CMS AdminStation" border="0" /></a></td>
					<td width="30"><a href="/" target="_blank"><img src="images/home.gif" width="30" height="48" border="0" alt="������� �� ������� �������� �����" title="������� �� ������� �������� �����" /></a></td>
					<td width="10"></td>
					<td width="30"><a href="adminstation.php"><img src="images/stat_menu.gif" width="30" height="48" border="0" alt="����������" title="����������" /></a></td>
					<td width="10"></td>
					<td width="30"><a href="?a=antivirus"><img src="images/antivirus.gif" width="30" height="48" border="0" alt="���������" title="���������" /></a></td>
					<td width="10"></td>
					<td width="30"><img style="cursor: pointer;" onclick="popUP('http://adminstation.ru/help/index.html',775,450);" src="images/help.gif" width="30" height="48" border="0" alt="������" title="������" /></td>
					<td width="10"></td>
					<td width="30"><img style="cursor: pointer;" onclick="if(confirm('�� ������������� ������ �����?')) top.location.href='/exit.php';" src="images/exit.gif" width="30" height="48" border="0" alt="�����" title="�����" /></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="1">
			<table class="menu">
				<tr>
					<td width="25%"><a class="menutop" href="?a=news">�������� �������</a></td>
					<td width="25%"><a class="menutop" href="?a=add_page">������� ��������</a></td>
					<td width="25%"><a class="menutop" href="?a=pages">��������� ��������</a></td>
					<td width="25%"><a class="menutop" href="?a=paysystems">��������� �������</a></td>
				</tr>

				<tr>
					<td><a class="menutop" href="?a=deposits">��������</a></td>
					<td><a class="menutop" href="?a=plans">�������������� �����</a></td>
					<td><a class="menutop" href="?">����������� ������</a></td>
					<td><a class="menutop" href="?a=fake">�������� ����������</a></td>
				</tr>
				<tr>
					<td><a class="menutop" href="?a=users">���������� ��������������</a></td>
					<td><a class="menutop" href="?a=mailto">�������� �������������</a></td>
					<td><a class="menutop" href="?a=reftop">������� ���������</a></td>
					<td><a class="menutop" href="?a=change_pass">������� ������</a></td>
				</tr>
				<tr>					
					<td><a class="menutop" href="?a=settings">��������� �������</a></td>
					<td><a class="menutop" href="?a=serverinf">���������� � �������</a></td>
					<td><a class="menutop" href="?a=blacklist">������ ������ IP</a></td>
					<td><a class="menutop" href="?a=logip">���������� IP</a></td>
				</tr>
				<tr>					
					<td><a class="menutop" href="?a=accounting">�����������</a></td>
					<td><a class="menutop" href="?a=edit&s=2">���������� �����</a></td>
					<td><a class="menutop" href="?a=edit">����� �������</a></td>
					<td><a class="menutop" href="?a=antivirus">���������</a></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="5"></td>
	</tr>
	<tr>
		<td valign="top" style="border-radius: 4 4 0 0px; padding: 10 10 10 10px; border: 1px solid #547898; background:URL(images/logo_down.jpg) no-repeat bottom right;">
<?php
$a	= substr(addslashes(htmlspecialchars($_GET['a'], ENT_QUOTES, '')), 0, 15);

	if(!$a) {
		include "modules/index.php";
	} elseif(file_exists("modules/".$a.".php")) {
		include "modules/".$a.".php";
	} else {
		include "modules/error.php";
	}

?>&nbsp;
		</td>
	</tr>
	<tr height="33" bgcolor="#5e87a9">
		<td align="center" style="color: #ffffff;">&copy; 2007-<?php print date(Y); ?> CMS <a style="color: #ffffff;" href="http://adminstation.ru/" target="_blank">AdminStation</a> v4.0<br />
		��� ����� ��������!</td>
	</tr>
</table>



</body>
</html>
<?php
} else {
print "<html><head><script language=\"javascript\">top.location.href='index.php';</script></head><body><a href=\"index.php\"><b>Index</b></a></body></html>";
}
?>