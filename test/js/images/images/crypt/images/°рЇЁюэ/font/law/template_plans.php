
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
<div class="page wpage wfix">
<div class="titlew">
<span class="first">
<span>
Инвестиционная программа
</span>
от ZEPPELIN CARS
</span>
</div>
<div class="texting">
Для Вашего удобства нами был разработан ряд инвестиционных программ. Каждая программа отличается минимальной суммой вклада, сроком инвестирования, а также возможностью управлять начисленными в рамках программы средствами.
<br>
<br>
<div class="table-cc ttb">
<table>
<tbody>
<tr class="title">
<td>
</td>
<td>
Стартовый
</td>
<td>
Удобный
</td>
<td>
Доходный
</td>
<td>
Максимальный
</td>
</tr>
<tr>
<td>
Депозит
</td>
<td>
от 100 до 500 долларов США
</td>
<td>
от 500 до 5000 долларов США
</td>
<td>
от 1000 долларов США
</td>
<td>
от 500 долларов США
</td>
</tr>
<tr>
<td>
Сроки инвестиционной программы
</td>
<td>
30 календарных дней
</td>
<td>
90 календарных дней
</td>
<td>
180 календарных дней
</td>
<td>
360 календарных дней
</td>
</tr>
<tr>
<td>
Процентная ставка
</td>
<td>
7% в месяц
</td>
<td>
8% в месяц
</td>
<td>
10% в месяц
</td>
<td>
13% в месяц
</td>
</tr>
<tr>
<td>
Начисление процентов по вкладу
</td>
<td>
ежесуточное
</td>
<td>
ежесуточное
</td>
<td>
ежесуточное
</td>
<td>
ежесуточное
</td>
</tr>
<tr>
<td>
Возможность ежесуточного снятия процентов
</td>
<td>
есть
</td>
<td>
есть
</td>
<td>
есть
</td>
<td>
есть
</td>
</tr>
<tr>
<td>
Разморозка депозита в конце срока
</td>
<td>
есть
</td>
<td>
есть
</td>
<td>
есть
</td>
<td>
есть
</td>
</tr>
</tbody>
</table>
</div>
<br>
<br>
<u>
Обратите внимание!
</u>
<br>
Рентабельность инвестиций напрямую зависит от выбранного тарифного плана.
<br>
Получите максимальную выгоду в тарифном плане «Максимальный» -
<br>
•&nbsp;Максимальная процентная ставка
<br>
•&nbsp;Максимальный срок инвестиционной программы
<br>
<h3>
Инвестиционная программа.
</h3>
<u>
Прозрачность работы – залог получения гарантированной прибыли
</u>
<br>
1.&nbsp;Осуществляется покупка автомобиля возрастом до 1 года.
<br>
Преимущества:
<br>
•&nbsp;Цены на арестованные авто, конфискованные по кредиту, автомобили с аукциона – достигают ниже салонной цены на 35%;
<br>
•&nbsp;Автомобили в идеальном состоянии не требующие дополнительных вложений на ремонт, перекраску и прочее. Все автомобили находятся на гарантии у официального дилера.
<br>
<br>
2.&nbsp;Постановка автомобиля на учет, прохождение технического осмотра, страхование его по максимальному пакету и выставление авто в работу.
<br>
3.&nbsp;Стоимость суточной аренды наших автомобилей составляет от 400 usd до 2800 usd, что при среднемесячной загрузке в 27 – 28 дней переводит его в прибыльность уже на 7 месяце работы.
<br>
4.&nbsp;После 2 лет эксплуатации автомобиль продается, как б/у по цене вторичного рынка, которая составляет цену нового арестованного авто.
<br>
Выгода очевидна, но если у Вас есть сомнения, приведем наглядный пример.
<br>
<h3>
Схема на примере.
</h3>
Покупка автомобиля BMW X3 2012 года выпуска, все цены указаны в рублях, для упрощения в подсчетах.&gt; 10 инвесторов, которые инвестировали по 130 000 рублей
<br>
&gt; общая сумма инвестиций с 10 инвесторов составила 1300000 рублей
<br>
1.&nbsp;На эти средства был приобретен арестованный BMW X3 2012 года выпуска за 1 200 000 рублей;
<br>
2.&nbsp;Оформление всех бумаг и страховые затраты составляют примерно 100 000 рублей, после чего автомобиль начал работать;
<br>
3.&nbsp;Суточная аренда BMW X3 составляет 8 000 рублей, что за 27 дней работы принесло 216 000 рублей;
<br>
4.&nbsp;1 300 000 / 216 000 = 6 месяцев окупаемости. Далее, еще 1,5 года авто приносило чистый доход;
<br>
5.&nbsp;После 2 лет эксплуатации автомобиль был продан за среднюю по рынку цену в 1 200 000 рублей, чем практически полностью вернул все вложенные на покупку средства.
<br>
<br>
При среднем показателе процентной ставки в 10% ежемесячный доход компании с данного автомобиля составил 86000 рублей, доход инвесторов 130000 рублей.
<br>
За 2 года работы при инвестированных 1 300 000 рублей получился общий доход в размере 6 384 000 рублей.Доля инвесторов за 24 месяца инвестирования составила не менее 3 120 000 рублей, при условии полного возврата первоначально инвестированных средств.
<br>
Подведем итоги.
<br>
<br>
<u>
Ваши преимущества
</u>
<br>
•&nbsp;Участие с любым достатком. Ранее, подобный бизнес могли открыть только очень состоятельные люди ввиду высоких стартовых затрат. Наши инвестиционные планы позволяют принимать участие в развитии этого бизнеса людям, с любым достатком, объединенных желанием увеличить свои доходы;
<br>
•&nbsp;Минимальная прибыльность инвестиций в проект составляет 7% в месяц;
<br>
•&nbsp;Участие без риска;
<br>
•&nbsp;Быстрота окупаемости и вложений.
<br>
Для достижения прибыли инвестиционного проекта мы планируем развитие деятельности в следующих направлениях:<br>
•&nbsp;Приобретение подержанных авто, их восстановление и дальнейшая продажа;
<br>
•&nbsp;Приобретение новых автомобилей «под заказ» клиента;
<br>
•&nbsp;Прокат автомобилей без водителя;
<br>
•&nbsp;Дополнительные услуги: профессиональные водители, встреча в аэропорту, личная охранаСоздавайте финансовые цели и достигайте их вместе с ZEPPELIN CARS
<br>
<br>
<i>
ZEPPELIN CARS - сочетание предоставления услуг и инвестиционной программы в развитие данного сегмента на высшем уровне.
</i>
</div>
</div>
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