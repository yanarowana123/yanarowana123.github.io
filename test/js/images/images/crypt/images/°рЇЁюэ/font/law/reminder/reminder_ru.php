<?php
defined('ACCESS') or die();
function generator($case1, $case2, $case3, $case4, $num1) {
	$password = "";

	$small="abcdefghijklmnopqrstuvwxyz";
	$large="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$numbers="1234567890";
	$symbols="~!#$%^&*()_+-=,./<>?|:;@";
	mt_srand((double)microtime()*1000000);

	for ($i=0; $i<$num1; $i++) {

		$type = mt_rand(1,4);
		switch ($type) {
		case 1:
			if ($case1 == "on") { $password .= $large[mt_rand(0,25)]; } else { $i--; }
			break;
		case 2:
			if ($case2 == "on") { $password .= $small[mt_rand(0,25)]; } else { $i--; }
			break;
		case 3:
			if ($case3 == "on") { $password .= $numbers[mt_rand(0,9)]; } else { $i--; }
			break;
		case 4:
			if ($case4 == "on") { $password .= $symbols[mt_rand(0,24)]; } else { $i--; }
			break;
		}
	}
	return $password;
}

if($_GET['action'] == "send" AND isset($_POST['email']) AND isset($_POST['ulogin'])) {
	$email	= htmlspecialchars($_POST['email'], ENT_QUOTES, '');
	$ulogin = htmlspecialchars($_POST['ulogin'], ENT_QUOTES, '');
	
if(preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is", $email)) {
		$sql	= 'SELECT login, pass, status FROM users WHERE mail = "'.$email.'" AND login = "'.$ulogin.'" LIMIT 1';
		$rs		= mysql_query($sql);
		$a		= mysql_fetch_array($rs);
		$s		= $a['status'];

		if (!$a) {
			print '<p class="er">�������� ���� e-mail �� ������ � ����!</p>';
		} else {

			$case1	= on;
			$case2	= on;
			$case3	= on;
			$case4	= off;
			$num1	= 8;
			$num2	= 1;

			$newpass = generator($case1, $case2, $case3, $case4, $num1);

			$text = "<p>������������ <b>".$a['login']."</b>!</p><p>�� ����� ������� �������� ����� ������ � �������� ".$a['login']."<br /><p>����� ������: <b>".$newpass."</b></p>� ���������, ������������� ������� ".$cfgURL;

			$subject	 = "����� ������ � �������� ".$a['login'];
			$headers = "From: ".$adminmail."\n";
			$headers .= "Reply-to: ".$adminmail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			mysql_query("UPDATE users SET pass = '".as_md5($key, $newpass)."' WHERE login = '".$a['login']."' LIMIT 1");
			if (mail($email,$subject,$text,$headers)) {
				print '<p class="erok">����� ������ ��� ������ �� ��� E-mail!</p>';
			} else {
				print '<p class="er">�� ������ ��������� ������!</p>';
			}
		}
	} else {
		print '<p class="er">������� �������� e-mail!</p>';
	}
}
?><style type="text/css">
.button{
 text-decoration:none;
 text-align:center;
 padding:12px 49px;
 border:solid 1px #b93131;
 -webkit-border-radius:4px;
 -moz-border-radius:4px;
 border-radius: 4px;
 font:22px Arial, Helvetica, sans-serif;
 font-weight:bold;
 color:#E5FFFF;
 background:#b93131;
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;

  }
</style>
<table align="center" border=0>
<form action="?action=send" method=post>
	<tr>
		<td><strong><center>������� �����</center></strong> </td>
	</tr>
	<tr>
		<td><input style="width: 243px;" type="text" name="ulogin" size="30" maxlength="30" /></td>
	</tr>
	<tr>
		<td><strong><center> ������� E-mail</center></strong></td>
	</tr>
	<tr>
		<td><input style="width: 243px;" type="text" name="email" size="45" maxlength="30" /></td>
	</tr>
	<tr>
		<td>
			<table align="center" cellpadding="1" cellspacing="1" border="2"><br>

					<input  class="button"style="width: 245px; "  type="submit" value=" ��������� " />
				
			</table>
		</td>
	</tr>
</form>
</table>