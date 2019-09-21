
<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">‘айт отключен и недоступен длЯ остальных пользователей!</p>';
}
?>
 <?php
if($er) {
	print '<div class="er" style="text-align: left; padding-left: 15px; margin-bottom: 25px;">
	<strong>Не удается войти.</strong><br />
	Пожалуйста, проверьте правильность написания <b>логина</b> и <b>пароля</b>.
	<ul>
		<li>Возможно, нажата клавиша CAPS-LOCK?</li>
		<li>Может быть, у вас включена неправильная <b>раскладка</b>? (русская или английская)</li>
		<li>Попробуйте набрать свой пароль в текстовом редакторе и <b>скопировать</b> в графу «Пароль»</li>
	</ul>
	Если вы всё внимательно проверили, но войти всё равно не удается, вы можете <b><a href="/reminder/">нажать сюда</a></b>.</div>';
} else {
	print '';
}
?>

  <!DOCTYPE html>
<HTML class="lhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
 <title><?php print $title; ?></title>
<meta name="keywords" content="<?php print $keywords; ?>" />
<meta name="description" content="<?php print $description; ?>" />
<!--<link href="/files/styles.css" type="text/css" rel="stylesheet" /> -->
<script language="javascript" src="/files/scripts.js"></script>

<meta name="viewport" content="initial-scale=0.9, width=700, maximum-scale=1">
<!--js -->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js">
</script>
<link media="screen" href="/css/style.css" type="text/css" rel="stylesheet">


</head>
<body contenteditable="false" class="login-bg" style="overflow: auto;">
<div id="lgs">
<div class="bgone">
</div>
<div class="bgtwo">
</div>
<div class="pg">
<div class="popbg gonaim">
<div class="head">
<a class="logo" href="/">

</a>
<div class="clr">
</div>
</div>
<div class="lgcontent">

<form method="post" action="/login/">
<fieldset>
<table class="formatTable">
<tbody>
<tr>
<td colspan="2" class="center">
<div class="pole">
<label for="login_frm_Login">
<span class="descr_req">
Логин
<span class="descr_star">
*
</span>
</span>
</label>
<br>
<input name="user" id="login_frm_Login" value="" size="60" class="string" type="text">
<br>
</div>
</td>
</tr>
<tr>
<td colspan="2" class="center">
<div class="pole">
<label for="login_frm_Pass">
<span class="descr_req">
Пароль
<span class="descr_star">
*
</span>
</span>
</label>
<br>
<input name="pass" id="login_frm_Pass" value="" size="20" class="password" type="password">
<br>
</div>
</td>
</tr>
<input name="URL" id="login_frm_URL" value="" type="hidden">
</tbody>
</table>
</fieldset>
<input name="__Cert" value="bf9d490a" type="hidden">
<div class="key-bb">
<input name="login_frm_btn" value="Авторизоваться" class="button-blue" type="submit">
</div>
</form>
<div class="link">
<a class="reg" href="/registration">
Регистрация
</a>
<a href="/">
Забыли пароль?
</a>
<br>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="/js/animate.js">
</script>
</body>
</html>