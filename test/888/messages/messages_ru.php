<?php
defined('ACCESS') or die();
if ($login) {
	if ($_GET['action'] == 'save') {
		$get_user_info = mysql_query("SELECT * FROM users WHERE id = ".$user_id." LIMIT 1");
		$row = mysql_fetch_array($get_user_info);
		 $upe		= $row['pe'];

		 $pass_old = $_POST['pass_old'];
		$pass_1 = $_POST['pass_1'];
		$pass_2 = $_POST['pass_2'];
		$email	= addslashes(htmlspecialchars($_POST['email'], ENT_QUOTES, ''));
		$icq	= addslashes(htmlspecialchars($_POST['icq'], ENT_QUOTES, ''));
		$pm		= addslashes(htmlspecialchars($_POST['pm'], ENT_QUOTES, ''));
		$pe		= addslashes(htmlspecialchars($_POST['pe'], ENT_QUOTES, ''));
		$bt		= addslashes(htmlspecialchars($_POST['bt'], ENT_QUOTES, ''));
		$qw		= addslashes(htmlspecialchars($_POST['qw'], ENT_QUOTES, ''));

		if($upm) { $pm = $upm; } 
		if($upe) { $pe = $upe; } 

		if (!$email) {
			echo '<p class="er">Следует ввести E-mail!</p>';
		} else {
			if ($pass_1 != $pass_2) {
				echo '<p class="er">Пароль и подтверждение не совпадают!</p>';
			} else {
				if (!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is", $email)) {
					print '	<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите правильно e-mail</p>
								</div>';
				} elseif (as_md5($key, $pass_old) != $row['pass'] && $pass_old) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Неверно указан старый пароль!</p>
								</div>';
				} elseif (strlen($pm) != 8 && $pm) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите корректный PM кошелёк!</p>
								</div>';
				} elseif (strlen($bt) < 10 && $bt) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите корректный Bitcoin кошелёк!</p>
								</div>';
				} elseif ($pm[0] != 'U' && $pm) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите корректный PM кошелёк!</p>
								</div>';
				} elseif ($pe[0] != 'P' && $pe) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите корректный PM кошелёк!</p>
								</div>';
				} elseif(mysql_num_rows(mysql_query("SELECT pm FROM users WHERE pm = '".$pm."' AND id != ".$user_id)) && $pm) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Такой PM уже есть в базе!</p>
								</div>';
				} elseif(mysql_num_rows(mysql_query("SELECT pe FROM users WHERE pe = '".$pe."' AND id != ".$user_id)) && $pe) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Такой Payeer уже есть в базе!</p>
								</div>';
				} elseif(mysql_num_rows(mysql_query("SELECT mail FROM users WHERE mail = '".$email."' AND id != ".$user_id))) {
					print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Такой e-mail уже есть в базе!</p>
								</div>';
				} else {
					$sql = 'UPDATE users SET ';
					if($pass_1) { $sql .= 'pass = "'.as_md5($key, $pass_1).'", '; }

					$sql .= 'mail = "'.$email.'", icq = "'.$icq.'", qw = "'.$qw.'" WHERE id = '.$user_id.' LIMIT 1';
					if (mysql_query($sql)) {
						print '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Данные были успешно обновлены!</p>
								</div>';
					} else {
						print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Не удаётся изменить данные</p>
								</div>';
					}
			}
		}
	}
}

$sql	= 'SELECT * FROM users WHERE login = "'.$login.'" LIMIT 1';
$rs		= mysql_query($sql);
$a		= mysql_fetch_array($rs);
?>
<div class="main-container">
<div class="container">
<div class="tabs-container">
	  				<ul class="nav nav-tabs">
						<li>
							<a href="/enter"><i class="fa fa-pie-chart"></i> Сделать вклад</a>
						</li>
					<li><a href="/deposits"><i class="fa fa-bar-chart"></i> Мои вклады</a></li>
							<li><a href="/withdrawal"><i class="fa fa-rub"></i> Вывод средств</a></li>
							<li><a href="/ref"><i class="fa fa-users"></i> Мои рефералы</a></li>
<li class="active"><a href="/messages"><i class="fa fa-envelope"></i> Сообщения</a></li>
						<li><a href="/profile"><i class="fa fa-key"></i> Настройки профиля</a></li>
						<li><a href="/exit.php"><i class="fa fa-unlock-alt"></i> Выход</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active bounceInRight" id="skill1">
		  			<h2 class="with-breaker animate-me fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
		  			<i class="fa fa-envelope"></i>Сообщения
	  			</h2>
				<div class="row">





<?php 
$page	= intval($_GET['page']);
	$query	= "SELECT * FROM `messages` WHERE `to` = '".$login."'";
	$result	= mysql_query($query);
	$themes = mysql_num_rows($result);
	$num = 5;
	$total	= intval(($themes - 1) / $num) + 1;

	if(empty($page) or $page < 0) $page = 1;
	if($page > $total) $page = $total;
	$start = $page * $num - $num;
	$result = mysql_query($query." ORDER BY id DESC LIMIT ".$start.", ".$num);

	if(!$themes) {
		print "<p style=\"width:98%; text-align:center; float:right;\" class=\"er\">Вам еще не приходили сообщения.</p>";
	} else {

		print '<div style="width:100%; margin-left: 25px;">';

		$i = 1;
		while ($row = mysql_fetch_array($result)) {
		
		if($row['view_user'] == 0) {
		$enty = '<span style="font-size:10px;color: #FF4B4B;">НОВОЕ</span> ';
		mysql_query("UPDATE `messages` SET `view_user` = '1' WHERE `id` = '".$row['id']."'");
		} else {
		$enty = '';
		}
		
		print'<div style="width:100%; margin: 5px 0; margin-left: 25px;background: #EFEFEF;padding: 15px;border: solid 3px #D8D8D8;">
<span style="font-weight: 600;">'.$enty.'Сообщение от: <u>'.$row['from'].'</u></span><br>
<span>'.$row['message'].'</span>
</div>';

			$i++;
		}

		print "</div>";

	}

	if ($page) {
		if($page != 1) { $pervpage = "<a style=\"color: white;\" href=\"?page=". ($page - 1) ."\">««</a>"; }
		if($page != $total) { $nextpage = " <a style=\"color: white;\" href=\"?page=". ($page + 1) ."\">»»</a>"; }
		if($page - 2 > 0) { $page2left = " <a style=\"color: white;\" href=\"?page=". ($page - 2) ."\">". ($page - 2) ."</a> "; }
		if($page - 1 > 0) { $page1left = " <a style=\"color: white;\" href=\"?page=". ($page - 1) ."\">". ($page - 1) ."</a> "; }
		if($page + 2 <= $total) { $page2right = " <a style=\"color: white;\" href=\"?page=". ($page + 2) ."\">". ($page + 2) ."</a> "; }
		if($page + 1 <= $total) { $page1right = " <a style=\"color: white;\" href=\"?page=". ($page + 1) ."\">". ($page + 1) ."</a> "; }
	}
	if($themes > 5) {
	print "<div style=\"float: right; width:85%;\" class=\"pages\"><b></b>".$pervpage.$page2left.$page1left." <b>".$page."</b> ".$page1right.$page2right.$nextpage."</div></div>";
}

?>

          
</div>	</div>


	  			</div>
	  			</div>
	  			</div>
	  			</div>
<?php
} else {
	print "<p class=\"er\">Вы должны авторизироваться для доступа к этой странице!</p>";
}
?>