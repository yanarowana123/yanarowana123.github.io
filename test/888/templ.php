<!DOCTYPE html>
<?php 
defined('ACCESS') or die();

$alldep = 0.00 + cfgSET('fakedeposits');
$allout = 0.00 + cfgSET('fakewithdraws');

	if(cfgSET('cfgWriteEntersIp') == 'on') {
	function getipu() {
	if(getenv("HTTP_CLIENT_IP")) {
		$ip = getenv("HTTP_CLIENT_IP");
	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	} else {
		$ip = getenv("REMOTE_ADDR");
	}
$ip = htmlspecialchars(substr($ip,0,15), ENT_QUOTES);
return $ip;
}
if(!mysql_num_rows(mysql_query("SELECT * FROM ipwriter WHERE ip = '".getipu()."'"))) {
$sql = "INSERT INTO ipwriter (date, ip, last_page) VALUES ('".time()."', '".getipu()."', '".$_SERVER['HTTP_REFERER']."')";
mysql_query($sql);
} else {
mysql_query("UPDATE ipwriter SET date = ".time()." WHERE ip = '".getipu()."' AND (date + 600) < '".time()."' LIMIT 1");
}
	}

$resultd	= mysql_query("SELECT * FROM deposits WHERE ORDER BY id ASC");
while($rowd = mysql_fetch_array($resultd)) {
	$alldep = $alldep + $rowd['sum'];
	}

$resulto	= mysql_query("SELECT * FROM `output` WHERE status = '2' ORDER BY id ASC");
while($rowo = mysql_fetch_array($resulto)) {
	$allout = $allout + $rowo['sum'];
	}
	
	$resultoi	= mysql_query("SELECT * FROM `users` ORDER BY id ASC");
	$investors = mysql_num_rows($resultoi) + cfgSET('fakeusers');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Главная страница</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/2style.css">
    <link rel="stylesheet" href="/css/5style.css">




</head>
<body>
<div class="main_wrap clearfix">





<div class="headerTopContainer">
		<div class="headerTopInner fadeInDown wow" style="visibility: visible; animation-name: fadeInDown;">
			<a href="/index.php" id="logo"></a>
			
			  
			<div class="email">
			
				<a href="cdn-cgi/l/email-protection#ccbfb9bcbca3beb88caeadbfa8e1a1a5a2a5a2abe2bcbea3"><span class="__cf_email__" data-cfemail="c0b3b5b0b0afb2b480a2a9b4a2a1a4b3eeb0b2af">support@demo.com</span></a>
			</div>



     

						<div class="hd-form">
				 <form method="POST" action="/login/">
					<input type="hidden" name="a" value="do_login">
					<input type="hidden" name="follow" value="">
					<div>
						<input  name="user" type="text" placeholder="ЛОГИН">
					</div>
					<div>
						<input  name="pass" id="pass" type="password" placeholder="ПАРОЛЬ">
					</div>
					<div>
						<input type="submit" name="login" value="Вход">
					</div>
					<div>
						







					</div>	
				</form>















			</div>
			











			

			
						
			<div class="clearfix"></div>

		</div>
	</div>

<section>
<div class="headerBotContainer">
		<div class="headerBotInner zoomIn wow" style="visibility: visible; animation-name: zoomIn;">
			<div class="mainNavRight">
				<div class="navbar">
					<div class="navbar-inner">

						<center><ul class="nav">

						<li><a href="/index.php">Главная</a></li>
						<li><a href="/about">О Нас</a></li>
						<li><a href="/news">Новости</a></li>
						<li><a href="/agrees">Правила</a></li>
						<li><a href="/faq">FAQ</a></li>
						<li><a href="/contacts">Контакты</a></li>
						


<?php if(!$login) {?>	
<li>

	<div class="affiliate-btn">
                     <a href="/registration">Присоединиться</a>
                </div>

</li>

<?php } else {?>
<li>
<div class="affiliate-btn">
<a href="/deposit/"></i>Кабинет</a>
</div>

</li>
<?php }?>

<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('ru|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="/flag_uk.png" height="32" width="32" alt="English" /></a></a><a href="#" onclick="doGTranslate('ru|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="/russia.png" height="32" width="32" alt="Russian" /></a>
















						</ul></center>
						  
						  
													
												</div>
				</div>
			</div>
		</div>
	</div>


</section>

</section>


<?php
	defined('ACCESS') or die();
	if(!$page) {
		echo "";
		include "includes/index.php";
		echo "";
	} elseif(file_exists("../".$page."/index.php")) {

		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>



	
	
	
<div class="f_clear"></div> 
</div><!-- main_wrap -->
<div class="footer_wrap clearfix">
	




<footer><div class="wrapper"><div class="footerMenu"><ul><li><a href="/index.php">Главная</a></li><li><a href="/about">О Нас</a></li><li><a href="/news">НОВОСТИ</a></li><li><a href="/faq">FAQ</a></li>




<li><a href="/agrees">ПРАВИЛА</a></li>


<li><a href="/contacts">Контакты</a></li></ul></div><div class="disc"><div class="logoMini"></div><span><b>Bitbads 


 не несет ответственность за любые потери, повреждения и убытки, которые могут последовать в результате использования данного сайта.</span><div class="ad">17, Sherwood St,<br>London</div></div><div class="ps">
 
 
 

 
 
 
 </div></div></footer>






</div><!-- footer_wrap -->

	<script src="../https@ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
	<script src="/js/jquery.cycle.all.js"></script>
	<script src="/js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="/js/calculator.js"></script>
	<script src="/js/jquery.li-scroller.1.0.js"></script>
	<script src="/js/scripts.js"></script>  
	<script src="/js/bitcoinprice.js"></script> 
	
	 <script> $(document).ready(function(){bitcoinprices.init({url:"//api.bitcoinaverage.com/ticker/all",marketRateVariable:"last",currencies:["USD","BTC"],symbols:{BTC:"BTC"},defaultCurrency:"USD",ux:{clickPrices:false,menu:true,clickableCurrencySymbol:false},jQuery:jQuery,priceAttribute:"data-btc-price",priceOrignalCurrency:"BTC"})}); </script>  
<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>
