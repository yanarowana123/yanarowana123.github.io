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
						<div class="title">�������� �:</div>
						<div class="subtitle"><?php print date("d.m.Y", cfgSET('datestart')); ?></div>
					</li>
					<li class="stat_2">
						<div class="icon"><span></span></div>
						<div class="title">�������������:</div>
						<div class="subtitle"><?php print $cusers; ?></div>
					</li>
					<li class="stat_3">
						<div class="icon"><span></span></div>
						<div class="title">����� ����������: </div>
						<div class="subtitle">USD   <?php print $depmoney; ?></div>
					</li>
					<li class="stat_4">
						<div class="icon"><span></span></div>
						<div class="title">���������: </div>
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
						�������������� ����������
					</div>
										<a href="about">� ���</a>
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
								����: <i>15 ����</i>
								<br>		
								���. ����: <i>5 $</i><br>
								����. �����: <i>99 $</i>
								<br>		
								�������: <i>� ����� �����</i>
								<br>		
								������ <i>�������</i><br>
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">�������������</a>
													</li>
						<li>
							<span class="plan-percent">2%</span>
							<p class="plan-description">
								����: <i>30 ����</i>
								<br>		
								���. ����: <i>50 $</i><br>
								����. �����: <i>300 $</i>
								<br>		
								�������: <i>� ����� �����</i>
								<br>		
								������ <i>�������</i><br>
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">�������������</a>
													</li>
						<li>
							<span class="plan-percent">3%</span>
							<p class="plan-description">
								����: <i>55 ����</i>
								<br>		
								���. ����: <i>100 $</i><br>
								����. �����: <i>1000 $</i>
								<br>		
								�������: <i>� ����� �����</i>
								<br>		
								������ <i>�������</i><br>		
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">�������������</a>
													</li>












<li>
							<span class="plan-percent">10%</span>
							<p class="plan-description">
								����: <i>180 ����</i>
								<br>		
								���. ����: <i>500 $</i><br>
								����. �����: <i>5000 $</i>
								<br>		
								�������: <i>� ����� �����</i>
								<br>		
								������ <i>�������</i><br>		
								
							</p>
														                                                      														<a href="/registration" class="deposit-btn">�������������</a>
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
<div class="title">������ ��?</div>
<div class="text">������ ��� ���������� �������������� ������ ��������, �� ��������� ����������� � ����������� ������������������ ���������, � ����� �������� ����������� ����. ���� �� ��������� Bitbads.pro �������� � �������� ��������� ����������� ��������, �� ������ ���� ������� � ������� ������� ���������������� ����� ��������� � ���������� ���������.
<br><br> �� ��������� �� ����������� � ������� ������ ��� ������ ����� � ��������� ������� �� ������� �����, ��� ����� ��������� � �������� �� ����� �, � �������� ����� �� ���������� ������ �������������� ������� ��� ����� ��������. </div>	
<div class="register">

     
<a href="/registration">�����������</a>
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

<div class="t1 tt"><span>������������</span>���� ���������� ��������� ������ � ��� ����� ������ �� ������������ ������������ �����������.</div>
<div class="t2 tt"><span>���������� </span>���������� ������� ������������ ��� � 24 ����.����� � ������ ������ � ������� 24 �.</div>
<div class="t3 tt"><span>���������� ���������� </span>������ �������� ��� ������������� ����� ����, ��� ������������� � ������������.</div>
<div class="t4 tt"><span>���������� �������</span>�������� �������� �� ������������ �������� �������� ��� ����� ����������� �������.</div>
<div class="t5 tt"><span>����������� ��������</span>������ ��������� ����������� � ������ �����, ����������� ���������� �������.</div>
<div class="t6 tt"><span>����������� ���������</span>���� ����������� ���������� ����������� ���������, ����������� �� ������ ��������������!</div>
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
								�������� ������<br>
								����������� �� ����<br> 
								����, � ���� �����<br>
								������� ���������, �<br>
								����� ����� ��������������<br>
							
								
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s2.png></span>
							<p class="plan-description">
								Comodo EV SSL - ����������<br>
								��������� ���������� ������<br>
								���������. � ��� �� <br>
								�������� �����������<br>
								����������� ��� ������������.<br> 
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s3.png></span>
							<p class="plan-description">
								����� ���������<br>
								����������� � <br>
								���������� �����������<br>
								��������� ��������� <br>
								�������� �� �����.<br>
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s4.png></span>
							<p class="plan-description">
								������ ������� �� ������������<br>
								�������� ��������<br>
								��������� ������ �����,<br>
								��� ��������������� �����<br>
								� ����������� ������.<br>
								
							</p>
							
						</li>
					</ul>
					<ul class="plans1 slide">
					
						<li>
							<span class="plan-percent"><img src=/s5.png></span>
							<p class="plan-description">  
							�� ������ ��������<br>
							��������� ������ ��������.<br> 
							�������� ������ �������, <br>
							������� ��������� �� ����<br> 
							�������������<br>				     
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s6.png></span>
							<p class="plan-description">
								�� ����������� <br>
								������������� ������� <br>
								������������. ������ ������<br>
								�� �������� ������<br>
								��� ������ �� ����� ����������<br>
								������������ �������.
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s7.png></span>
							<p class="plan-description">
								������� ���������<br>
								��� ����������� ����������   <br>
								��������. ��� �����������  <br>
								������ �� ������������ <br>
								����� ��������� � ����������. <br>
							</p>
							
						</li>
						<li>
							<span class="plan-percent"><img src=/s8.png></span>
							<p class="plan-description">
								������ ������ �������� <br>
								� GeoTrust � �������������<br>
								�����������. <br>
								�������� �� ������� <br>
								��������� �������� � �� <br>
								�� ���� �����������.
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
				<h3>��������� ������</h3>	
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
	print '<div style="text-align:left; display:inline-table; width: 100%;">������ �� �������.</div>';
}
?>							
											  
																	
								</tbody></table>
			</div>
			
	    <div class="content-bot-part content-bot-part2 ">
				<h3>��������� �������</h3>
									
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
	print '<div style="text-align:right; display:inline-table; width: 100%;">�� �������.</div>';
}
?>
												
									
				</tbody></table>
			</div>

		
			<div class="content-bot-part">
				<h3>��� ���������</h3>			
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
                <h1><span>�</span><i>����������</i> ���������</h1>
                <p>� Bitbads  ��������� 3-� ��������� ����������� ���������, ��� ����������� �������������� ����������.</p>
                <div class="affiliate-btn">

          
                     <a href="/registration">��������������</a>

                </div>
            </div>

            <div class="affiliate-r">
                <div class="affiliate-one">
                    <h1>5%</h1>
                    <p>������� 1</p>
                </div>
                <div class="affiliate-two">
                    <h1>3%</h1>
                    <p>������� 2</p>
                </div>
                <div class="affiliate-three">
                    <h1>2%</h1>
                    <p>������� 3</p>
                </div>
            </div>

        </div>
    </div>
</section>