<?php
/*
������ ������ ���������� ���������� �������� ������������, ����� �����.
����� ������������� ������� �������, ��������� ������ � ����������� �������� ������.
���� ����������: 12.10.2007 �.

-> ���� ����������� ����� � ����������� ������� ������ �� e-mail (���������� �����)
*/
defined('ACCESS') or die();
print $body;
$action = htmlspecialchars(str_replace("'","",substr($_GET['action'],0,6)));

	if($action == "submit") {
		$name		= htmlspecialchars(str_replace("'","",substr($_POST['name'],0,50)), ENT_QUOTES, '');
		$mail		= htmlspecialchars(str_replace("'","",substr($_POST['mail'],0,50)), ENT_QUOTES, '');
		$subj		= htmlspecialchars(str_replace("'","",substr($_POST['subj'],0,100)), ENT_QUOTES, '');
		$textform	= htmlspecialchars(str_replace("'","",substr($_POST['textform'],0,10240)), ENT_QUOTES, '');
		$code		= htmlspecialchars(str_replace("'","",substr($_POST['code'],0,5)), ENT_QUOTES, '');

		    if(!$name) {
				print "<p class=\"er\">Please enter Your name!</p>";
		}
		elseif(!$mail) {
				print "<p class=\"er\">Please enter Your e-mail!</p>";
		}
		elseif(!$subj) {
				print "<p class=\"er\">Please enter a subject for Your message!</p>";
		}
		elseif(!$textform) {
				print "<p class=\"er\">Please enter the text of Your message!</p>";
		}
		elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is",$mail)) {
				print "<p class=\"er\">Please enter Your e-mail valid!</p>";
		} elseif(!mysql_num_rows(mysql_query("SELECT * FROM captcha WHERE sid = '".$sid."' AND ip = '".getip()."' AND code = '".$code."'"))) {
			print "<p class=\"er\">The entered code is not correct!</b></font></center></p>";
		} else {

			$headers = "From: ".$mail."\n";
			$headers .= "Reply-to: ".$mail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$textform = "Hello, ".$name."!<br />You wrote us e-mail specifying: ".$mail.", contact as follows:<p> >".$textform."</p>";

			$send = mail($adminmail,$subj,$textform,$headers);

			if(!$send) {
				print "<p class=\"er\">Error mail server!<br />We apologize for any inconvenience.</p>";
			} else {

				print "<p class=\"erok\">Your message has been sent!</p>";

				$name		= "";
				$mail		= "";
				$subj		= "";
				$textform	= "";
			}
		}
	}
?>
<form action="?action=submit" method="post">
<center>
<table width="400" align="center" cellpadding="1" cellspacing="1" border="0" class="boxbord" style="margin-top: 15px;">
	<tr>
		<td><font color="red"><b>!</b></font> Your name:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="name" size="50" maxlength="50" value="<?php if(!$name) { print $login; } else { print $name; } ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> Your e-mail:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="mail" size="50" maxlength="50" value="<?php if(!$mail) { print $user_mail; } else { print $mail; } ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> Subject matter:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="subj" size="50" maxlength="100" value="<?php print $subj; ?>" /></td>
	</tr>
	<tr>
		<td><font color="red"><b>!</b></font> Message:</td>
	</tr>
	<tr>
		<td><textarea style="width: 400px; margin-left: 0px;" name="textform" cols="40" rows="8"><?php print $textform; ?></textarea></td>
	</tr>
	<tr>
		<td>
			<table align="right" cellpadding="1" cellspacing="1" border="0">
				<tr>
					<td><a href="javascript:void(0);" onclick="this.parentNode.getElementsByTagName('img')[0].src = '/captcha.php?'+Math.random(); return false;"><img src="/captcha.php" width="70" height="25" border="0" alt="Captcha" title="�������� �� ��������, ���� �� ������� �� �������" /></a></td>
					<td><input style="width: 111px; margin: 7px 5px 5px 5px; height: 40px; font-size: 16px; font-weight: bold;" type="text" name="code" size="17" maxlength="5" /></td>
					<td><input class="subm" "  type="submit" value=" Send!" /></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</center>
</form>