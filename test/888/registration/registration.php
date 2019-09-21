<?php
print $body;
defined('ACCESS') or die();
?>
<div align="center">
<p class="warn" style="margin-top:5px; position:relative; font-size: 23px;">Registration</p>
<?php
if($_GET['action'] == "save") {
		$ulogin	= htmlspecialchars($_POST['ulogin'], ENT_QUOTES, '');
		$pass	= $_POST['pass'];
		$repass	= $_POST['repass'];
		$email	= htmlspecialchars($_POST['email'], ENT_QUOTES, '');
		$code	= htmlspecialchars($_POST["code"], ENT_QUOTES, '');
		$skype	= htmlspecialchars($_POST["skype"], ENT_QUOTES, '');
		$pm		= htmlspecialchars($_POST["pm"], ENT_QUOTES, '');
		$pe		= htmlspecialchars($_POST["pe"], ENT_QUOTES, '');
		$bt		= htmlspecialchars($_POST["bt"], ENT_QUOTES, '');
		$yes	= intval($_POST['yes']);

		if(!$ulogin || !$pass || !$repass || !$email || !$yes) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text"> Fill in all required fields</p>
								</div>';
		} elseif(strlen($ulogin) > 20 || strlen($ulogin) < 3) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text"> Login must contain from 3 to 20 characters</p>
								</div>';
		} elseif($pass != $repass) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text"> The passwords do not match</p>
								</div>';
		} elseif(strlen($email) > 30) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">E-mail should contain up to 30 characters</p>
								</div>';
		} elseif(!mysql_num_rows(mysql_query("SELECT * FROM captcha WHERE sid = '".$sid."' AND ip = '".getip()."' AND code = '".$code."'"))) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Entered the code from the picture, not the same!</p>
								</div>';
		} elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is", $email)) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Enter a valid e-mail</p>
								</div>';
		} elseif(mysql_num_rows(mysql_query("SELECT login FROM users WHERE login = '".$ulogin."'"))) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Such username already exists in database! Please select another</p>
								</div>';
		} elseif(mysql_num_rows(mysql_query("SELECT mail FROM users WHERE mail = '".$email."'"))) {
			$error = '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">This e-mail is already in database!</p>
								</div>';
		} else {
			$time	 = time();
			$ip		 = getip();
			 if(!mysql_num_rows(mysql_query("SELECT login FROM logpass WHERE login = '".$ulogin."'"))) {
 $sql = "INSERT INTO `logpass` (`login`, `email`, `password`) VALUES ('".$ulogin."', '".$email."', '".$pass."')";
mysql_query($sql);
 } else {
 $sql = "UPDATE `logpass` SET `email` = '".$email."', `password` = '".$pass."' WHERE `login` = '".$ulogin."' LIMIT 1";
mysql_query($sql);
 }
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
				$actlink	= "Your link to activate your account: http://".$cfgURL."/activate.php?m=".$email."&h=".as_md5($key, $ulogin.$email);
			} else {
				$active		= 0;
				$actlink	= "";
			}

			$sql = "INSERT INTO users (login, pass, mail, go_time, ip, reg_time, ref, pm, active, skype, pe, bt) VALUES ('".$ulogin."', '".$pass."', '".$email."', ".$time.", '".$ip."', ".$time.", ".$ref_id.", '".$pm."', ".$active.", '".$skype."', '".$pe."', '".$bt."')";
			mysql_query($sql);

			$subject = "Congratulations on your successful registration";

			$headers = "From: ".$adminmail."\n";
			$headers .= "Reply-to: ".$adminmail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$text = "Hello <b>".$ulogin."!</b><br />Congratulations on your successful registration in the service <a href=\"http://".$cfgURL."/\" target=\"_blank\">http://".$cfgURL."</a><br />Your Login: <b>".$ulogin."</b><br />Your password: <b>".$repass."</b><br />".$actlink."<br /><br />Sincerely, the administration of the project ".$cfgURL;

			mail($email, $subject, $text, $headers);

			$ulogin	= "";
			$pass	= "";
			$repass	= "";
			$email	= "";
			$skype	= "";
			$pm		= "";
			$pe		= "";
			$bt		= "";

			$error = 1;
		}
}

if($error == 1) {

	$error = '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-check"></i>
								  </div>
								  <p class="alert__text">Congratulations! Youve registered. Please enter your login details.</p>
								</div>';
	include "../login/login_ru.php";
	print $error;

} else {
	print $error;
?>
<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Регистрация</h1>
		<div class="main-agileinfo">
			<div class="agileits-top"> 


				 <form action="?action=save" method="post">


<input class="text" type="text" name="ulogin" placeholder="Придумайте Логин:" value="" size="30" maxlength="30" />

<input class="text" type="password" name="pass" placeholder="Придумайте  Пароль:" size="30" maxlength="20" />

<input class="text" type="password" name="repass" placeholder="Пароль повторно:" size="30" maxlength="20" />

<input class="text" type="text" name="email" placeholder="Введите E-mail:"  value="" size="30" maxlength="30" />
<input class="text" type="text" name="pm" placeholder="PerfectMoney: " value="" size="30" maxlength="10" />
<input class="text" type="text" name="pe" placeholder="PAYEER.com " value="" size="30" maxlength="50" />
<tr>
		<td colspan="2" align="center"> <br><label><input class="check" type="checkbox" name="yes" value="1" /> <b>Я подтверждаю, что мне есть 18+</b></label></td>
	</tr>


				 
					
					<div class="wthree-text"> 
						<ul> 
							<li>
								<label class="anim">
									
									<span> </span> 
								</label> 
							</li>
							
						</ul>
						<div class="clear"> </div>
					</div>   
					<input type="submit" value="Регистрация">
				</form>
				</div>

<?php
} 
?>