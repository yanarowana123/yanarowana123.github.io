<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">Сайт отключен!</p>';
}

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
$sql = "INSERT INTO ipwriter (date, ip, last_page, first_page) VALUES ('".time()."', '".getipu()."', '".$_SERVER['SERVER_NAME'].'/'.$page.'/'.$_SERVER['QUERY_STRING']."', '".$_SERVER['HTTP_REFERER']."')";
mysql_query($sql);
} else {
if($_SERVER['QUERY_STRING']) {
$querstq = '/?'.$_SERVER['QUERY_STRING'];
} else {
$querstq = '';
}
if($page) {
$querstp = '/'.$page;
} else {
$querstp = '';
}
mysql_query("UPDATE `ipwriter` SET `last_page` = '".htmlspecialchars($_SERVER['SERVER_NAME'].$querstp.$querstq)."' WHERE `ip` = '".getipu()."' AND (`date` + 150) < '".time()."' LIMIT 1");
mysql_query("UPDATE `ipwriter` SET `date` = ".time()." WHERE `ip` = '".getipu()."' AND (`date` + 300) < '".time()."' LIMIT 1");
}
	}

if($_GET['cabinet'] == 'all') {
	setcookie( 'currency', 'all', time(  ) + 2592000, '/' );
} elseif($_GET['cabinet'] == 'usd') {
setcookie( 'currency', 'usd', time(  ) + 2592000, '/' );
} elseif($_GET['cabinet'] == 'rub') {
setcookie( 'currency', 'rub', time(  ) + 2592000, '/' );
} else {
}

if($_COOKIE['currency'] == 'usd') {
$stylecab = 'usd';
} elseif($_COOKIE['currency'] == 'rub') {
$stylecab = 'rub';
} else {
$stylecab = 'all';
}
if($_GET['cabinet'] == 'usd') {
$stylecab = 'usd';
} elseif($_GET['cabinet'] == 'rub') {
$stylecab = 'rub';
} elseif($_GET['cabinet'] == 'all') {
$stylecab = 'all';
} else {
}
/*
class CBRAgent
{
    protected $list = array();
 
    public function load()
    {
        $xml = new DOMDocument();
        $url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=' . date('d.m.Y');
 
        if (@$xml->load($url))
        {
            $this->list = array(); 
 
            $root = $xml->documentElement;
            $items = $root->getElementsByTagName('Valute');
 
            foreach ($items as $item)
            {
                $code = $item->getElementsByTagName('CharCode')->item(0)->nodeValue;
                $curs = $item->getElementsByTagName('Value')->item(0)->nodeValue;
                $this->list[$code] = floatval(str_replace(',', '.', $curs));
            }
 
            return true;
        } 
        else
            return false;
    }
 
    public function get($cur)
    {
        return isset($this->list[$cur]) ? $this->list[$cur] : 0;
    }
}
$cbr = new CBRAgent();
if ($cbr->load()){    
    $usd_curs = $cbr->get('USD');
}
if($usd_curs && $usd_curs <> cfgSET('cfgUSDcur') && $usd_curs <> 0) {
mysql_query('UPDATE `settings` SET `data` = "'.$usd_curs.'" WHERE cfgname = "cfgUSDcur" LIMIT 1');
}
*/
$alldep = 0.00;
$allout = 0.00;
$alloutb = 0.0000;
$resultd	= mysql_query("SELECT * FROM deposits WHERE user_id = ".$user_id." ORDER BY id ASC");
while($rowd = mysql_fetch_array($resultd)) {
	$alldep = $alldep + $rowd['sum'];
	}

