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


		    if(!$name) {
				print "<p class=\"er\">������� ���������� ���� ���!</p>";
		}
		elseif(!$mail) {
				print "<p class=\"er\">������� ���������� ��� e-mail!</p>";
		}
		elseif(!$subj) {
				print "<p class=\"er\">������� ���������� ���� ������ ���������!</p>";
		}
		elseif(!$textform) {
				print "<p class=\"er\">������� ���������� ����� ������ ���������!</p>";
		}
		elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is",$mail)) {
				print "<p class=\"er\">������� ���������� ��� e-mail �������!</p>";

		} else {

			$headers = "From: ".$mail."\n";
			$headers .= "Reply-to: ".$mail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$textform = "������������, ".$name."!<br />�� ������ ���, ������ e-mail: ".$mail.", ��� ���������� ���������:<p> >".$textform."</p>";

			$send = mail($adminmail,$subj,$textform,$headers);

			if(!$send) {
				print "<p class=\"er\">������ ��������� �������!<br />�������� ��������� �� ��������������� ����������.</p>";
			} else {

				print "<p class=\"erok\">���� ��������� ����������!</p>";

				$name		= "";
				$mail		= "";
				$subj		= "";
				$textform	= "";
			}
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

<center><form action="?action=submit" method="post">
<center>
<table width="400" align="center" cellpadding="1" cellspacing="1" border="0" style="margin-top: 15px;">
	<tr>
		<td>Enter your name:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="name" size="50" maxlength="50" value="<?php if(!$name) { print $login; } else { print $name; } ?>" /></td>
	</tr>
	<tr>
		<td>Enter your e-mail:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="mail" size="50" maxlength="50" value="<?php if(!$mail) { print $user_mail; } else { print $mail; } ?>" /></td>
	</tr>
	<tr>
		<td>Enter the message subject:</td>
	</tr>
	<tr>
		<td><input style="width: 400px;" type="text" name="subj" size="50" maxlength="100" value="<?php print $subj; ?>" /></td>
	</tr>
	<tr>
		<td>Enter the message text:</td>
	</tr>
	<tr>
		<td><textarea style="width: 400px; margin-left: 0px;" name="textform" cols="40" rows="8"><?php print $textform; ?></textarea></td>
	</tr>
	<tr>
		<td>
			<table align="right" cellpadding="1" cellspacing="1" border="0">
				<tr>

					<td>

                    <input style="margin: 0px -310px;" class="button" "  type="submit" value=" Send! " /></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</center>
</form></center>