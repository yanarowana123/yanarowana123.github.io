<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users"));
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0"));

$money	= 0.00;
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= 0.00;
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');

$money	= cfgSET('fakewithdraws');
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= cfgSET('fakedeposits');
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>
<?php
	$nu	= mysql_fetch_array(mysql_query("SELECT login FROM users ORDER BY id DESC LIMIT 1"));
?>
<?php
	$nd	= mysql_fetch_array(mysql_query("SELECT * FROM deposits ORDER BY id DESC LIMIT 1"));
?>
<?php
	$no	= mysql_fetch_array(mysql_query("SELECT * FROM output ORDER BY id DESC LIMIT 1"));
?>
<section class="live_stat">
			<div class="container">
				<ul class="clearfix">
					<li class="stat_1">
						<div class="icon"><span></span></div>
						<div class="title">Работает с:</div>
						<div class="subtitle"><?php print date("d.m.Y", cfgSET('datestart')); ?></div>
					</li>
					<li class="stat_2">
						<div class="icon"><span></span></div>
						<div class="title">Пользователей:</div>
						<div class="subtitle"><?php print $cusers; ?></div>
					</li>
					<li class="stat_3">
						<div class="icon"><span></span></div>
						<div class="title">Сумма инвестиций: </div>
						<div class="subtitle">USD   <?php print $depmoney; ?></div>
					</li>
					<li class="stat_4">
						<div class="icon"><span></span></div>
						<div class="title">Выплачено: </div>
						<div class="subtitle">USD  <?php print $money; ?></div>
					</li>
				</ul>
							</div>
		</section>
		
<div class="content clearfix">
		<div class="jumbotron clearfix" id="port">
		<div class="parallax-layer parallax-layer-1"></div>
		<div class="parallax-layer parallax-layer-2"></div>
		<div class="parallax-layer parallax-layer-3"></div>
			<div class="wrapper">
				<div class="banner">
					<div class="slogan">
						Концептуальные инвестиции
					</div>
										<a href="about">О Нас</a>
									</div>
			</div>
		</div><!-- jumbotron -->
		<div class="slider-area" id="plans">
			<section class="slider clearfix wrapper">
				<div class="plans_slider">
					<ul class="plans slide">
						
						<li>
							<span class="plan-percent">1%</span>
							<p class="plan-description">
								Срок: <i>15 дней</i>
								<br>		
								Мин. сумм: <i>5 $</i><br>
								Макс. сумма: <i>99 $</i>
								<br>		
								Депозит: <i>В конце срока</i>
								<br>		
								Статус <i>Активен</i><br>
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">Инвестировать</a>
													</li>
						<li>
							<span class="plan-percent">2%</span>
							<p class="plan-description">
								Срок: <i>30 дней</i>
								<br>		
								Мин. сумм: <i>50 $</i><br>
								Макс. сумма: <i>300 $</i>
								<br>		
								Депозит: <i>В конце срока</i>
								<br>		
								Статус <i>Активен</i><br>
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">Инвестировать</a>
													</li>
						<li>
							<span class="plan-percent">3%</span>
							<p class="plan-description">
								Срок: <i>55 дней</i>
								<br>		
								Мин. сумм: <i>100 $</i><br>
								Макс. сумма: <i>1000 $</i>
								<br>		
								Депозит: <i>В конце срока</i>
								<br>		
								Статус <i>Активен</i><br>		
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">Инвестировать</a>
													</li>












<li>
							<span class="plan-percent">10%</span>
							<p class="plan-description">
								Срок: <i>180 дней</i>
								<br>		
								Мин. сумм: <i>500 $</i><br>
								Макс. сумма: <i>5000 $</i>
								<br>		
								Депозит: <i>В конце срока</i>
								<br>		
								Статус <i>Активен</i><br>		
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">Инвестировать</a>
													</li>



















					</ul>
					
				</div>
				<!-- plans_slider -->	 
				
				
							
							
							<!--.calc-->	 
				
			
			<!-- slider -->		
		</div>
		






