<?php
defined('ACCESS') or die();

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

if(!$login && ($idpg <> 3 && $idpg <> 4)) {
	print'<meta http-equiv="refresh" content="0;/login/?mes=nopage">';
	exit();
}

if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">Сайт отключен и недоступен для остальных пользователей!</p>';
}
$sql8	= 'SELECT * FROM users WHERE login = "'.$login.'" LIMIT 1';
$rs8		= mysql_query($sql8);
$a8		= mysql_fetch_array($rs8);

$resultd	= mysql_query("SELECT * FROM deposits WHERE user_id = ".$user_id." ORDER BY id ASC");
while($rowd = mysql_fetch_array($resultd)) {
	$alldep = $alldep + $rowd['sum'];
	}

$resulto	= mysql_query("SELECT * FROM `output` WHERE `login` = '".$login."' AND status = '2' ORDER BY id ASC");
while($rowo = mysql_fetch_array($resulto)) {
	$allout = $allout + $rowo['sum'];
	}
?>
<!DOCTYPE html>
<!-- saved from url=(0028)/deposit/ -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    
    <title>Кабинет</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="description" content="Депозиты">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script type="text/javascript" async="" charset="UTF-8">__jivoConfigOnLoad({"widget_id":"03btpxiBIl","site_id":447261,"widget_color":"#383345","widget_font_color":"light","widget_padding":"100","widget_height":"33","widget_orientation":"bottom","font_size":"14","font_family":"Arial","font_type":"normal","locale":"ru_RU","show_rate_form":1,"hide_ad":0,"secure":0,"contacts_ask":0,"style_string":"jivo_shadow jivo_rounded_corners jivo_gradient jivo_3d_effect jivo_border jivo_3px_border","chat_mode":0?"online":"offline","options":0,"hide_offline":0,"build_number":"1487324131","vox_login":"jivosite@chat.jivosite.voximplant.com","avatar_url":"\/\/s3-eu-west-1.amazonaws.com\/jivo-userdata","online_widget_label":"\u041d\u0430\u043f\u0438\u0448\u0438\u0442\u0435 \u043d\u0430\u043c, \u043c\u044b \u043e\u043d\u043b\u0430\u0439\u043d!","offline_widget_label":"\u041e\u0442\u043f\u0440\u0430\u0432\u044c\u0442\u0435 \u043d\u0430\u043c \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435","offline_form_text":"\u041e\u0441\u0442\u0430\u0432\u044c\u0442\u0435 \u0441\u0432\u043e\u0435 \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435 \u0432 \u044d\u0442\u043e\u0439 \u0444\u043e\u0440\u043c\u0435, \u043c\u044b \u043f\u043e\u043b\u0443\u0447\u0438\u043c \u0435\u0433\u043e \u043d\u0430 e-mail \u0438 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e \u043e\u0442\u0432\u0435\u0442\u0438\u043c!","base_url":"\/\/code2.jivosite.com","static_host":"cdn.jivosite.com\/v2","comet":{"host":"node26.jivosite.com"},"contacts_settings":{"name":{"show":true,"required":false},"phone":{"show":true,"required":false},"email":{"show":true,"required":true}},"power_button_phone":0});</script><script type="text/javascript" async="" src="/cab/03btpxiBIl"></script><script type="text/javascript" src="/cab/modernizr.js"></script>
		<link rel="shortcut icon" href="/deposit/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="/cab/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/cab/monthly.css">
    <link rel="stylesheet" type="text/css" href="/cab/emojionearea.min.css">

    <link rel="stylesheet" type="text/css" href="/cab/main.css">
    <link rel="stylesheet" type="text/css" href="/cab/style-default.css">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body>
    
    <div class="wrapper has-footer">
         
        <header class="header-top navbar fixed-top">
             

            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="/">
                    <img src="/cab/logos.png">
                    <span></span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="/deposit/refs.php">
                            <i class="sli-users"></i>
							 
                        </a>
                    </li>
                    <li>
                        <a href="/deposit/tickets.php">
                            <i class="sli-envelope"></i>
							 
                        </a>
                    </li>  
                    
                </ul>   <!-- END: Responsive Top Right tool bar -->
                
            </div>
            
            <div class="collapse navbar-collapse" id="headerNavbarCollapse">
                
                <ul class="nav navbar-nav">
                    
                    <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="/deposit/tickets.php">
                            <i class="sli-envelope"></i> 
							 
                        </a> 
                    </li>
                    
                    <li>
                        <a href="/deposit/refs.php">
                            <i class="sli-users"></i>
							 
                        </a> 
                    </li>
					<li class="dropdown">
                        
                        <ul class="dropdown-menu dropdown-lg list-group-dropdown"> 
                            <li>
                                <a>
									                                    <div class="user-list-wrap">
                                        
                                        <div class="detail">
                                            
                                        </div>
                                    </div>
                                </a>
                            </li> 
                            <li>
                                <a style="cursor:pointer;" onclick="document.forms[0].submit();return false;">
									
									<form method="post" action="/deposit/cabinet.php" name="chnglang" style="display:none;">	 
										<input type="hidden" name="slang" value="en"> 
										
									</form>                                    <div class="user-list-wrap">
                                        
                                        <div class="detail">
                                            
                                        </div>
                                    </div>
                                </a>
                            </li> 
                        </ul>
                    </li> 

                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                     
                    
                    <li class="user-profile dropdown">
                        <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                            <img src="/cab/img-user-01.jpg" alt="">
                            <div class="user-name"> <small class="fa fa-angle-down"></small></div>
                        </a>
                        <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                            <li><a href="/profile"><i class="sli-home"></i> Кабинет</a></li>
                            <li><a href="/deposit"><i class="sli-plus"></i> Инвестировать</a></li>
							<li><a href="/deposits"><i class="sli-plus"></i> Мои депозиты</a></li>
                            <li><a href="/profile"><i class="fa fa-wrench"></i> Настройки</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/faq/"><i class="sli-question"></i> FAQ</a></li>
                            <li><a href="/exit.php"><i class="sli-logout"></i> Выход</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- END: Navbar-collapse -->
            
        </header>   <!-- END: Header -->        
                <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                   
 
<script type="text/javascript"> 
	obj_clock=document.getElementById("clock");
	time_h=04;
	time_m=01;
	time_s=43;
	function dig2(d) 
	{
		return ((d<10)?"0":"")+d;
	}
	function wr_clock() 
	{
		obj_clock.innerHTML=dig2(time_h)+':'+dig2(time_m)+':'+dig2(time_s); 
		time_s++;
		if (time_s>=60) 
		{
			time_s=0; 
			time_m++;
			if (time_m>=60) 
			{ 
				time_m=0; 
				time_h++;
				if (time_h>=24)
				{
					time_h=0;
				}
			}
		}
	}
	wr_clock();
	setInterval("wr_clock();",1000);