$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');
$get_user_inforef = mysql_query("SELECT id, login, reg_time FROM users WHERE ref = ".$user_id." ORDER BY reg_time DESC");
	while ($rowref = mysql_fetch_array($get_user_inforef)) {
	$refersi = $refersi + 1;
	}


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

		$styl = 'style="color: #D694A5;"';
		$stymes = 'background: #459465;';
		$stylprint = '
		<style>
		.bg-info {
    background-color: #26A65B;
}
.btn-info {
    color: #ffffff;
    background-color: #82BB6F;
    border-color: #3ECB70;
	
	    background: rgba(204,63,63,1);
    background: -moz-linear-gradient(top, rgb(63, 204, 119) 0%, rgb(0, 166, 5) 54%, rgb(63, 204, 119) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgb(63, 204, 119)), color-stop(54%, rgb(0, 166, 5)), color-stop(100%, rgb(63, 204, 119)));
    background: -webkit-linear-gradient(top, rgb(63, 204, 119) 0%, rgb(0, 166, 5) 54%, rgb(63, 204, 119) 100%);
    background: -o-linear-gradient(top, rgb(63, 204, 119) 0%, rgb(0, 166, 5) 54%, rgb(63, 204, 119) 100%);
    background: -ms-linear-gradient(top, rgb(63, 204, 119) 0%, rgb(0, 166, 5) 54%, rgb(63, 204, 119) 100%);
    background: linear-gradient(to bottom, rgb(63, 204, 119) 0%, rgb(0, 166, 5) 54%, rgb(117, 204, 63) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#cc3f3f\', endColorstr=\'#cc3f3f\', GradientType=0 );
}
.btn-info:hover {
    color: #ffffff;
    background-color: #93C383;
    border-color: #82AD75;
}
.badge-primary {
    background-color: #79B367;
}
.firsttab {
    background: #4EA170;
    color: white;
	
	    background: rgba(255,175,75,1);
    background: -moz-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,175,75,1)), color-stop(100%, rgba(255,146,10,1)));
    background: -webkit-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
    background: -o-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
    background: -ms-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
    background: linear-gradient(to bottom, rgb(254, 170, 0) 0%, rgb(237, 142, 0) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#ffaf4b\', endColorstr=\'#ff920a\', GradientType=0 );
}
a {
    color: #D694A5;
}
a:hover, a:focus {
    color: #D56827;
}
.btn-primary {
    color: #ffffff;
    background-color: #82BB6F;
    border-color: #AB0938;
	
	background: rgba(166,0,55,1);
background: -moz-linear-gradient(top, rgba(166,0,55,1) 0%, rgba(204,63,63,1) 50%, rgba(166,0,55,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(166,0,55,1)), color-stop(50%, rgba(204,63,63,1)), color-stop(100%, rgba(166,0,55,1)));
background: -webkit-linear-gradient(top, rgba(166,0,55,1) 0%, rgba(204,63,63,1) 50%, rgba(166,0,55,1) 100%);
background: -o-linear-gradient(top, rgba(166,0,55,1) 0%, rgba(204,63,63,1) 50%, rgba(166,0,55,1) 100%);
background: -ms-linear-gradient(top, rgba(166,0,55,1) 0%, rgba(204,63,63,1) 50%, rgba(166,0,55,1) 100%);
background: linear-gradient(to bottom, rgba(166,0,55,1) 0%, rgba(204,63,63,1) 50%, rgba(166,0,55,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#a60037\', endColorstr=\'#a60037\', GradientType=0 );
-webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.btn-primary:hover {
    color: #ffffff;
    background-color: #93C383;
    border-color: #CB3E3F;
	
	background: rgba(204,63,63,1);
background: -moz-linear-gradient(top, rgba(204,63,63,1) 0%, rgba(166,0,55,1) 54%, rgba(204,63,63,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(204,63,63,1)), color-stop(54%, rgba(166,0,55,1)), color-stop(100%, rgba(204,63,63,1)));
background: -webkit-linear-gradient(top, rgba(204,63,63,1) 0%, rgba(166,0,55,1) 54%, rgba(204,63,63,1) 100%);
background: -o-linear-gradient(top, rgba(204,63,63,1) 0%, rgba(166,0,55,1) 54%, rgba(204,63,63,1) 100%);
background: -ms-linear-gradient(top, rgba(204,63,63,1) 0%, rgba(166,0,55,1) 54%, rgba(204,63,63,1) 100%);
background: linear-gradient(to bottom, rgba(204,63,63,1) 0%, rgba(166,0,55,1) 54%, rgba(204,63,63,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#cc3f3f\', endColorstr=\'#cc3f3f\', GradientType=0 );
-webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
a.link-effect:before {
    background-color: #CF90A5;
	}
	.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    background-color: #5c90d2;
}
.text-primary {
    color: #D86C24;
}
.text-info {
    color: #D86C24;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    background: rgba(241,231,103,1);
background: -moz-linear-gradient(top, rgba(241,231,103,1) 0%, rgba(254,182,69,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(241,231,103,1)), color-stop(100%, rgba(254,182,69,1)));
background: -webkit-linear-gradient(top, rgba(241,231,103,1) 0%, rgba(254,182,69,1) 100%);
background: -o-linear-gradient(top, rgba(241,231,103,1) 0%, rgba(254,182,69,1) 100%);
background: -ms-linear-gradient(top, rgba(241,231,103,1) 0%, rgba(254,182,69,1) 100%);
background: linear-gradient(to bottom, rgba(241,231,103,1) 0%, rgba(254,182,69,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#f1e767\', endColorstr=\'#feb645\', GradientType=0 );
}
		</style>';
		$statuus = '<span '.$styl.'><b>Участник</b></span>';
		if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus500" AND username = "'.$login.'" LIMIT 1'))) {
$statuus = '<span '.$styl.'><b>Начинающий</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus1500" AND username = "'.$login.'" LIMIT 1'))) {
$statuus = '<span '.$styl.'><b>Узнаваемый</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus3000" AND username = "'.$login.'" LIMIT 1'))) {
$statuus = '<span '.$styl.'><b>Значительный</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus5000" AND username = "'.$login.'" LIMIT 1'))) {
$statuus = '<span '.$styl.'><b>Уважаемый</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus20000" AND username = "'.$login.'" LIMIT 1'))) {
$statuus = '<span '.$styl.'><b>Менеджер</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus50000" AND username = "'.$login.'" LIMIT 1'))) {
$statuus = '<span '.$styl.'><b>Топ менеджер</b></span>';
}
function exchange_rate() {
  $url = 'http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';
  if($xml = @simplexml_load_file($url))
    foreach($xml->Cube->Cube->Cube as $rate)
      $rates[(string)$rate['currency']] = (float)$rate['rate'];
  return $rates ? $rates : FALSE;
}
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head> 
        <meta charset="windows-1251">

        <title>OMBRIX | Кабинет инвестора</title>

        <meta name="description" content="OMBRIX - Кабинет инвестора">
        <meta name="author" content="OMBRIX">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/favicon.ico">
        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="/assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="/assets/js/plugins/slick/slick-theme.min.css">
        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="/assets/css/oneui.css">

		<link id="orginal" href="/css/themes/eucalyptus-theme.css" rel="stylesheet">
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
		<?php print $stylprint;
		if(!$login) {
print "<script language=\"javascript\">top.location.href=\"/login/\";</script>";
}
		?>
		
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="side-header side-content">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <span>
                            <img class="img-avatar img-avatar32" src="<?echo $imga;?>" alt="">
                            <span class="font-w600 push-10-l" style="color: white;"><?echo $login;?></span>
                        </span>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content remove-padding-t">
                        <!-- Notifications -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Последние новости</h3>
                            </div>
                            <div class="block-content">
                                <!-- Activity List -->
                                <ul class="list list-activity">
                                    <li>
                                <!-- Вставить код новостей. Он особенно для тех, у кого медленный интернет и работает через мобильное устройство -->
			                        <hr>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <small><a href="/news">Смотреть подробнее...</a></small>
                                </div>
                                <!-- END Activity List -->
                            </div>
                        </div>
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <a class="h5 text-white" href="/lk">
                                <i class="text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide"><span <?php print $styl;?> class="h4 font-w600 sidebar-mini-hide">O</span>MBRIX</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li>
                                    <a class="active" href="/lk"><i class="fa fa-laptop"></i><span class="sidebar-mini-hide">Кабинет</span></a>
                                </li>
                                <li class="nav-main-heading"><span <?php print $styl;?> class="sidebar-mini-hide">Финансовый раздел</span></li>
                                <li>
                                    <a class="active" href="/confirms"><i class="fa fa-check-circle"></i><span class="sidebar-mini-hide">Подтверждения <?php if(mysql_num_rows(mysql_query("SELECT * FROM `confirm_pay` WHERE `status` = '0' and `usertoconf` = '".$login."'"))) { print '<span style="position: relative;color: #FFFFFF;font-weight: 600;top: -6px;'.$stymes.'padding: 0px 5px 0px 5px;border-radius: 10px;font-size: 11px;">'.mysql_num_rows(mysql_query("SELECT * FROM `confirm_pay` WHERE `status` = '0' and `usertoconf` = '".$login."'")).'</span>';}?></span></a>
                                </li>
								<li>
                                    <a class="active" href="/storage"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Хранение средств</span></a>
                                </li>
								<li>
                                    <a class="active" href="/deposit"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Открытие депозита</span></a>
                                </li>
								<li>
                                    <a class="active" href="/withdrawal"><i class="fa fa-minus-square"></i><span class="sidebar-mini-hide">Вывод средств</span></a>
                                </li>
                                <li class="nav-main-heading"><span <?php print $styl;?> class="sidebar-mini-hide">Персональный раздел</span></li>
								 <li>
                                    <a class="active" href="/profile"><i class="fa fa-cogs"></i><span class="sidebar-mini-hide">Настройка профиля</span></a>
                                </li>
								 <li>
                                    <a class="active" href="/ref"><i class="fa fa-users"></i><span class="sidebar-mini-hide">Мои партнёры</span></a>
                                </li>
                                <li class="nav-main-heading"><span <?php print $styl;?> class="sidebar-mini-hide">Инфо раздел</span></li>
								<li>
                                    <a class="active" href="/"><i class="fa fa-home"></i><span class="sidebar-mini-hide">На сайт</span></a>
                                </li>
                                 <li>
                                    <a class="active" href="/news"><i class="fa fa-newspaper-o"></i><span class="sidebar-mini-hide">Новости</span></a>
                                </li>
								 <li>
                                    <a class="active" href="/faq"><i class="si si-question"></i><span class="sidebar-mini-hide">F.A.Q.</span></a>
                                </li>
								 <li>
                                    <a class="active" href="/marketing"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Маркетинг</span></a>
                                </li>
								 <li>
                                    <a class="active" href="/promo"><i class="fa fa-bullhorn"></i><span class="sidebar-mini-hide">Реклама</span></a>
                                </li>
								<li>
                                    <a class="active" href="/answers/"><i class="fa fa-comment"></i><span class="sidebar-mini-hide">Отзывы</span></a>
                                </li>
								<li>
                                    <a class="active" href="/contacts/"><i class="si si-envelope-letter"></i><span class="sidebar-mini-hide">Обратная связь</span></a>
                                </li>
								<li>
                                    <a class="active" href="/messages/"><i class="fa fa-inbox"></i><span class="sidebar-mini-hide">Сообщения <?php if(mysql_num_rows(mysql_query("SELECT * FROM `messages` WHERE `to` = '".$login."' AND view_user = 0"))) { print '<span style="position: relative;color: #FFFFFF;font-weight: 600;top: -6px;'.$stymes.'padding: 0px 5px 0px 5px;border-radius: 10px;font-size: 11px;">'.mysql_num_rows(mysql_query("SELECT * FROM `messages` WHERE `to` = '".$login."' AND view_user = 0")).'</span>';}?></span></a>
                                </li>
                                <li class="nav-main-heading"><span style="color: #AF5D72;" class="sidebar-mini-hide">Выход из системы</span></li>
                                <li>
                                    <a class="active" href="/exit.php"><i class="si si-login"></i><span class="sidebar-mini-hide">Выход</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="<?echo $imga;?>" alt="Avatar">
								
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header"><?echo $login;?></li>
                                <li>
                                    <a tabindex="-1" href="/messages">
                                        <i class="si si-envelope-open pull-right"></i>
                                        <span class="badge badge-primary pull-right"><?php if(mysql_num_rows(mysql_query("SELECT * FROM `messages` WHERE `to` = '".$login."' AND view_user = 0"))) { print '<span style="position: relative;color: #ffffff;font-weight: 600;">'.mysql_num_rows(mysql_query("SELECT * FROM `messages` WHERE `to` = '".$login."' AND view_user = 0")).'</span>';}?></span>Сообщения 
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="/news">
                                        <i class="si si-feed pull-right"></i>
                                        <span class="badge badge-success pull-right"></span>Новости
                                    </a>
                                </li>
								<li>
                                    <a tabindex="-1" href="/ref">
                                        <i class="si si-users pull-right"></i>
                                        <span class="badge badge-success pull-right"></span>Партнёры
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Профиль</li>
                                <li>
                                    <a tabindex="-1" href="/profile">
                                        <i class="si si-settings pull-right"></i>Настройки
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="/exit.php">
                                        <i class="si si-logout pull-right"></i>Выход
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                            <i class="fa fa-tasks"></i>
                        </button>
                    </li>
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li>
                        <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                        <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </li>
                    
                </ul>
                <!-- END Header Navigation Left -->
            </header>
			<?