<div class="whyme">
<div class="wfix">
<div class="parallax-layer parallax-layer-3"></div>
<div class="left">
<div class="title">Почему мы?</div>
<div class="text">Прежде чем предлагать инвестиционные услуги клиентам, мы тщательно разработали и подготовили автоматизированную платформу, а также получили необходимый опыт. Если вы выбираете Bitbads.pro компанию в качестве надежного финансового партнера, вы можете быть уверены в высокой степени профессионализма наших трейдеров и финансовых экспертов.
<br><br> Мы наблюдаем за колебаниями и быстрым ростом цен ценных бумаг и принимаем решение на покупку ацкий, тем самым участвуем в торговле на рынке и, в конечном счете мы предлагаем лучшие инвестиционные условия для наших клиентов. </div>	
<div class="register">

     
<a href="/registration">Регистрация</a>
</div>
</div>
	
	
<div class="right">
<div class="engine">
<div class="ee e1"></div>
<div class="ee e2"></div>
<div class="ee e3"></div>
<div class="ee e4"></div>
<div class="ee e5"></div>
<div class="ee e6"></div>

<div class="t1 tt"><span>Безопасность</span>Сайт использует наилучшую защиту в том числе защиту от вредоносного программного обеспечения.</div>
<div class="t2 tt"><span>Начисления </span>Начисления прибыли производятся раз в 24 часа.вывод в ручном режиме в течение 24 ч.</div>
<div class="t3 tt"><span>Глобальные инвестиции </span>Проект доступен для пользователей всего мира, кто заинтересован в криптовалюте.</div>
<div class="t4 tt"><span>Стабильная прибыль</span>Компания работает на относительно коротких позициях тем самым обеспечивая прибыль.</div>
<div class="t5 tt"><span>ВОЗМОЖНОСТЬ ПРИРОСТА</span>Проект планирует развиваться в онлайн сферу, обеспечивая стабильный прирост.</div>
<div class="t6 tt"><span>ПАРТНЕРСКАЯ ПРОГРАММА</span>Нами разработана прибыльная партнерская программа, расчитанная на долгое сотрудничество!</div>
</div>
</div>	
	
</div>
</div>

















		
		
		<!-- calculator-wrapper -->  <br> <br>  <br> <br>  <br>  <br>  <br> 
		
		 
		
		<div class="slider-area" id="plans">
			<section class="slider clearfix wrapper">
				<div class="plans_slider">
					<ul class="plans1 slide">
						<li>
							<span class="plan-percent"> <img src=/s1.png> </span>
							<p class="plan-description">
								Создание бизнес<br>
								коммункаций во всем<br> 
								мире, с целю найти<br>
								хороших партнеров, и<br>
								новые сферы сотрудничества<br>
							
								
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s2.png></span>
							<p class="plan-description">
								Comodo EV SSL - сертификат<br>
								обеспечит безопасную работу<br>
								платформы. А так же <br>
								новейшее программное<br>
								обеспечение для безопасности.<br> 
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s3.png></span>
							<p class="plan-description">
								Самые передовые<br>
								программное и <br>
								аппаратное обеспечение<br>
								позволяет стабильно <br>
								работать на бирже.<br>
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s4.png></span>
							<p class="plan-description">
								Проект нацелен на относительно<br>
								короткие позициим<br>
								трейдинга ценных бумаг,<br>
								что диверсифицирует риски<br>
								и увеличивает профит.<br>
								
							</p>
							
						</li>
					</ul>
					<ul class="plans1 slide">
					
						<li>
							<span class="plan-percent"><img src=/s5.png></span>
							<p class="plan-description">  
							Мы прошли проверку<br>
							трастовых онлайн сервисов.<br> 
							Проверка прошла успешно, <br>
							никаких нарушений не было<br> 
							зафиксировано<br>				     
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s6.png></span>
							<p class="plan-description">
								Мы разработали <br>
								интерактивную систему <br>
								безопасности. Проект создан<br>
								на фифровой основе<br>
								что влечет за собой постоянную<br>
								актуализацию системы.
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s7.png></span>
							<p class="plan-description">
								Простая платформа<br>
								без навязчивого рекламного   <br>
								контента. Все разработано  <br>
								исходя из потребностей <br>
								наших партнеров и инвесторов. <br>
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s8.png></span>
							<p class="plan-description">
								Проект прошел проверку <br>
								в GeoTrust с положительным<br>
								результатом. <br>
								Проверка на наличие <br>
								вирусного контента и ПО <br>
								не дала результатов.
							</p>
							
						</li>
					</ul>
				</div>
				<!-- plans_slider -->		
				
			</section>
			<!-- slider -->		
		</div> 
		
				<div class="whyme">