</script>                   
                     <li><a href="/deposit"><span class="fa">&nbsp;</span><span class="sidebar-title">Сделать вклад</span></a></li>
					 <li><a href="/deposits"><span class="fa">&nbsp;</span><span class="sidebar-title">Мои депозиты</span></a></li>
            <li><a href="/enter"><span class="fa">&nbsp;</span><span class="sidebar-title">Пополнить</span></a></li>
			
		
          <li><a href="/profile"><i class="fa fa-wrench"></i> Настройки</a></li>
			<li><a href="/withdrawal"><span class="fa">&nbsp;</span><span class="sidebar-title">Вывод средств</span></a></li>
			<li><a href="/ref"><span class="fa">&nbsp;</span><span class="sidebar-title">Реф.система</span></a></li>
			<li><a href="/exit.php"><span class="fa">&nbsp;</span><span class="sidebar-title">Выход</span></a></li>
                     
                    
                    
                     
                    
										   
                     
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1><i class="sli-home"></i> Кабинет</h1> 
            </div>
            <div class="content-wrap"> 
				
                
				
				
				
			<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {

		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>
                                
                                <div class="col-md-4">
                                    <div class="row">
                                     <div class="col-md-12"><b>Ваш Личный Кабинет</b></div>
			     									
                                        
                                        <div class="col-sm-6 col-md-12 pt-md">
                                           Общий баланс: <strong class="pull-right"><?php print sprintf ("%01.2f", str_replace(',', '.', $a8['pm_balance']));?> USD</strong>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success" style="width: 0.00%;"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-12 pt-md">
                                            Всего Выплачено:  <strong class="pull-right"><?php print sprintf ("%01.2f", str_replace(',', '.', $allout));?> USD</strong>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-danger" style="width: 0.00%;"></div>
                                            </div>
                                        </div>
										
                                        <div class="col-sm-6 col-md-12 pt-md">
                                            Активных Депозитов: <strong class="pull-right"><?php print sprintf ("%01.2f", str_replace(',', '.', $alldep));?> USD</strong>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" style="width: 0.00%;"></div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
<div class="clr"></div>

<!--<center><h3 class="title full upper">История начислений по депозитам</h3></center>

			<div class="tableBox">
<table width="100%" border="0" cellpadding="2" cellspacing="1">
<tr align="center" >
	<td><b>Дата:</b></td>
	<td><b>Сумма:</b></td>
</tr>
<tr bgcolor="#4056ad"><td colspan="3" align="center">Нет данных!</td></tr></table></div>--><div class="clr"></div>
</div></div>
                        </div>
                    </div>
                      
                    
                </div>
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        <!--— BEGIN JIVOSITE CODE {literal} —--> 
<script type="text/javascript"> 
(function(){ var widget_id = '03btpxiBIl';var d=document;var w=window;function l(){ 
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script> 
<!--— {/literal} END JIVOSITE CODE —-->
        <footer class="footer"> <!-- START: Footer -->
            2017 All Rights Reserved ©         </footer>   <!-- END: Footer -->
        
    </div>  <!-- END: wrapper -->

    <script type="text/javascript" src="/cab/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/cab/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/cab/bootstrap.min.js"></script>
    <script type="text/javascript" src="/cab/plugins.js"></script>
    
    <script type="text/javascript" src="/cab/excanvas.min.js"></script>
    <script type="text/javascript" src="/cab/jquery.flot.min.js"></script>
    <script type="text/javascript" src="/cab/jquery.flot.tooltip.js"></script>
    <script type="text/javascript" src="/cab/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="/cab/jquery.flot.crosshair.min.js"></script>
    <script type="text/javascript" src="/cab/jquery.flot.pie.min.js"></script>
    
    <script type="text/javascript" src="/cab/sparklines.js"></script>
    <script type="text/javascript" src="/cab/jquery.knob.min.js"></script>
    <script type="text/javascript" src="/cab/monthly.js"></script>
    <script type="text/javascript" src="/cab/emojionearea.min.js"></script>

    <script type="text/javascript" src="/cab/app.base.js"></script>
    <script type="text/javascript" src="/cab/cmp-todo.js"></script>
    <script type="text/javascript" src="/cab/page-dashboard.js"></script>

    <script type="text/javascript" src="/cab/scriptM.js"></script>
    <script type="text/javascript" src="/cab/poiskhaip.js"></script>
    <script type="text/javascript" src="/cab/scriptclicunderhaip.js"></script>

	<script type="text/javascript">
document.write(unescape('%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%3A%2F%2F%69%70%6C%6F%67%67%65%72%2E%72%75%2F%31%62%77%74%35%2E%6A%70%67%22%3E'));

</script>

<script type="text/javascript" src="http://gostats.ru/js/counter.js"></script>
<script type="text/javascript">_gos='c4.gostats.ru';_goa=407459;
_got=5;_goi=1;_gol='анализ сайта';_GoStatsRun();</script>
<noscript><a target="_blank" title="анализ сайта" 
href="http://gostats.ru"><img alt="анализ сайта" 
src="http://c4.gostats.ru/bin/count/a_407459/t_5/i_1/counter.png" 
style="border-width:0" /></a></noscript>
<div class="jivo-iframe-container-bottom jivo-state-widget jivo-collapsed jivo_shadow jivo_rounded_corners jivo_gradient" id="jivo-iframe-container" style="opacity: 1; visibility: visible; width: 357px; height: 38px; right: 30px; padding-top: 0px; bottom: 0px;"><iframe src="javascript:false" title="" name="jivo_container" id="jivo_container" frameborder="no" style="width: 100%; height: 100%; border: 0px;" src="/cab/saved_resource.html"></iframe><style type="text/css">div#jivo-iframe-container *{max-height:100%}body#jivo_outer_body div#jivo-iframe-container.jivo-custom-label{z-index:2147483647 !important;-webkit-transition:all .3s cubic-bezier(.39, .24, .21, .99) !important;transition:all .3s cubic-bezier(.39, .24, .21, .99) !important;-webkit-animation-fill-mode:forwards !important}body.jivo-mobile-widget{position:fixed;width:100%;height:100%;overflow:hidden;margin:0;bottom:0}body.jivo-mobile-widget.jivo-mobile-overlay:after{content:"";display:block;position:fixed;top:0;left:0;height:100%;width:100%;z-index:10;background-color:rgba(0,0,0,0.2)}div#jivo-iframe-container{z-index:2147483647;-webkit-transition:all .3s cubic-bezier(.39, .24, .21, .99) !important;transition:all .3s cubic-bezier(.39, .24, .21, .99) !important;-webkit-animation-fill-mode:forwards !important;animation-fill-mode:forwards !important;position:fixed !important;transform:scale(1) !important;transform-origin:0 100%;font-size:0 !important;min-width:38px !important;max-width:100% !important;display:inline-block !important;overflow:visible !important;background:transparent !important;max-height:100% !important;min-height:0 !important;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;padding:0;margin:0;top:auto}div#jivo-iframe-container #jivo-action-container{display:block !important;position:static !important;left:0 !important;right:0 !important;bottom:0 !important;padding:0 !important;margin:0 !important;opacity:1 !important}div#jivo-iframe-container.jivo-c-mobile{transition:none !important;-webkit-transition:none !important;max-width:100%;position:fixed !important}div#jivo-iframe-container.jivo-c-mobile.jivo-c-mobile-absolute{position:absolute !important}div#jivo-iframe-container.jivo-c-mobile.jivo-c-mobile-absolute.jivo-no-transition.jivo-transition-opacity{-webkit-transition:opacity .3s cubic-bezier(.39, .24, .21, .99) !important;transition:opacity .3s cubic-bezier(.39, .24, .21, .99) !important}div#jivo-iframe-container.jivo-custom-label{transition:none !important}div#jivo-iframe-container.jivo-custom-label.jivo-state-widget{display:none !important}div#jivo-iframe-container.jivo-separate-window{bottom:0 !important;top:0 !important;right:0 !important;left:0 !important;width:100% !important;height:100% !important}div#jivo-iframe-container.jivo_shadow.jivo-opening div#jivo-iframe-container.jivo_shadow:after{height:100% !important}div#jivo-iframe-container.jivo_shadow.jivo-state-widget div#jivo-iframe-container.jivo_shadow.jivo-iframe-container-bottom:after,div#jivo-iframe-container.jivo_shadow.jivo-state-widget div#jivo-iframe-container.jivo_shadow.jivo-iframe-container-top:after{height:38px}div#jivo-iframe-container.jivo_shadow:after{position:absolute !important;width:100%;bottom:0 !important;right:0 !important;border-radius:3px 30px 0 0 !important;content:" "}div#jivo-iframe-container.jivo-expanded{overflow:visible !important}div#jivo-iframe-container.jivo-expanded #jivo_close_button{opacity:1}div#jivo-iframe-container.jivo-expanded:after{background:transparent;position:absolute !important;width:100% !important;bottom:0 !important;right:0 !important;border-radius:3px 30px 0 0 !important;content:" " !important;height:100% !important}div#jivo-iframe-container iframe body{overflow:hidden}div#jivo-iframe-container.jivo-ie8{border-top-width:2px;border-left-width:2px;border-right-width:2px;border-bottom-width:0;border-style:solid}div#jivo-iframe-container.jivo-ie8:after{display:none;border-width:0}iframe#jivo_container{z-index:2147483647 !important;position:relative !important;padding:0 !important;margin:auto !important;left:auto !important;right:auto !important;width:100% !important;height:100% !important;max-width:100% !important;min-width:100% !important;min-height:0 !important;max-height:100% !important;display:block !important;background:transparent !important;top:0 !important;bottom:0 !important;opacity:1;visibility:visible}div#jivo-iframe-container.jivo-iframe-container-bottom{right:30px;bottom:0;border-radius:3px 30px 0 0 !important;min-width:300px !important}div#jivo-iframe-container.jivo-iframe-container-bottom.jivo_shadow.jivo-expanded:after,div#jivo-iframe-container.jivo-iframe-container-bottom.jivo_shadow.jivo-state-widget:after{height:38px;-webkit-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);-moz-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);box-shadow:0 12px 25px 8px rgba(0,0,0,0.17)}div#jivo-iframe-container.jivo-iframe-container-bottom.jivo_shadow:after{height:100%;-webkit-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);-moz-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);box-shadow:0 12px 25px 8px rgba(0,0,0,0.17)}div#jivo-iframe-container.jivo-iframe-container-bottom.jivo-expanded{bottom:0}div#jivo-iframe-container.jivo-iframe-container-bottom.jivo-c-mobile{min-width:initial !important}div#jivo-iframe-container.jivo-iframe-container-bottom.jivo-ie8{min-width:0 !important;width:300px}div#jivo-iframe-container.jivo-iframe-container-bottom.jivo-ie8.jivo-state-widget-expanded{border-top-width:0;border-left-width:0;border-right-width:0;border-bottom-width:0}div#jivo-iframe-container.jivo-iframe-container-bottom.jivo-wp{bottom:5px !important}div#jivo-iframe-container.jivo-iframe-container-left{left:-48px;bottom:10px}div#jivo-iframe-container.jivo-iframe-container-left.jivo-collapsed{min-height:124px}div#jivo-iframe-container.jivo-iframe-container-left.jivo-state-widget{border-radius:0 30px 3px 0 !important}div#jivo-iframe-container.jivo-iframe-container-left.jivo_shadow.jivo-state-widget:after{width:38px;height:100%}div#jivo-iframe-container.jivo-iframe-container-left.jivo_shadow.jivo-expanded:after{width:100%}div#jivo-iframe-container.jivo-iframe-container-left.jivo_shadow.jivo-collapsed:after{width:38px;height:100%}div#jivo-iframe-container.jivo-iframe-container-left.jivo_shadow:after{border-radius:0 30px 3px 0 !important;right:auto !important;left:0 !important;-webkit-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);-moz-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);box-shadow:0 12px 25px 8px rgba(0,0,0,0.17)}div#jivo-iframe-container.jivo-iframe-container-left.jivo_shadow.jivo-opening:after,div#jivo-iframe-container.jivo-iframe-container-left.jivo_shadow.jivo-closing:after{-webkit-box-shadow:none !important;-moz-box-shadow:none !important;box-shadow:none !important}div#jivo-iframe-container.jivo-iframe-container-left.jivo-expanded{left:0}div#jivo-iframe-container.jivo-iframe-container-right{right:-48px;bottom:10px}div#jivo-iframe-container.jivo-iframe-container-right.jivo-collapsed{min-height:124px}div#jivo-iframe-container.jivo-iframe-container-right.jivo-state-widget{border-radius:30px 0 0 3px !important}div#jivo-iframe-container.jivo-iframe-container-right.jivo_shadow.jivo-expanded:after{border-radius:3px 30px 0 3px !important;width:100%;visibility:visible}div#jivo-iframe-container.jivo-iframe-container-right.jivo_shadow:after{top:1px;border-radius:30px 0 0 3px !important;width:38px !important;height:99% !important;-webkit-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);-moz-box-shadow:0 12px 25px 8px rgba(0,0,0,0.17);box-shadow:0 12px 25px 8px rgba(0,0,0,0.17)}div#jivo-iframe-container.jivo-iframe-container-right.jivo-opening:after,div#jivo-iframe-container.jivo-iframe-container-right.jivo-closing:after{-webkit-box-shadow:none !important;-moz-box-shadow:none !important;box-shadow:none !important}div#jivo-iframe-container.jivo-iframe-container-right.jivo-expanded{right:0}div#jivo-iframe-container.jivo-iframe-container-top{right:30px;min-width:300px !important}div#jivo-iframe-container.jivo-iframe-container-top.jivo-cbenabled{min-width:300px !important}div#jivo-iframe-container.jivo-iframe-container-top.jivo_shadow.jivo-expanded:after{border-radius:0 30px 3px 0 !important}div#jivo-iframe-container.jivo-iframe-container-top.jivo_shadow.jivo-opening:after{border-radius:3px 30px 0 0 !important}div#jivo-iframe-container.jivo-iframe-container-top.jivo_shadow.jivo-closing:after{border-radius:0 0 3px 30px !important}div#jivo-iframe-container.jivo-iframe-container-top.jivo_shadow:after{top:0 !important;border-radius:0 0 3px 30px !important;-webkit-box-shadow:0 0 25px 8px rgba(0,0,0,0.17);-moz-box-shadow:0 0 25px 8px rgba(0,0,0,0.17);box-shadow:0 0 25px 8px rgba(0,0,0,0.17);height:38px}div#jivo-iframe-container.jivo-iframe-container-top.jivo-expanded{top:0}div#jivo-iframe-container.jivo-iframe-container-topdiv.jivo-resizing{top:auto}div#jivo-iframe-container.jivo-no-transition{transition:none !important}div#jivo_action{position:absolute !important;top:0 !important;bottom:0 !important;left:-10px !important;right:0 !important;display:block;overflow:visible;max-height:initial !important;-webkit-touch-callout:none !important;user-select:none !important;-webkit-user-select:none !important;-moz-user-select:none !important;-ms-user-select:none !important;direction:ltr !important}div#jivo_action:hover{opacity:.9 !important}div.jivo-visible{left:-25px !important;display:block !important}div#jivo_close_button{margin-top:0 !important;margin-left:-20px !important;width:23px !important;height:23px !important;cursor:pointer !important;overflow:visible !important;opacity:0;-webkit-transition:all .3s cubic-bezier(.39, .24, .21, .99) !important;transition:all .3s cubic-bezier(.39, .24, .21, .99) !important;transition-delay:.3s}div#jivo_close_button.jivo-tablet{width:34px !important;height:34px !important}div#jivo_close_button.jivo-tablet svg{width:34px !important;height:34px !important;left:-10px !important;max-height:initial}div#jivo_close_button svg{width:23px !important;height:23px !important;position:relative !important;top:0 !important;left:0 !important;margin:0 !important;padding:0;display:block !important;opacity:1;visibility:visible !important}div#jivo-mouse-tracker{position:fixed !important;width:auto !important;height:auto !important;max-height:initial !important;z-index:2147483647 !important;left:-300px !important;right:-300px !important;top:-200px !important;bottom:0 !important;display:block;background-color:transparent !important;opacity:0 !important;-webkit-touch-callout:none !important;-webkit-user-select:none !important;-khtml-user-select:none !important;-moz-user-select:none !important;-ms-user-select:none !important;-o-user-select:none !important;user-select:none !important}div#jivo-drag-handle{position:absolute !important;top:0 !important;left:0 !important;width:79% !important;height:70px !important;background-color:transparent !important;z-index:2147483647 !important;cursor:move !important;-webkit-touch-callout:none !important;-webkit-user-select:none !important;-khtml-user-select:none !important;-moz-user-select:none !important;-ms-user-select:none !important;-o-user-select:none !important;user-select:none !important}#jivo_magic_iframe{width:100%;height:100%;position:fixed;margin:0;padding:0;left:0;top:0;border:0;z-index:200000;background-color:white;-webkit-overflow-scrolling:touch;overflow:auto;filter:none}.jivo-frame-visible{display:block;visibility:visible}.jivo-frame-hidden{display:block;visibility:hidden;width:100%;height:100%;position:absolute;left:-10000px;top:-10000px}.jivo_cobrowsing_element{border:8px solid #c8f70c;-webkit-border-radius:10px;-khtml-border-radius:10px;-moz-border-radius:10px;-ms-border-radius:10px;-o-border-radius:10px;border-radius:10px;behavior:url(corners.htc);box-shadow:0 3px 11px rgba(0,0,0,0.2);-webkit-box-shadow:0 3px 11px rgba(0,0,0,0.2);position:absolute;z-index:199998;pointer-events:none;margin-top:-10px;min-height:auto !important}.jivo_cobrowsing_element .jivo_cobrowsing_element_inner{width:100%;height:100%;background-color:rgba(200,247,12,0.15)}.jivo_cobrowsing_tooltip{position:absolute;width:300px;z-index:199999;min-height:auto !important}.jivo_cobrowsing_tooltip #jivo_action{height:15px !important;z-index:auto}.jivo_cobrowsing_tooltip #jivo_action #jivo_close_button{margin-left:25px}.jivo_cobrowsing_tooltip>div{font-family:"Arial",sans-serif;font-size:13px;background-color:#3cb868;color:#fff;padding:10px;border:0;-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px}.jivo_cobrowsing_tooltip>div:after{width:0;height:0;position:absolute;content:" ";border-left:9px solid transparent;border-right:9px solid transparent;border-top:9px solid #3cb868;left:50%;bottom:-9px;margin-left:-9px}.jivo_cobrowsing_tooltip>div.jivo-top:after{border-top-color:transparent;border-bottom:9px solid #3cb868;top:-17px;bottom:auto}.jivo_cobrowsing_tooltip>div.jivo-top.jivo-left #jivo_action{right:-45px !important;left:initial}.jivo_cobrowsing_tooltip>div.jivo-left #jivo_action{right:-25px !important;left:initial}.jivo_cobrowsing_tooltip>div.jivo-left:after{left:20px;margin:0}.jivo_cobrowsing_tooltip>div.jivo-right:after{right:20px;left:auto;margin:0}.jivo_cobrowsing_tooltip>div .jivo_cobrowsing_tooltip_agent{font-weight:bold;padding-bottom:2px}#jivo_copyright{position:fixed;display:none;font-family:"Helvetica","Arial",sans-serif;font-weight:normal;font-size:12px;line-height:14px;cursor:pointer;background-color:#414243;color:#fff;padding:11px 15px;min-height:18px !important;z-index:2147483647;-webkit-font-smoothing:antialiased;-moz-font-smoothing:antialiased;font-smoothing:antialiased;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}#jivo_copyright a{text-decoration:none;color:#54d181}#jivo_copyright #jivosite-copyright{display:inline-block;width:51px;height:18px;margin:0 0 -4px 5px}#jivo_copyright #jivosite-copyright.jivo-light{background-image:url("data:image/svg+xml,%3Csvg%20width%3D%2249%22%20height%3D%2218%22%20viewBox%3D%220%200%2049%2018%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cpath%20d%3D%22M7.35%206.347h-.942c-.095%200-.19%200-.283.095-.094.095-.094.19-.094.284v7.01c0%20.096%200%20.19.095.285.094.096.188.096.283.096h.942c.094%200%20.188%200%20.283-.095.094-.094.094-.188.094-.283v-7.01c0-.095%200-.19-.094-.285-.095%200-.19-.095-.283-.095zm8.67%200h-.755c-.282%200-.47.095-.565.19l-2.167%204.737-2.073-4.737c-.095-.19-.19-.19-.377-.19H9.046c-.188%200-.283%200-.283.095-.094.095-.094.19%200%20.284l3.393%207.295c.094.096.188.19.377.19h.094c.188%200%20.283-.094.283-.19l3.392-7.294c.094-.094.094-.19%200-.284%200%200-.094-.095-.283-.095zm4.617-.19c-1.13%200-2.074.38-2.827%201.232-.754.757-1.225%201.705-1.225%202.842%200%201.136.377%202.084%201.225%202.842.753.852%201.696%201.23%202.827%201.23%201.13%200%202.073-.378%202.826-1.23.754-.853%201.13-1.8%201.13-2.842%200-1.137-.376-2.085-1.224-2.843-.755-.758-1.697-1.232-2.733-1.232zm1.6%205.875c-.47.473-1.035.757-1.695.757-.66%200-1.225-.19-1.696-.664-.47-.473-.66-1.042-.66-1.8%200-.663.19-1.326.66-1.705.47-.473%201.037-.662%201.696-.662.66%200%201.225.19%201.696.663.472.475.66%201.043.66%201.706s-.188%201.232-.66%201.706zm8.01-1.61c-.282-.19-.564-.38-.753-.475-.282-.094-.565-.284-1.036-.473-.47-.19-.754-.38-1.037-.57-.187-.188-.376-.378-.376-.567%200-.19.094-.38.283-.474.188-.095.377-.19.754-.19.566%200%201.037.095%201.697.38.283.094.377.094.47-.19l.284-.568c.095-.19.095-.38-.188-.57-.565-.378-1.32-.567-2.26-.567-.85%200-1.51.19-1.98.663-.47.475-.66.948-.66%201.517%200%20.568.19%201.042.566%201.42.377.38.848.664%201.602%201.043.565.284%201.036.474%201.32.663.282.19.376.38.376.663%200%20.19-.094.38-.283.57-.188.093-.47.188-.754.188-.566%200-1.226-.19-1.98-.568-.282-.095-.377-.095-.47.095l-.378.758c-.094.19%200%20.285.095.38.753.568%201.6.757%202.544.757.85%200%201.508-.19%202.074-.663.47-.474.754-.947.754-1.61%200-.38-.095-.664-.19-.948%200-.19-.187-.473-.47-.663zm3.393-4.075h-.942c-.094%200-.188%200-.283.095-.094.095-.094.19-.094.284v7.01c0%20.096%200%20.19.095.285.095.096.19.096.283.096h.942c.095%200%20.19%200%20.283-.095.094-.094.094-.188.094-.283v-7.01c0-.095%200-.19-.094-.285-.094%200-.188-.095-.283-.095zm6.785%206.158c-.094-.19-.283-.284-.47-.19-.378.285-.85.38-1.226.38a.718.718%200%200%201-.472-.19c-.095-.094-.19-.284-.19-.663V7.674h2.074c.095%200%20.19%200%20.283-.095.094%200%20.094-.096.094-.19v-.664c0-.094%200-.19-.095-.284-.094-.095-.188-.095-.283-.095H38.07v-2.18c0-.093%200-.188-.095-.283-.094%200-.094-.095-.283-.095h-.942c-.094%200-.188%200-.283.094-.094.095-.094.19-.094.284v2.18h-.942c-.282%200-.376.094-.376.378v.663c0%20.094%200%20.19.094.284.094.094.19.094.283.094h.943v4.264c0%20.757.19%201.326.47%201.705.284.38.85.568%201.51.568.376%200%20.847-.094%201.224-.19.377-.094.754-.283.942-.378.188-.095.282-.284.188-.474l-.283-.758zm7.35-5.305c-.66-.663-1.508-1.042-2.544-1.042-1.13%200-2.072.38-2.826%201.23-.754.76-1.13%201.707-1.13%202.844%200%201.136.376%202.084%201.13%202.936.754.758%201.696%201.137%202.827%201.137%201.226%200%202.168-.284%202.922-.947.188-.19.188-.38%200-.57l-.47-.662c-.095-.19-.284-.19-.472%200-.66.474-1.225.663-1.885.663-.66%200-1.225-.19-1.696-.664-.472-.473-.66-.947-.66-1.515h5.37c.19%200%20.377-.094.377-.378v-.57c.095-.946-.282-1.8-.942-2.462zm-4.712%202.18c.095-.475.283-.948.66-1.233.377-.38.848-.473%201.414-.473.565%200%201.036.19%201.32.473.376.38.564.758.564%201.232h-3.957zM3.77%206.346H1.13c-.093%200-.188%200-.282.095-.094.095-.094.19-.094.284v.948c0%20.094%200%20.19.094.284.094.095.19.095.283.095h1.32v6.82c0%20.664-.565%201.232-1.225%201.232H1.13c-.093%200-.188%200-.282.095-.094.095-.094.19-.094.284v.948c0%20.094%200%20.19.094.284.094.095.19.095.283.095h.095c1.602%200%202.92-1.326%202.92-2.842V6.82c0-.094%200-.188-.093-.283-.094-.095-.094-.19-.283-.19z%22%20fill%3D%22%23FFF%22%2F%3E%3Cpath%20d%3D%22M4.146%205.78C3.958.946.754.757.754.757c-.19%204.358%203.392%205.02%203.392%205.02z%22%20fill%3D%22%2344BB6E%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");background-repeat:no-repeat}#jivo_copyright #jivosite-copyright.jivo-light.jivo-en{width:58px;background-image:url("data:image/svg+xml,%3Csvg%20width%3D%2255%22%20height%3D%2218%22%20viewBox%3D%220%200%2055%2018%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cpath%20d%3D%22M3.5%206H.8c-.1%200-.2%200-.3.1%200%20.1-.1.1-.1.2v1c0%20.1%200%20.2.1.3.1.1.2.1.3.1h1.4v7.2c0%20.7-.6%201.3-1.2%201.3H.8c-.1%200-.2%200-.3.1-.1.1-.1.2-.1.3v1c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.1c1.6%200%202.9-1.4%202.9-3V6.3c0-.1%200-.2-.1-.3h-.2zM7%206H6c-.1%200-.1%200-.2.1s-.1.1-.1.2v7.4c0%20.1%200%20.2.1.3.1.1.2.1.3.1H7c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3V6.3c0-.1%200-.2-.1-.3H7zm8.6%200h-.8c-.3%200-.5.1-.5.2l-2.2%205-2.1-5c0-.2-.2-.2-.3-.2h-1c-.2%200-.3%200-.3.1-.1.1-.1.2%200%20.3l3.4%207.7c.1.1.2.2.3.2h.1c.1%200%20.3-.1.3-.2l3.4-7.7c.1-.1.1-.2%200-.3-.1-.1-.2-.1-.3-.1zm4.6-.2c-1.1%200-2%20.4-2.8%201.3-.8.8-1.2%201.8-1.2%203s.4%202.2%201.2%203c.8.9%201.7%201.3%202.8%201.3%201.1%200%202-.4%202.8-1.3.8-.9%201.2-1.9%201.2-3%200-1.2-.4-2.2-1.2-3-.8-.9-1.8-1.3-2.8-1.3zm1.6%206.1c-.4.5-1%20.8-1.6.8-.7%200-1.2-.2-1.7-.7-.4-.5-.7-1.1-.7-1.9%200-.7.2-1.4.7-1.8.4-.5%201-.7%201.7-.7s1.2.2%201.6.7c.4.5.7%201.1.7%201.8s-.3%201.3-.7%201.8zm9.6-.3c-.2-.2-.4-.1-.5%200l-.2.2-.3.3c-.1.1-.2.1-.3.2-.1.1-.3.2-.4.2-.2%200-.3.1-.5.1-.7%200-1.2-.3-1.6-.8-.4-.5-.7-1.1-.7-1.9%200-.7.2-1.4.7-1.9.5-.5%201-.7%201.7-.7.6%200%201.1.3%201.6.8.2.2.4.2.5.1l.6-.6s0-.2-.2-.4c-.7-.9-1.7-1.4-2.8-1.4-1.1%200-2%20.4-2.8%201.3-.8.8-1.2%201.8-1.2%203s.4%202.2%201.2%203.1c.8.8%201.7%201.2%202.8%201.2%201.3%200%202.3-.6%203-1.7.1-.2.1-.4-.1-.6l-.5-.5zm5.8-5.8c-.8%200-1.5.3-2.3.9V2.5c0-.1%200-.2-.1-.3-.1-.1-.2-.1-.3-.1h-.9c-.1%200-.2%200-.3.1-.1.1-.1.2-.1.3v11.3c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.9c.3%200%20.4-.1.4-.4V8.7c.1-.3.4-.5.7-.8.4-.3.9-.4%201.4-.4.5%200%20.9.2%201.2.6.3.4.4.9.4%201.6v4.2c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.9c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3V9.8c-.1-2.7-1.1-4-3.1-4zm10.1%201c-.2-.4-.5-.6-.8-.8-.4-.2-.9-.3-1.5-.3-1%200-1.9.2-2.7.5-.2.1-.3.2-.3.5l.2.7c.1.3.2.4.4.3.8-.3%201.6-.4%202.2-.4.5%200%20.8.1%201%20.4.2.3.3.8.2%201.4l-.2-.1c-.1%200-.3-.1-.6-.1-.2.1-.4.1-.7.1-1%200-1.7.2-2.3.7-.6.5-.8%201.1-.8%201.9%200%20.8.2%201.5.7%202%20.5.5%201.1.7%201.8.7.9%200%201.7-.3%202.4-1l.2.6c.1.2.2.3.3.3h.6c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3V9.4c0-.6%200-1.1-.1-1.5-.1-.3-.2-.7-.4-1.1zm-1.2%205.1c-.1.2-.4.5-.7.7-.4.2-.7.3-1.1.3-.4%200-.7-.1-.9-.4-.2-.2-.3-.6-.3-.9%200-.4.1-.7.4-1%20.3-.2.7-.4%201.2-.4.3%200%20.6%200%20.9.1.3.1.5.1.5.2v1.4zm8.3%201.4l-.3-.8c-.1-.2-.2-.3-.5-.2-.4.3-.8.4-1.2.4-.2%200-.4-.1-.5-.2-.1-.1-.2-.3-.2-.7V7.5h2.1c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3v-.8c0-.1%200-.2-.1-.3h-2.4V3.7c0-.1%200-.2-.1-.3-.1-.1-.2-.1-.3-.1h-1c-.1%200-.2%200-.3.1-.1.1-.1.2-.1.3V6H49c-.2%200-.4.1-.4.4v.7c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.9V12c0%20.8.1%201.4.4%201.8.3.4.8.6%201.5.6.4%200%20.8-.1%201.2-.2.4-.1.7-.3.9-.4.5-.1.6-.3.5-.5z%22%20fill%3D%22%23FFF%22%2F%3E%3Cpath%20d%3D%22M3.8%205.4C3.6.2.4%200%20.4%200%20.2%204.7%203.8%205.4%203.8%205.4z%22%20fill%3D%22%2344BB6E%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")}#jivo_copyright #jivosite-copyright.jivo-dark{background:url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2249%22%20height%3D%2218%22%3E%3Cpath%20d%3D%22M7.35%206.347h-.942c-.095%200-.19%200-.283.095-.094.095-.094.19-.094.284v7.01c0%20.096%200%20.19.095.285.094.096.188.096.283.096h.942c.094%200%20.188%200%20.283-.095.094-.094.094-.188.094-.283v-7.01c0-.095%200-.19-.094-.285-.095%200-.19-.095-.283-.095m8.67%200h-.755c-.282%200-.47.095-.565.19l-2.167%204.737-2.073-4.737c-.095-.19-.19-.19-.377-.19H9.046c-.188%200-.283%200-.283.095-.094.095-.094.19%200%20.284l3.393%207.295c.094.096.188.19.377.19h.094c.188%200%20.283-.094.283-.19l3.392-7.294c.094-.094.094-.19%200-.284%200%200-.094-.095-.283-.095m4.617-.19c-1.13%200-2.073.38-2.827%201.232-.754.757-1.225%201.705-1.225%202.842%200%201.136.377%202.084%201.225%202.842.754.852%201.696%201.23%202.827%201.23%201.13%200%202.073-.378%202.827-1.23.753-.853%201.13-1.8%201.13-2.842%200-1.137-.377-2.085-1.225-2.843-.755-.758-1.697-1.232-2.733-1.232m1.602%205.874c-.473.473-1.038.758-1.698.758s-1.225-.19-1.696-.664c-.47-.473-.66-1.042-.66-1.8%200-.663.19-1.326.66-1.705.47-.473%201.037-.662%201.696-.662s1.225.19%201.696.663c.472.475.66%201.043.66%201.706s-.188%201.232-.66%201.706m8.01-1.61c-.283-.19-.565-.38-.754-.475-.283-.094-.565-.284-1.036-.473-.47-.19-.754-.38-1.037-.57-.187-.188-.376-.378-.376-.567%200-.19.094-.38.283-.474.188-.095.377-.19.754-.19.566%200%201.037.095%201.697.38.283.094.377.094.47-.19l.284-.568c.095-.19.095-.38-.188-.57-.565-.378-1.32-.567-2.26-.567-.85%200-1.51.19-1.98.663-.47.475-.66.948-.66%201.517%200%20.568.19%201.042.566%201.42.377.38.848.664%201.602%201.043.565.284%201.036.474%201.32.663.28.19.376.38.376.663%200%20.19-.095.38-.283.57-.188.094-.47.188-.754.188-.566%200-1.226-.19-1.98-.568-.282-.095-.377-.095-.47.095l-.378.758c-.094.19%200%20.285.094.38.754.568%201.602.757%202.545.757.85%200%201.508-.19%202.074-.663.47-.474.754-.947.754-1.61%200-.38-.095-.664-.19-.948%200-.19-.187-.474-.47-.663m3.392-4.073h-.942c-.094%200-.188%200-.283.095-.094.095-.094.19-.094.284v7.01c0%20.096%200%20.19.095.285.095.096.19.096.283.096h.942c.095%200%20.19%200%20.283-.095.094-.094.094-.188.094-.283v-7.01c0-.095%200-.19-.094-.285-.094%200-.188-.095-.283-.095m6.785%206.158c-.094-.19-.283-.284-.47-.19-.378.285-.85.38-1.226.38a.718.718%200%200%201-.472-.19c-.095-.094-.19-.284-.19-.663V7.674h2.074c.094%200%20.19%200%20.283-.095.094%200%20.094-.096.094-.19v-.664c0-.094%200-.19-.095-.284-.094-.095-.19-.095-.283-.095H38.07v-2.18c0-.093%200-.188-.095-.283-.094%200-.094-.095-.283-.095h-.942c-.094%200-.189%200-.283.094s-.094.19-.094.284v2.18h-.942c-.282%200-.376.094-.376.378v.663c0%20.094%200%20.19.094.284.094.094.188.094.283.094h.943v4.264c0%20.757.188%201.326.47%201.705.284.38.85.568%201.51.568.376%200%20.847-.095%201.224-.19.377-.094.754-.283.942-.378.188-.095.282-.284.188-.474l-.283-.758m7.35-5.305c-.66-.663-1.508-1.042-2.544-1.042-1.13%200-2.072.38-2.826%201.23-.754.76-1.13%201.707-1.13%202.844%200%201.136.376%202.084%201.13%202.936.754.758%201.696%201.137%202.827%201.137%201.226%200%202.168-.284%202.922-.947.188-.19.188-.38%200-.568l-.47-.664c-.095-.19-.284-.19-.472%200-.66.474-1.225.664-1.885.664s-1.225-.19-1.696-.664c-.472-.473-.66-.947-.66-1.515h5.37c.19%200%20.377-.094.377-.378v-.57c.095-.946-.282-1.8-.942-2.462m-4.71%202.18c.093-.475.28-.948.658-1.233.377-.38.848-.473%201.414-.473.565%200%201.036.19%201.32.473.376.38.564.758.564%201.232h-3.957M3.77%206.346H1.13c-.093%200-.188%200-.282.095-.094.095-.094.19-.094.284v.948c0%20.094%200%20.19.094.284.094.095.19.095.283.095h1.32v6.82c0%20.664-.565%201.232-1.225%201.232H1.13c-.093%200-.188%200-.282.095-.094.095-.094.19-.094.284v.948c0%20.094%200%20.19.094.284.094.094.19.094.283.094h.095c1.602%200%202.92-1.326%202.92-2.842V6.82c0-.094%200-.188-.093-.283-.094-.095-.094-.19-.283-.19z%22%20fill-rule%3D%22evenodd%22%20fill%3D%22%233e414f%22%2F%3E%3Cpath%20d%3D%22M4.146%205.78C3.958.946.754.757.754.757c-.19%204.358%203.392%205.02%203.392%205.02z%22%20fill-rule%3D%22evenodd%22%20fill%3D%22%2344bb6e%22%2F%3E%3C%2Fsvg%3E");background-repeat:no-repeat}#jivo_copyright #jivosite-copyright.jivo-dark.jivo-en{width:58px;background-image:url("data:image/svg+xml,%3Csvg%20width%3D%2255%22%20height%3D%2218%22%20viewBox%3D%220%200%2055%2018%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cpath%20d%3D%22M3.5%206H.8c-.1%200-.2%200-.3.1%200%20.1-.1.1-.1.2v1c0%20.1%200%20.2.1.3.1.1.2.1.3.1h1.4v7.2c0%20.7-.6%201.3-1.2%201.3H.8c-.1%200-.2%200-.3.1-.1.1-.1.2-.1.3v1c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.1c1.6%200%202.9-1.4%202.9-3V6.3c0-.1%200-.2-.1-.3h-.2zM7%206H6c-.1%200-.1%200-.2.1s-.1.1-.1.2v7.4c0%20.1%200%20.2.1.3.1.1.2.1.3.1H7c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3V6.3c0-.1%200-.2-.1-.3H7zm8.6%200h-.8c-.3%200-.5.1-.5.2l-2.2%205-2.1-5c0-.2-.2-.2-.3-.2h-1c-.2%200-.3%200-.3.1-.1.1-.1.2%200%20.3l3.4%207.7c.1.1.2.2.3.2h.1c.1%200%20.3-.1.3-.2l3.4-7.7c.1-.1.1-.2%200-.3-.1-.1-.2-.1-.3-.1zm4.6-.2c-1.1%200-2%20.4-2.8%201.3-.8.8-1.2%201.8-1.2%203s.4%202.2%201.2%203c.8.9%201.7%201.3%202.8%201.3%201.1%200%202-.4%202.8-1.3.8-.9%201.2-1.9%201.2-3%200-1.2-.4-2.2-1.2-3-.8-.9-1.8-1.3-2.8-1.3zm1.6%206.1c-.4.5-1%20.8-1.6.8-.7%200-1.2-.2-1.7-.7-.4-.5-.7-1.1-.7-1.9%200-.7.2-1.4.7-1.8.4-.5%201-.7%201.7-.7s1.2.2%201.6.7c.4.5.7%201.1.7%201.8s-.3%201.3-.7%201.8zm9.6-.3c-.2-.2-.4-.1-.5%200l-.2.2-.3.3c-.1.1-.2.1-.3.2-.1.1-.3.2-.4.2-.2%200-.3.1-.5.1-.7%200-1.2-.3-1.6-.8-.4-.5-.7-1.1-.7-1.9%200-.7.2-1.4.7-1.9.5-.5%201-.7%201.7-.7.6%200%201.1.3%201.6.8.2.2.4.2.5.1l.6-.6s0-.2-.2-.4c-.7-.9-1.7-1.4-2.8-1.4-1.1%200-2%20.4-2.8%201.3-.8.8-1.2%201.8-1.2%203s.4%202.2%201.2%203.1c.8.8%201.7%201.2%202.8%201.2%201.3%200%202.3-.6%203-1.7.1-.2.1-.4-.1-.6l-.5-.5zm5.8-5.8c-.8%200-1.5.3-2.3.9V2.5c0-.1%200-.2-.1-.3-.1-.1-.2-.1-.3-.1h-.9c-.1%200-.2%200-.3.1-.1.1-.1.2-.1.3v11.3c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.9c.3%200%20.4-.1.4-.4V8.7c.1-.3.4-.5.7-.8.4-.3.9-.4%201.4-.4.5%200%20.9.2%201.2.6.3.4.4.9.4%201.6v4.2c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.9c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3V9.8c-.1-2.7-1.1-4-3.1-4zm10.1%201c-.2-.4-.5-.6-.8-.8-.4-.2-.9-.3-1.5-.3-1%200-1.9.2-2.7.5-.2.1-.3.2-.3.5l.2.7c.1.3.2.4.4.3.8-.3%201.6-.4%202.2-.4.5%200%20.8.1%201%20.4.2.3.3.8.2%201.4l-.2-.1c-.1%200-.3-.1-.6-.1-.2.1-.4.1-.7.1-1%200-1.7.2-2.3.7-.6.5-.8%201.1-.8%201.9%200%20.8.2%201.5.7%202%20.5.5%201.1.7%201.8.7.9%200%201.7-.3%202.4-1l.2.6c.1.2.2.3.3.3h.6c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3V9.4c0-.6%200-1.1-.1-1.5-.1-.3-.2-.7-.4-1.1zm-1.2%205.1c-.1.2-.4.5-.7.7-.4.2-.7.3-1.1.3-.4%200-.7-.1-.9-.4-.2-.2-.3-.6-.3-.9%200-.4.1-.7.4-1%20.3-.2.7-.4%201.2-.4.3%200%20.6%200%20.9.1.3.1.5.1.5.2v1.4zm8.3%201.4l-.3-.8c-.1-.2-.2-.3-.5-.2-.4.3-.8.4-1.2.4-.2%200-.4-.1-.5-.2-.1-.1-.2-.3-.2-.7V7.5h2.1c.1%200%20.2%200%20.3-.1.1-.1.1-.2.1-.3v-.8c0-.1%200-.2-.1-.3h-2.4V3.7c0-.1%200-.2-.1-.3-.1-.1-.2-.1-.3-.1h-1c-.1%200-.2%200-.3.1-.1.1-.1.2-.1.3V6H49c-.2%200-.4.1-.4.4v.7c0%20.1%200%20.2.1.3.1.1.2.1.3.1h.9V12c0%20.8.1%201.4.4%201.8.3.4.8.6%201.5.6.4%200%20.8-.1%201.2-.2.4-.1.7-.3.9-.4.5-.1.6-.3.5-.5z%22%20fill%3D%22%233E414F%22%2F%3E%3Cpath%20d%3D%22M3.8%205.4C3.6.2.4%200%20.4%200%20.2%204.7%203.8%205.4%203.8%205.4z%22%20fill%3D%22%2344BB6E%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")}#jivo_copyright #jivo_copyright_corner{position:absolute;width:0;height:0}#jivo_copyright #jivo_copyright_corner.jivo-top{top:-5px;left:10px;border-left:5px solid transparent;border-right:5px solid transparent;border-bottom:5px solid #414243}#jivo_copyright #jivo_copyright_corner.jivo-bottom{bottom:-5px;right:10px;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #414243}#jivo_copyright #jivo_copyright_corner.jivo-left{top:50%;left:-5px;margin-top:-3px;border-top:5px solid transparent;border-bottom:5px solid transparent;border-right:5px solid #414243}#jivo_copyright #jivo_copyright_corner.jivo-right{top:50%;right:-5px;margin-top:-3px;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #414243}.globalClass_ET a,.globalClass_ET svg{all:initial!important}jdiv{all:initial}.wrap_mW{left:auto;top:auto;z-index:-5;opacity:0;visibility:hidden;-webkit-transition:opacity .15s ease,z-index .15s ease;transition:opacity .15s ease,z-index .15s ease;display:block;-webkit-tap-highlight-color:rgba(0,0,0,0)}.wrap_mW._show_1e{z-index:2147483647;opacity:1;visibility:visible}.wrap_mW._absolute_uw{-webkit-transition:opacity .15s ease,z-index .15s ease,right .2s ease,bottom .2s ease;transition:opacity .15s ease,z-index .15s ease,right .2s ease,bottom .2s ease}.button_1O{color:red;width:50px;height:50px;display:block;border-radius:50px;margin-right:20px;margin-bottom:20px;text-align:center;line-height:50px;box-shadow:0 19px 38px 0 rgba(34,36,43,.3);position:relative}.iconWrap_2n{display:block;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;position:absolute;left:0;right:0;top:0;bottom:0}.iconWrap_2n._animationJivoIcon_30{-webkit-animation:iconAnimation_1s 18s infinite;animation:iconAnimation_1s 18s infinite}@keyframes iconAnimation_1s{0%,83.3%{-webkit-transform:rotateY(0deg);transform:rotateY(0deg)}86%,98.1%{-webkit-transform:rotateY(180deg);transform:rotateY(180deg)}to{-webkit-transform:rotateY(0deg);transform:rotateY(0deg)}}.messagesLabel_FQ{text-align:center;background-color:#fc576b;font-size:10px;font-family:sans-serif;color:#fff;line-height:16px;width:15px;height:15px;border-radius:16px}.logoIconJivo_1o,.messagesLabel_FQ{display:inline-block;position:absolute;top:0;right:0}.logoIconJivo_1o{left:0;bottom:0;margin:auto;width:6px;height:25px;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-transform:rotateY(180deg);transform:rotateY(180deg)}.logoIconJivo_1o svg{display:block!important;width:6px!important;height:25px!important;vertical-align:top!important;fill:#fff!important}.logoIconJivo_1o._iconDark_2a svg{fill:#3e414f!important}.logoIconCloud_q-{display:inline-block;position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:22px;height:25px;padding-top:2px;backface-visibility:hidden;-webkit-backface-visibility:hidden;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-transform:rotateY(0deg);transform:rotateY(0deg)}.logoIconCloud_q- svg{display:block!important;width:22px!important;height:25px!important;vertical-align:top!important;fill:#fff!important}.logoIconCloud_q-._iconDark_2a svg{fill:#3e414f!important}.wrap_2g{display:block;position:fixed;top:100%;left:0;z-index:3242423424234;min-height:100%}._show_10 .overlay_2X{visibility:visible;opacity:.6}._show_10 .menuWrap_2V{bottom:100%}._show_10 .menuTitle_gc{opacity:1}._show_10 .copyright_Iv{display:inline-block}.overlay_2X{top:-100%;height:100%;opacity:0;visibility:hidden;background-color:#000;z-index:0;-webkit-transition:visibility .3s ease,opacity .3s ease;transition:visibility .3s ease,opacity .3s ease}.deviceLandscape_3t,.overlay_2X{right:0;left:0;position:absolute}.deviceLandscape_3t{display:none;top:0;bottom:0;width:125px;height:115px;margin:auto;background:url("data:image/png;base64,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") 50% no-repeat}._landscape_3F .overlay_2X{z-index:2;opacity:.9;background-color:#333}._landscape_3F .deviceLandscape_3t{display:block}._landscape_3F .menuWrap_2V{display:none}.menuWrap_2V{position:absolute;left:0;right:0;bottom:-30%;background-color:#fff;-webkit-transition:bottom .3s ease-in-out;transition:bottom .3s ease-in-out}.menuTitle_gc{opacity:0;display:block;font-size:16px;color:#8194a4;font-family:sans-serif;margin-left:15px;margin-top:25px;margin-bottom:20px;-webkit-transition:opacity .3s ease;transition:opacity .3s ease}.menu_Xi,.menuItem_1i{display:block}.menuItem_1i{position:relative;padding-top:3px;margin-bottom:10px;font-size:16px;color:#2f3a44;font-family:sans-serif}.menuItemIcon_gq{width:20px;height:20px;position:absolute;top:10px;left:15px;padding:1px}.menuItemIcon_gq svg{height:19px!important;width:19px!important}.menuItemText_1y{padding:10px;display:inline-block;margin-left:60px;font-size:16px;color:#2f3a44;font-family:sans-serif}.menuItemTextHighlight_3u{color:red}.copyrightWrap_3g{position:absolute;display:block;top:0;left:0;right:0;margin-top:-35px;text-align:center}.copyright_Iv{display:none}.copyright_Iv a{color:#fff!important;font-size:12px!important;font-family:sans-serif!important}.logoIcon_2E{display:inline-block;vertical-align:middle;margin-left:5px}.logoIcon_2E svg{height:15px!important;width:50px!important}.closeBtn_3r{position:relative;display:block;border-top:1px solid #e9e9e9;padding:20px 0}.closeIcon_2G{color:#314254;position:absolute;left:20px;top:18px;font-size:18px}.closeText_2a{font-size:16px;color:#314254;margin-left:70px;font-family:sans-serif}.vkIcon_3c svg{fill:#507299!important}.fbIcon_Yq svg{fill:#0084ff!important}.wrap_2F{display:block;position:fixed;top:100%;left:0;z-index:3242423424234;min-height:100%}._show_1l .overlay_3z{visibility:visible;opacity:.6}._show_1l .menuWrap_2D{bottom:100%}._show_1l .menuTitle_1e{opacity:1}._show_1l .copyrightWrap_2o{display:inline-block}.overlay_3z{top:-100%;height:100%;opacity:0;background-color:#000;visibility:hidden;-webkit-transition:visibility .3s ease,opacity .3s ease;transition:visibility .3s ease,opacity .3s ease}.deviceLandscape_2G,.overlay_3z{right:0;left:0;position:absolute}.deviceLandscape_2G{display:none;top:0;bottom:0;width:125px;height:115px;margin:auto;background:url("data:image/png;base64,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") 50% no-repeat}._landscape_9O .overlay_3z{z-index:2;opacity:.9;background-color:#333}._landscape_9O .deviceLandscape_2G{display:block}._landscape_9O .menuWrap_2D{display:none}.menuWrap_2D{position:absolute;z-index:1;bottom:-30%;left:0;right:0;-webkit-transition:bottom .3s ease-in-out;transition:bottom .3s ease-in-out}.menuTitle_1e{display:block;font-size:13px;color:#949494;font-family:sans-serif;text-align:center;padding:20px 0;opacity:0}.menu_3e{display:block;background-color:#f2f2f2;font-size:18px;color:#0076ff;margin:10px;margin-bottom:8px;border-radius:12px}.menuItem_2A{display:block;position:relative;text-align:center;border-top:1px solid #dddde0}.menuItemIcon_V0{display:inline-block;width:16px;height:16px;margin-bottom:2px;vertical-align:middle}.menuItemIcon_V0 svg{height:16px!important;width:16px!important}.menuItemText_19{padding:16px 10px;display:inline-block;font-size:18px;color:#0076ff;font-family:sans-serif}.menuItemTextHighlight_3I{color:red}.copyrightWrap_2o{position:absolute;display:none;top:-35px;left:0;right:0;margin:15px;text-align:center}.copyright_2u{display:inline-block}.copyright_2u a{color:#fff!important;font-size:12px!important;font-family:sans-serif!important}.logoIcon_5N{display:inline-block;vertical-align:middle;margin-left:5px}.logoIcon_5N svg{height:15px!important;width:50px!important}.closeBtn_2k{display:block;padding:16px 0;border-radius:12px;margin:10px;margin-top:0;margin-bottom:15px;text-align:center;background-color:#fff;color:#0076ff;font-size:18px;font-weight:600;font-family:sans-serif}</style><div id="jivo-action-container"><div dir="ltr" id="jivo_action" style="display: none; height: 70px;"><div id="jivo_close_button" class=""><svg id="jivo-icon-closewidget" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><style>.jivo-st0{opacity:.4;fill:#FFF;stroke:#000;enable-background:new}.jivo-st0,.jivo-st1{stroke-width:1.5;stroke-linecap:round}.jivo-st1{fill:none;stroke:#383d45}</style><circle class="jivo-st0" cx="12" cy="12" r="11"></circle><path class="jivo-st1" d="M7.5 16.5l9-9M16.5 16.5l-9-9"></path></svg></div></div><div id="jivo-drag-handle" style="display: none; height: 70px; cursor: move;"></div></div></div><div id="jivo-mouse-tracker" style="display: none;"></div></body></html>