// Запись в переменную информацию о юзере с логином $login
$sql	= 'SELECT * FROM users WHERE login = "'.$login.'" LIMIT 1';
$rs		= mysql_query($sql);
$user		= mysql_fetch_array($rs);
?>
            <!-- END Header -->
			<!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style="
				    background: rgba(176,37,74,1);
    background: -moz-linear-gradient(top, rgba(176,37,74,1) 0%, rgba(255,146,10,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(176,37,74,1)), color-stop(100%, rgba(255,146,10,1)));
    background: -webkit-linear-gradient(top, rgba(176,37,74,1) 0%, rgba(255,146,10,1) 100%);
    background: -o-linear-gradient(top, rgba(176,37,74,1) 0%, rgba(255,146,10,1) 100%);
    background: -ms-linear-gradient(top, rgba(176,37,74,1) 0%, rgba(255,146,10,1) 100%);
    background: linear-gradient(to bottom, rgba(176,37,74,1) 0%, rgb(193, 61, 60) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b0254a', endColorstr='#ff920a', GradientType=0 );
				background-image: url('/assets/img/photos/photo3@2x.jpg');
				background-size: 100% auto;">
				 <div class="push-15-r pull-left animated fadeIn">
                            <img class="img-avatar img-avatar-thumb" src="<?echo $imga;?>" alt="">
                        </div>
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white"><?php print $login;?></h1>
						<h2 class="h5 text-white-op">Ваш статус: <?echo $statuus;?></h2>
                        <h2 class="h5 text-white-op">Баланс: <?php print '<span style="font-size:20px;">'.$pmbalance.'<span style="font-size:60%;">евро.</span></span>';?></h2>
						
                    </div>
                </div>
                <!-- END Page Header -->  
<script src="/assets/js/core/jquery.min.js"></script>
<?php if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {

		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	} ?>
</div>
        <!-- END Page Container -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Курс Евро</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="#">
                                        <div class="block-content text-white bg-info bg-gradientor">
                                            <i class="fa fa-usd fa-2x" style="color: #FFFFFF;"></i>
                                            <div class="font-w600 push-15-t push-15" style="width: 105px;margin-left: -14px;"><?php print 'EUR/USD: <br>€1 = $'.exchange_rate()['USD'];?></div>
                                        </div>
                                    </a>
                                </div>
								<div class="col-xs-6">
                                    <a class="block block-rounded" href="#">
                                        <div class="block-content text-white bg-info bg-gradientor">
                                            <i class="fa fa-gbp fa-2x" style="color: #FFFFFF;"></i>
                                            <div class="font-w600 push-15-t push-15" style="width: 105px;margin-left: -14px;"><?php print 'EUR/GBP: <br>€1 = &pound;'.exchange_rate()['GBP'];?></div>
                                        </div>
                                    </a>
                                </div>
								<div class="col-xs-6">
                                    <a class="block block-rounded" href="#">
                                        <div class="block-content text-white bg-info bg-gradientor">
                                            <i class="fa fa-rub fa-2x" style="color: #FFFFFF;"></i>
                                            <div class="font-w600 push-15-t push-15" style="width: 105px;margin-left: -14px;"><?php print 'EUR/RUB: <br>€1 = <i class="fa fa-rub"></i>'.exchange_rate()['RUB'];?></div>
                                        </div>
                                    </a>
                                </div>
								<div class="col-xs-6">
                                    <a class="block block-rounded" href="#">
                                        <div class="block-content text-white bg-info bg-gradientor">
                                            <i class="fa fa-inr fa-2x" style="color: #FFFFFF;"></i>
                                            <div class="font-w600 push-15-t push-15" style="width: 105px;margin-left: -14px;"><?php print 'EUR/INR: <br>€1 = <i class="fa fa-inr"></i>'.exchange_rate()['INR'];?></div>
                                        </div>
                                    </a>
                                </div>
								<div class="col-xs-6">
                                    <a class="block block-rounded" href="#">
                                        <div class="block-content text-white bg-info bg-gradientor">
                                            <i class="fa fa-yen fa-2x" style="color: #FFFFFF;"></i>
                                            <div class="font-w600 push-15-t push-15" style="width: 105px;margin-left: -14px;"><?php print 'EUR/JPY: <br>€1 = &yen;'.exchange_rate()['JPY'];?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="/assets/js/core/bootstrap.min.js"></script>
        <script src="/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="/assets/js/core/jquery.appear.min.js"></script>
        <script src="/assets/js/core/jquery.countTo.min.js"></script>
        <script src="/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="/assets/js/core/js.cookie.min.js"></script>
        <script src="/assets/js/app.js"></script>

        <!-- Page Plugins -->
        <script src="/assets/js/plugins/slick/slick.min.js"></script>
        <script src="/assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="/assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            $(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>