
<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">‘айт отключен и недоступен длЯ остальных пользователей!</p>';
}


#################################################
# Kubelance.ru
# Дизайн адаптировал  Zorro
# Вконтакте: https://vk.com/kub_elance
# Skype: zorro.red (Готов принять ваши заказы)
# ICQ: 602930609
# E-mail: lavric.10@mail.ru
#################################################
?>


  <!DOCTYPE html>
<HTML>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title><?php print $title; ?></title>
<meta name="keywords" content="<?php print $keywords; ?>" />
<meta name="description" content="<?php print $description; ?>" />
<link href="/files/styles.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="/files/scripts.js"></script>

<meta name="viewport" content="initial-scale=0.9, width=1145, maximum-scale=1">
<!--js -->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js">
</script>
<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.min.js">
</script>
<script type="text/javascript" src="/js/jquery.flexslider.js">
</script>
<link media="screen" href="/css/style.css" type="text/css" rel="stylesheet">
<style type="text/css">
.pageNoIndex_hilite {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite * {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite a {color:#000000 !important; background-color:#DAA520 !important; } .pageNoIndex_hilite img {background-color:#DAA520 !important; opacity: 0.7 !important; display: inline-block !important; } .pageNoFollow_hilite { color:#000000; text-decoration: line-through !important; } .pageNoFollow_hilite * { color:#000000; text-decoration: line-through !important; } .pageNoFollow_hilite img { opacity: 1.0 !important; display: inline-block !important; border: 1px dashed #000000 !important; text-decoration: line-through !important; } .rdstb_pageLink_hilite { border: 1px dashed #FE0808 !important; } .rdstb_pageLink_hilite * { border: 1px dashed #FE0808 !important; } .rdstb_pageLink_hilite img { opacity: 1.0 !important; display: inline-block !important; border: 1px dashed #FE0808 !important; } .rdstb_pageDeadLink_hilite { background-color:#FFFF00 !important; } .rdstb_pageDeadLink_hilite * { background-color:#FFFF00 !important; } .rdstb_pageDeadLink_hilite img { opacity: 0.7 !important; display: inline-block !important; background-color:#FFFF00 !important; }
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







</head>
<body contenteditable="false" style="overflow: auto;">
<div style="opacity: 0; display: none;" class="load" id="loader-wrapper">
<div id="loader">
<span>
<i>
<b>
</b>
</i>
</span>
</div>

</div>
<div id="site">
<div class="header">
<div class="wfix wf">
<div class="logobg">
<a href="/" class="logo">
ZC
</a>
</div>
<div class="menutop">
<div class="mm">
<ul>
<li>
<a class="" href="/">
Главная
</a>
</li>
<li>
<a class="" href="/about">
О компании
</a>
</li>
<li>
<a class="" href="/news">
Новости
</a>
</li>
<li>
<a class="" href="/faq">
FAQ
</a>
</li>
<li>
<a class="" href="/contacts">
Контакты
</a>
</li>
</ul>
<div class="clr">
</div>
</div>

<div class="clr">
</div>
</div>
<div class="userpanel">
<div class="cct">
<div class="c">
<span>
8-800-100-81-73
</span>
info@zeppelin-cars.com
</div>
<div class="m">
<span>
123317, Москва
</span>
Пресненская наб., дом 10
</div>
<div class="clr">
</div>
</div>
<div class="clr">
</div>
</div>


<?php

if(!$login) {
?>

	<div class="loginbg">
<ul>
<li class="active">
<div>
<a class="lg" href="/login">
<span>
<span class="p">
авторизация
</span>
в системе
</span>
</a>
</div>
</li>
<li>
<div>
<a class="reg" href="/registration">
<span>
<span class="p">
регистрация
</span>
в системе
</span>
</a>
</div>
</li>
</ul>
</div>
<?php
} else {

?>

<div class="loginbg">
<ul>
<li class="active">
<div>
<a class="lg" href="/enter">
<span>
<span class="p">
Панель
</span>
пользователя
</span>
</a>
</div>
</li>
<li class="">
<div>
<a class="exit" href="/exit.php">
<span>
<span class="p">
Выход
</span>
из системы
</span>
</a>
</div>
</li>
</ul>
</div>


<?php

}

?>




<div class="clr">
</div>
</div>
<!--slider-->
<div class="slidertw">
<div class="flexslider">
<div style="overflow: hidden; position: relative;" class="flex-viewport">
<ul style="width: 1400%; transition-duration: 0s; transform: translate3d(-2686px, 0px, 0px);" class="slides">
<li style="width: 1343px; float: left; display: block;" aria-hidden="true" class="clone">
<img draggable="false" src="/images/2.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Ваш комфорт и надежность вместе с ZEPPELIN CARS
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
Если вы стремитесь к бескомпромиссному совершенству: высшему качеству, подлинной красоте, бесподобному искусству исполнения, деликатной, но уверенной демонстрации индивидуальности - наши автомобили Вам в этом помогут.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
Заказать автомобиль
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;" class="">
<img draggable="false" src="/images/1.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Бизнес в Дубае с VIP комфортом
</div>
<div style="margin-left: 0px;" class="lineblack">
Деловые зарубежные поездки являются неотъемлемой частью в жизни успешного бизнесмена. Они отнимают много времени, но не должны утомлять. Именно поэтому аренда авто бизнес класса с личным водителем – доставит Вам удовольствие, поднимет Ваш престиж перед партнерами и клиентами. Вы будете чувствовать себя уверенно в чужой стране, как у себя дома! Не отказывайтесь от привычного комфорта заграницей!
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
Заказать автомобиль
</a>
</div>
</div>
</div>
</div>
</li>
<li class="flex-active-slide" style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images/4.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Надежность и комфорт
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
ZEPPELIN CARS – команда профессионалов. Предоставляем услуги по аренде авто премиум класса на высшем уровне. Весь автопарк застрахован, индивидуальный подход к каждому, отсутствие скрытых комиссий и платежей.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
Заказать автомобиль
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images/5.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Rolls-Royce – позволительная роскошь
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
Вы готовитесь к важной деловой встрече в Дубае? Позаботьтесь о своем имидже. Встречают «по одежке», и Rolls-Royce – расскажет о Вас намного больше, чем цифры в презентации.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
Заказать автомобиль
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images/6.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Ваши деньги работают?
</div>
<div style="margin-left: 0px;" class="lineblack">
А у наших инвесторов – да! Минимальная прибыльность инвестиций в проект ZEPPELIN CARS составляет 7% в месяц. Все инвестиции надежно застрахованы от любых форс-мажорных ситуаций. Уникальный алгоритм работы денег в проекте является наиболее прибыльным на сегодняшний день.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/registration">
Стать инвестором
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;">
<img draggable="false" src="/images/2.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Ваш комфорт и надежность вместе с ZEPPELIN CARS
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
Если вы стремитесь к бескомпромиссному совершенству: высшему качеству, подлинной красоте, бесподобному искусству исполнения, деликатной, но уверенной демонстрации индивидуальности - наши автомобили Вам в этом помогут.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
Заказать автомобиль
</a>
</div>
</div>
</div>
</div>
</li>
<li style="width: 1343px; float: left; display: block;" aria-hidden="true" class="clone">
<img draggable="false" src="/images/1.jpg">
<div class="tt">
<div class="wfix">
<div class="text">
<div style="margin-right: 0px;" class="linered">
Бизнес в Дубае с VIP комфортом
</div>
<div style="margin-left: 0px;" class="lineblack">
Деловые зарубежные поездки являются неотъемлемой частью в жизни успешного бизнесмена. Они отнимают много времени, но не должны утомлять. Именно поэтому аренда авто бизнес класса с личным водителем – доставит Вам удовольствие, поднимет Ваш престиж перед партнерами и клиентами. Вы будете чувствовать себя уверенно в чужой стране, как у себя дома! Не отказывайтесь от привычного комфорта заграницей!
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
Заказать автомобиль
</a>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
<ol class="flex-control-nav flex-control-paging">
<li>
<a class="">
1
</a>
</li>
<li>
<a class="flex-active">
2
</a>
</li>
<li>
<a>
3
</a>
</li>
<li>
<a>
4
</a>
</li>
<li>
<a>
5
</a>
</li>
</ol>
<ul class="flex-direction-nav">
<li class="flex-nav-prev">
<a class="flex-prev" href="#">
Previous
</a>
</li>
<li class="flex-nav-next">
<a class="flex-next" href="#">
Next
</a>
</li>
</ul>
</div>
</div>
<!--/slider-->
</div>
<div class="prem">
<div class="wfix">
<ul>
<li class="i1 act">
<div class="nm">
VIP обслуживание
</div>
<div class="txt">
Для Вас безупречный сервис в комфортабельном офисе в Москве в деловом центре «Москва Сити»
</div>
</li>
<li class="i2 act">
<div class="nm">
ЗАЩИТА ВАШЕй ИНФОРМАЦИИ
</div>
<div class="txt">
Сайт защищен SSL-сертификатом расширенной проверки (Extended Validation) - сертификатом наивысшего уровня безопасности
</div>
</li>
<li class="i3 act">
<div class="nm">
техническая поддержка
</div>
<div class="txt">
Для вас работает круглосуточная техническая поддержка, обеспечивающая первоклассный сервис
</div>
</li>
</ul>
<div class="clr">
</div>
</div>
</div>
<!--cnt-->
<div class="cnt-page">
<div class="page auto wpage wfix">
<div class="titlew">
<span class="first">
<span>
ZEPPELIN
</span>
CARS – аренда элитных автомобилей
</span>
</div>
<div class="text">
<b>
Как мы работаем:
</b>
<br>
1. Оставьте заявку на бронирование автомобиля;
<br>
2. С Вами свяжется Ваш личный менеджер;
<br>
3. Оплата и договор;
<br>
4. Выбранный автомобиль будет доставлен по указанному Вами адресу.
</div>
<div class="left">
<div onclick="pay('t1')" class="au active t1">
<span>
Rolls Royce
</span>
Ghost
</div>
<div onclick="pay('t2')" class="au t2">
<span>
Rolls Royce
</span>
Drop Head
</div>
<div onclick="pay('t3')" class="au t3">
<span>
Bentley
</span>
GT Convertible
</div>
<div onclick="pay('t4')" class="au t4">
<span>
Mercedes - Benz
</span>
G63 AMG
</div>
<div onclick="pay('t5')" class="au t5">
<span>
Porsche
</span>
Cayenne GTS
</div>
<div onclick="pay('t6')" class="au t6">
<span>
Range Rover
</span>
Vogue
</div>
<div onclick="pay('t7')" class="au t7">
<span>
Rolls Royce
</span>
Wraith
</div>
<div onclick="pay('t8')" class="au t8">
<span>
Mercedes -
</span>
AMG GT S
</div>
</div>
<div class="right">
<!--1-->
<div style="display: block;" id="t1" class="car">
<div class="name">
<span>
Rolls Royce
</span>
Ghost
</div>
<div class="harx">
Год выпуска: 2014 | Цвет: белый
</div>
<div class="text">
Безусловно, среди всех автомобилей представительского класса, автомобили Rolls Royce, являются наиболее престижными. Выпускаются только под заказ и ограниченной серией. Если Вы думали, что передвижение на автомобиле Rolls Royce доступно только избранным, то теперь, почувствовать легендарную британскую мощь можете и Вы. Обратившись в компанию ZEPPELIN CARS, Вы сможете арендовать Rolls Royce Ghost на выгодных для Вас условиях. Цена аренды автомобиля приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
1600
</td>
<td>
1800
</td>
<td>
1500
</td>
<td>
1700
</td>
<td>
3000
</td>
</tr>
</tbody>
</table>
</div>
<!--/1-->
<!--2-->
<div style="display: none;" id="t2" class="car">
<div class="name">
<span>
Rolls Royce
</span>
Drop Head
</div>
<div class="harx">
Год выпуска: 2014 | Цвет: черный
</div>
<div class="text">
Почувствовать невероятную мощь и динамику автомобиля, вы сможете, арендовав четырехместный Rolls Royce Drop Head. Как и все модели автомобилей Rolls Royce, эта модель является сочетанием безопасности и роскоши. В этой машине все просчитано до мелочей - большой диаметр колес, вместительный и комфортабельный салон, радиатор, огражденный специальной решеткой. В общем, данный автомобиль, был произведен, основываясь на всех вышеперечисленных принципах. Компания ZEPPELIN CARS предлагает Вам аренду Rolls Royce Drop Head по привлекательной цене. Цена аренды автомобиля приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
2500
</td>
<td>
2800
</td>
<td>
2400
</td>
<td>
2700
</td>
<td>
3000
</td>
</tr>
</tbody>
</table>
</div>
<!--/2-->
<!--3-->
<div style="display: none;" id="t3" class="car">
<div class="name">
<span>
Bentley
</span>
GT Convertible
</div>
<div class="harx">
Год выпуска: 2014 | Цвет: серый металлик
</div>
<div class="text">
Несмотря на заоблачную цену, которую придется заплатить при покупке Bentley GT Convertible, цена аренды данного автомобиля доступна для каждого. Уникальный запоминающийся дизайн автомобиля, обтекающие линии и высокая скорость движения, безусловно, помогут Вам не остаться незамеченным. Почувствовать рёв мотора, комфорт и роскошь легендарного спортивного автомобиля, Вы можете, обратившись в компанию ZEPPELIN CARS, где Вы сможете арендовать Bentley GT Convertible по невероятно привлекательной цене. Цена аренды автомобиля приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
1400
</td>
<td>
1500
</td>
<td>
1300
</td>
<td>
1400
</td>
<td>
3000
</td>
</tr>
</tbody>
</table>
</div>
<!--/3-->
<!--4-->
<div style="display: none;" id="t4" class="car">
<div class="name">
<span>
Mercedes - Benz
</span>
G63 AMG
</div>
<div class="harx">
Год выпуска: 2014 | Цвет: белый
</div>
<div class="text">
Ощутить всю мощь легендарного немецкого внедорожника Mercedes-Benz G63 AMG, Вы можете, просто арендовав его в компании ZEPPELIN CARS. Mercedes-Benz G63 AMG, автомобиль, который сочетает в себе сразу два качества, это мощный джип и автомобиль представительского класса. Благодаря четким агрессивным линиям и невероятно стильному дизайну автомобиля, окружающим сразу станет понятно, что Вы серьезный и целеустремленный человек. Цена аренды автомобиля Mercedes-Benz G63 AMG приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
600
</td>
<td>
700
</td>
<td>
570
</td>
<td>
660
</td>
<td>
2000
</td>
</tr>
</tbody>
</table>
</div>
<!--/4-->
<!--5-->
<div style="display: none;" id="t5" class="car">
<div class="name">
<span>
Porsche
</span>
Cayenne GTS
</div>
<div class="harx">
Год выпуска: 2014 | Цвет: белый
</div>
<div class="text">
Любой человек, даже не автолюбитель, на вопрос, какая марка автомобиля у него ассоциируется с большой скоростью, ответит Вам, что это «Порш». Ведь и правда, «Порше», одни из самых лучших гоночных автомобилей, а суперкар Porsche Cayenne GTS объединил в себе не только скоростные качества, но также и стильный современный дизайн, и комфорт передвижения. Данный автомобиль прекрасно подойдет Вам как для передвижения по городу, так и за его пределами. Арендовать Porsche Cayenne GTS, Вы можете, обратившись в компанию ZEPPELIN CARS. Цена аренды автомобиля приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
400
</td>
<td>
450
</td>
<td>
370
</td>
<td>
410
</td>
<td>
2000
</td>
</tr>
</tbody>
</table>
</div>
<!--/5-->
<!--6-->
<div style="display: none;" id="t6" class="car">
<div class="name">
<span>
Range Rover
</span>
Vogue
</div>
<div class="harx">
Год выпуска: 2014 | Цвет: белый
</div>
<div class="text">
Появление Range Rover Vogue заставила буквально всех изменить свое представление о внедорожниках. Это яркий пример, каким должен быть надежный и в тоже время мощный автомобиль. Ничего лишне, четки лини делают Range Rover Vogue невероятно стильным, а его конструкция, является просто революционной с точки зрения инженерии. Если Вы всегда хотели почувствовать себя водителем такого автомобиля, компания ZEPPELIN CARS предлагает Вам такую возможность. Цена аренды автомобиля Range Rover Vogue приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
600
</td>
<td>
700
</td>
<td>
570
</td>
<td>
660
</td>
<td>
2000
</td>
</tr>
</tbody>
</table>
</div>
<!--/6-->
<!--7-->
<div style="display: none;" id="t7" class="car">
<div class="name">
<span>
Rolls Royce
</span>
Wraith
</div>
<div class="harx">
Год выпуска: 2014 | Цвет: белый
</div>
<div class="text">
Если Вы хотите на себе почувствовать, что такое 740 лошадиных сил, тогда добро пожаловать за руль легендарного британского автомобиля Rolls Royce Wraith. Уже само имя Rolls Royce, говорит само за себя. Это невероятно мощный и стильный автомобиль представительского класса. Ревущий мотор, роскошь, мощь, все это Вы сможете ощутить сев за руль Rolls Royce Wraith, который Вы можете арендовать в компании ZEPPELIN CARS по невероятно привлекательной цене. Цена аренды автомобиля приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
1600
</td>
<td>
1700
</td>
<td>
1550
</td>
<td>
1650
</td>
<td>
3000
</td>
</tr>
</tbody>
</table>
</div>
<!--/7-->
<!--8-->
<div style="display: none;" id="t8" class="car">
<div class="name">
<span>
Mercedes -
</span>
AMG GT S
</div>
<div class="harx">
Год выпуска: 2015 | Цвет: белый
</div>
<div class="text">
Новейшее детище ведущего немецкого концерна, а именно Mercedes-AMG GT S. Данный автомобиль невозможно спутать ни с каким иным. Мощь 510 сильного V образного 8 цилиндрового двигателя, обрамленная в спортивный кузов и эргономичный салон позволит открыть новые горизонты наслаждения от езды даже самым предвзятым автовладельцам и ценителям. Обратившись в компанию ZEPPELIN CARS, Вы сможете арендовать Mercedes-AMG GT S на выгодных для Вас условиях. Цена аренды автомобиля приведена в таблице ниже (цена указана в долларах за одни сутки).
</div>
<table>
<tbody>
<tr class="top">
<td colspan="2">
Аренда до 7-ми дней
</td>
<td colspan="2">
Аренда от 7-ми дней
</td>
<td rowspan="2">
Залог
</td>
</tr>
<tr class="head">
<td>
Понедельник - Четверг
</td>
<td style="border-right:1px solid #8c8c8c;">
Пятница - Воскресенье
</td>
<td>
Понедельник - Четверг
</td>
<td>
Пятница - Воскресенье
</td>
</tr>
<tr class="content">
<td>
1200
</td>
<td>
1300
</td>
<td>
1150
</td>
<td>
1250
</td>
<td>
3000
</td>
</tr>
</tbody>
</table>
</div>
<!--/8-->
</div>
<div class="clr">
</div>


<div class="zakazauto">

 <center><a href="/contacts" class="button"/>Заказать авто  </a></center>


</div>
<script>
$('.right .car').hide();$('.right #t1').show();$( ".left div" ).click(function() {$('.left div').removeClass('active');$(this).addClass('active');});function pay(nm) {$('.right .car').hide();$("#"+nm).show();}
</script>
<div class="clr">
</div>
</div>
<!--/cnt-->
<!--footer-->
<div class="footer">
<div class="payment">
<div>
</div>
</div>
<div class="ff">
<div class="wfix">
<div class="menumm">
<ul>
<li>
<a href="/about">
О компании
</a>
</li>
<li>
<a href="/rules">
Договор оферты
</a>
</li>
<li>
<a href="/reglament">
Регламент платежей
</a>
</li>
<li>
<a href="/privacypolicy">
Политика конфиденциальности
</a>
</li>
</ul>
<ul>
<li>
<a href="/news">
Новости
</a>
</li>
<li>
<a href="/faq">
Вопрос - Ответ
</a>
</li>
<li>
<a href="/partners">
Партнерам
</a>
</li>
<li>
<a href="/order">
Заказ автомобиля
</a>
</li>
</ul>
<div class="clr">
</div>
</div>
<div class="kontakt">
<div class="phone">
Телефон в Москве: 8-800-100-81-73
</div>
<div class="phone">
Телефон в ОАЭ: +971800035703995
</div>
<div class="email">
Email:
<a href="mailto:info@zeppelin-cars.com">
info@zeppelin-cars.com
</a>
</div>
<div class="skype">
Skype:
<a href="skype:zeppelin.cars?add">
zeppelin.cars
</a>
</div>
</div>
<div class="clr">
</div>
</div>
</div>
<div class="copyright">
<div class="wfix">
<div class="cc">
zeppelin-cars.com © COPYRIGHT 2015
</div>
<div class="social">
<a class="fb" target="_blank" href="https://www.facebook.com/pages/Zeppelin-Cars/765692160195395">
</a>
<a class="vk" target="_blank" href="https://vk.com/zeppelincars">
</a>
<div class="clr">
</div>
</div>
<div class="clr">
</div>
</div>
</div>
</div>
<!--/footer-->
</div>
<script type="text/javascript" src="/js/calc.js">
</script>
<script type="text/javascript" src="/js/animate.js">
</script>
</body>
</html>