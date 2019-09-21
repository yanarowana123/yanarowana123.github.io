<?php
print $body;
defined('ACCESS') or die();
if($_GET['action'] == "save") {
		$ulogin	= htmlspecialchars($_POST['ulogin'], ENT_QUOTES, '');
		$pass	= $_POST['pass'];
		$repass	= $_POST['repass'];
		$email	= htmlspecialchars($_POST['email'], ENT_QUOTES, '');

		$skype	= htmlspecialchars($_POST["skype"], ENT_QUOTES, '');
		$pm		= htmlspecialchars($_POST["pm"], ENT_QUOTES, '');
		$pe		= htmlspecialchars($_POST["pe"], ENT_QUOTES, '');
		$yes	= intval($_POST['yes']);

		if(!$ulogin || !$pass || !$repass || !$email || !$yes) {
			$error = "<p class=\"er\">Заполните все поля обязательные для заполнения</p>";
		} elseif(strlen($ulogin) > 20 || strlen($ulogin) < 3) {
			$error = "<p class=\"er\">Логин должен содержать от 3-х до 20 символов</p>";
		} elseif($pass != $repass) {
			$error = "<p class=\"er\">Пароли не совпадают</p>";
		} elseif(strlen($email) > 30) {
			$error = "<p class=\"er\">E-mail должен содержать до 30 символов</p>";


		} elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is", $email)) {
			$error = "<p class=\"er\">Введите валидно e-mail</p>";
		} elseif(mysql_num_rows(mysql_query("SELECT login FROM users WHERE login = '".$ulogin."'"))) {
			$error = "<p class=\"er\">Такой логин уже есть в базе! Выберите пожалуйста другой</p>";
		} elseif(mysql_num_rows(mysql_query("SELECT mail FROM users WHERE mail = '".$email."'"))) {
			$error = "<p class=\"er\">Такой e-mail уже есть в базе!</p>";
		} else {
			$time	 = time();
			$ip		 = getip();
			$pass	 = as_md5($key, $pass);
			if($referal) { 
				$get_user_info	= mysql_query("SELECT * FROM users WHERE login = '".$referal."' LIMIT 1");
				$row			= mysql_fetch_array($get_user_info);
				$ref_id			= intval($row['id']);
			} else { 
				$ref_id = 0; 
			}

			if(cfgSET('cfgMailConf') == "on") {
				$active		= 1;
				$actlink	= "Ваша ссылка для активации аккаунта: http://".$cfgURL."/activate.php?m=".$email."&h=".as_md5($key, $ulogin.$email);
			} else {
				$active		= 0;
				$actlink	= "";
			}

			$sql = "INSERT INTO users (login, pass, mail, go_time, ip, reg_time, ref, pm, active, skype, pe) VALUES ('".$ulogin."', '".$pass."', '".$email."', ".$time.", '".$ip."', ".$time.", ".$ref_id.", '".$pm."', ".$active.", '".$skype."', '".$pe."')";
			mysql_query($sql);

			$subject = "Поздравляем Вас с успешной регистрацией";

			$headers = "From: ".$adminmail."\n";
			$headers .= "Reply-to: ".$adminmail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$text = "Здравствуйте <b>".$ulogin."!</b><br />Поздравляем Вас с успешной регистрацией в сервисе <a href=\"http://".$cfgURL."/\" target=\"_blank\">http://".$cfgURL."</a><br />Ваш Login: <b>".$ulogin."</b><br />Ваш пароль: <b>".$repass."</b><br />".$actlink."<br /><br />С Уважением, администрация проекта ".$cfgURL;

			mail($email, $subject, $text, $headers);

			$ulogin	= "";
			$pass	= "";
			$repass	= "";
			$email	= "";
			$skype	= "";
			$pm		= "";
			$pe		= "";

			$error = 1;
		}
}

if($error == 1) {

	print  "<p class=\"erok\">Поздравляем! Вы зарегистрировались. Авторизируйтесь пожалуйста.</p>";
	include "../login/login_ru.php";

} else {
	print $error;
?><style type="text/css">
.popbg .lgcontent .key-bb input[type="submit"] {
    background: #b93131 none repeat scroll 0 0;
    border: 0 none;
    color: #fff;
    cursor: pointer;
    font-family: "HelveticaNeueCyr-Light",tahoma,sans-serif;
    font-size: 16px;
    height: 50px;
    line-height: 50px;
    padding-left: 30px;
    padding-right: 30px;
}
</style>

<style type="text/css">
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
<center>
<form action="?action=save" method="post">
<table align="center" width="400" border="0" cellpadding="3" cellspacing="1">
	<tr>
		<td>Login:</td>
		<td align="center"><input style="width: 200px;" type="text" name="ulogin" value="<?php print $ulogin; ?>" size="30" maxlength="30" /></td>
	</tr>
	<tr>
		<td>Create a password:</td><td align="center"><input style="width: 200px;" type="password" name="pass" size="30" maxlength="20" /></td>
	</tr>
	<tr>
		<td>The password again:</td>
		<td align="center"><input style="width: 200px;" type="password" name="repass" size="30" maxlength="20" /></td>
	</tr>
	<tr>
		<td>E-mail:</td>
		<td align="center"><input style="width: 200px;" type="text" name="email" value="<?php print $email; ?>" size="30" maxlength="30" /></td>
	</tr>
	<tr>
		<td>Skype:</td>
		<td align="center"><input style="width: 200px;" type="text" name="skype" value="<?php print $skype; ?>" size="30" maxlength="50" /></td>
	</tr>
<?php
if($cfgPerfect) {	
?>
	<tr>
		<td>PerfectMoney: </td><td align="center"><input style="width: 200px;" type="text" name="pm" value="<?php print $pm; ?>" size="30" maxlength="10" /></td>
	</tr>
<?php
}
if(cfgSET('cfgPEsid') && cfgSET('cfgPEkey')) {	
?>
	<tr>
		<td>PAYEER.com</td><td align="center"><input style="width: 200px;" type="text" name="pe" value="<?php print $pe; ?>" size="30" maxlength="50" /></td>
	</tr>
<?php
}
?>

	<tr>
		<td colspan="2" align="center"><font color="red"><b>!</b></font> <label><input class="check" type="checkbox" name="yes" value="1" /> <b>I certify that I'm 18+</b></label></td>
	</tr>
</table>
</center>


<div align="center" style="padding-top: 10px; padding-bottom: 15px;"><input name="login_frm_btn" value="REGISTER" class="button" type="submit">  </div>
</form>
<?php

	if($referal) {
		print '<center>Ваш Upline: '.$referal.'</center>';
	}

} 
?>