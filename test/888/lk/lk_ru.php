			<?php
defined('ACCESS') or die();



if($login) {
			$sql8	= 'SELECT * FROM users WHERE login = "'.$login.'" LIMIT 1';
$rs8		= mysql_query($sql8);
$a8		= mysql_fetch_array($rs8);
$refersi = 0;

$get_user_inforef = mysql_query("SELECT id, login, reg_time FROM users WHERE ref = ".$user_id." ORDER BY reg_time DESC");
	while ($rowref = mysql_fetch_array($get_user_inforef)) {
	$refersi = $refersi + 1;
	}

$get_user_inforefp = mysql_query("SELECT id, login, reg_time FROM users WHERE ref = ".$user_id." ORDER BY reg_time DESC LIMIT 1");
$rowref = mysql_fetch_array($get_user_inforefp);

$plan1 = 0;
$plan2 = 0;
$plan3 = 0;
$depsallplan = 0;

$alldep = 0.00;
$allout = 0.00;
$alloutb = 0.0000;
$resultd	= mysql_query("SELECT * FROM deposits WHERE user_id = ".$user_id." ORDER BY id ASC");
while($rowd = mysql_fetch_array($resultd)) {
	$alldep = $alldep + $rowd['sum'];
	$depsallplan = $depsallplan + 1;
	if($rowd['plan'] == 4) {
	$plan1 = $plan1 + 1;
	} elseif($rowd['plan'] == 5) {
	$plan2 = $plan2 + 1;
	}if($rowd['plan'] == 6) {
	$plan3 = $plan3 + 1;
	} else {
	}
	}
	$resultde	= mysql_query("SELECT * FROM `enter` WHERE `login` = '".$login."' AND status = '2' ORDER BY `id` DESC");
	$rowdeposp = mysql_fetch_array($resultde);
	
	$resulto	= mysql_query("SELECT * FROM `output` WHERE `login` = '".$login."' AND status = '2' AND paysys <> '3' ORDER BY id ASC");
while($rowo = mysql_fetch_array($resulto)) {
	$allout = $allout + $rowo['sum'];
	}
	$resultob	= mysql_query("SELECT * FROM `output` WHERE `login` = '".$login."' AND `status` = '2' AND `paysys` = '3' ORDER BY id ASC");
while($rowob = mysql_fetch_array($resultob)) {
	$alloutb = $alloutb + $rowob['sum'];
	}
	$resultol	= mysql_query("SELECT `date`,`sum`,`paysys` FROM `output` WHERE `login` = '".$login."' AND status = '2' ORDER BY id DESC LIMIT 1");
	if(mysql_num_rows($resultol)) {
$rowol = mysql_fetch_array($resultol);
$outl = date("d-m-Y H:i:s", $rowol['date']).',на сумму: '.sprintf ("%01.2f", str_replace(',', '.', $rowol['sum'])).' руб.';
} else {
$outl = 'Нет Выплат!';
}
$resulten	= mysql_query("SELECT `sum`,`paysys` FROM `enter` WHERE `login` = '".$login."' AND status = '2' ORDER BY id DESC LIMIT 1");
	if(mysql_num_rows($resulten)) {
$rowen = mysql_fetch_array($resulten);
$ent = sprintf ("%01.2f", str_replace(',', '.', $rowen['sum'])).' руб. - '.$rowen['paysys'];
} else {
$ent = 'Нет Пополнений!';
}
?>			
			<div class="main-container">
	  		<div class="container">
	  			<!-- SKILLS -->
	
	  			
	  			<div class="tabs-container">
	  				<ul class="nav nav-tabs">
						<li>
							<a href="/enter"><i class="fa fa-pie-chart"></i> Сделать вклад</a>
						</li>
						<li><a href="/deposits"><i class="fa fa-bar-chart"></i> Мои вклады</a></li>
							<li><a href="/withdrawal"><i class="fa fa-rub"></i> Вывод средств</a></li>
						<li><a href="/ref"><i class="fa fa-users"></i> Мои рефералы</a></li>
						<li><a href="/messages"><i class="fa fa-envelope"></i> Сообщения</a></li>
						<li><a href="/profile"><i class="fa fa-key"></i> Настройки профиля</a></li>
						<li><a href="/exit.php"><i class="fa fa-unlock-alt"></i> Выход</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active bounceInRight" id="skill1">
										  				  			<h2 class="with-breaker animate-me fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
		  			<i class="fa fa-stats"></i>Статистика <?php print $login;?>
	  			</h2>
				  			
							<div class="row">
									
										<div class="media-body" style="text-align: center;">
											<h4 class="media-heading message__heading" style="margin:0;">Состояние на <?php print date("d.m.y");?></h4>

											<input type="checkbox" style="display:none;" class="btn-more-check" id="more2" checked="">

											<div class="message__details">
												<table class="newtable" style="width: 95%; margin-left: 20px;">
													<tbody><tr>
														<td>Email:</td>
														<td><?php print $a8['mail'];?></td>
													</tr>
													<tr>
														<td>Дата регистрации:</td>
														<td><?php print date("d-m-Y H:i:s", $a8['reg_time']);?></td>
													</tr>
													<tr>
														<td>Последний вход:</td>
														<td><?php print date("d-m-Y H:i:s", $a8['go_time']);?>,IP: <?php print $a8['ip'];?></td>
													</tr>
													<tr>
														<td>Баланс:</td>
														<td><span class="badge badge--line badge--violet"><?php print sprintf ("%01.2f", str_replace(',', '.', $a8['pm_balance']));?></b> RUB</span></td>
													</tr>
													<tr>
														<td>Последнее пополнение:</td>
														<td><span><b><?php print $ent;?></b></span></td>
													</tr>
													<tr>
														<td>Последняя выплата:</td>
														<td><span><b><small><?php print $outl;?></small>
											</b></span></td>
													</tr>
													<tr>
														<td>Всего выплачено:</td>
														<td><span><b><?php print sprintf ("%01.2f", str_replace(',', '.', $allout));?> RUB</b></span></td>
													</tr>
													<tr>
														<td>Активных депозитов:</td>
														<td><span><b><?php print sprintf ("%01.2f", str_replace(',', '.', $alldep));?> RUB</b></span></td>
													</tr>
													
												</tbody></table>
											</div>
									</div>
			</header> <!-- /main-header -->

				</div> <!-- row -->
				</div></div></div></div></div>
		  			</div>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="/js/jquery.liTextLength.js"></script>
			
			<?php } else {
	print "<p class=\"er\">Для доступа к данной странице вам необходимо авторизироваться</p>";
	include "../login/login_ru.php";
}
?>