<div class="contentBotContainer">
		<div class="contentBotInner">
		<div class="parallax-layer parallax-layer-3"></div>
<div class="content-bot-part">
				<h3>Последние вклады</h3>	
<?php
$sql	= 'SELECT * FROM deposits WHERE status = 0 ORDER BY id DESC LIMIT 15';
$rs		= mysql_query($sql);
$i		= 0;
while($a = mysql_fetch_array($rs)) {
	print '<table class="table">
								<tr>
									<td align="center" valign="middle">'.$a['username'].'</td>
					<td align="center" valign="middle">'.sprintf ("%01.2f", str_replace(',', '.', $a['sum'])).'$ </td>
					<td align="center" valign="middle"></td>
							</tr>';
$i++;
}

if($i == 0) {
	print '<div style="text-align:left; display:inline-table; width: 100%;">Вклады не найдены.</div>';
}
?>							
											  
																	
								</tbody></table>
			</div>
			
	    <div class="content-bot-part content-bot-part2 ">
				<h3>Последние выплаты</h3>
									
											<?php
$sql	= 'SELECT * FROM output WHERE status = 2 ORDER BY id DESC LIMIT 15';
$rs		= mysql_query($sql);
$i		= 0;
while($a = mysql_fetch_array($rs)) {
	print '<table class="table" align="center"><tbody>
	<tr>
					<td align="center" valign="middle">'.$a['login'].'</td>
					<td align="center" valign="middle">'.sprintf ("%01.2f", str_replace(',', '.', $a['sum'])).'$.</td>
		  		<td align="center" valign="middle"></td>
				</tr>';
$i++;
}

if($i == 0) {
	print '<div style="text-align:right; display:inline-table; width: 100%;">Не найдено.</div>';
}
?>
												
									
				</tbody></table>
			</div>

		
			<div class="content-bot-part">
				<h3>Топ рефералов</h3>			
<?php
$sql	= 'SELECT * FROM users WHERE reftop >= 0 ORDER BY reftop DESC LIMIT 6';
$rs		= mysql_query($sql);

$i		= 0;
while($a = mysql_fetch_array($rs)) {
$sql2	= 'SELECT * FROM users WHERE ref = '.$a['id'].' ORDER BY id DESC LIMIT 800';
$rs2		= mysql_query($sql2);
$anum2 = mysql_num_rows($rs2);
	print '		<table class="table">
										<tbody>
										<tr>
    							<td align="center" valign="middle">'.$a['login'].'</td>
								<td align="right" valign="middle">$'.$a['reftop'].'</td>
								<td align="center" valign="middle"></td>
								</tr>
							';
$i++;
}

if($i == 0) {
	print '<tr><td><div class="m"><center>No found!</center></div></td></tr>';
}
?>								
										
							</tr>										
						</tbody></table>
			</div>

			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
		
	
	
	









	
	<section>
    <div id="affiliate">
        <div class="affiliate-inner">
            
            <div class="affiliate-content">
                <h1><span>Р</span><i>еферальная</i> программа</h1>
                <p>В Bitbads  действует 3-х уровневая реферальная программа, для привлечения дополнительных инвестиций.</p>
                <div class="affiliate-btn">

          
                     <a href="/registration">Присоединиться</a>

                </div>
            </div>

            <div class="affiliate-r">
                <div class="affiliate-one">
                    <h1>5%</h1>
                    <p>Уровень 1</p>
                </div>
                <div class="affiliate-two">
                    <h1>3%</h1>
                    <p>Уровень 2</p>
                </div>
                <div class="affiliate-three">
                    <h1>2%</h1>
                    <p>Уровень 3</p>
                </div>
            </div>

        </div>
    </div>
</section>