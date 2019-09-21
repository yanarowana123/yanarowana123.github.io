
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
<div class="faq wpage wfix">
<div class="titlew">
<span class="first">
<span>
Вопрос -
</span>
Ответ
</span>
</div>
<div class="catname">
<span>
Общие
</span>
вопросы
</div>
<ul>
<li>
<div class="name">
Как я могу стать инвестором?
</div>
<div class="text">
Этот процесс состоит из нескольких шагов:
<br>
Регистрация на проекте и заполнение всех необходимых данных о себе.
<br>
Пополнение внутреннего счета на удобную для Вас сумму через предпочитаемую платежную систему.
<br>
Инвестирование введенных средств в подходящий Вам инвестиционный план.
</div>
</li>
<li>
<div class="name">
Сколько я буду получать от инвестиций?
</div>
<div class="text">
Прибыль инвестора зависит от выбранного им инвестиционного плана и составляет от 7% до 13% в месяц.
</div>
</li>
<li>
<div class="name">
Как Вы получаете прибыль?
</div>
<div class="text">
Мы занимаемся предоставлением в аренду элитных автомобилей в Дубае. Собственный алгоритм распределения капитала и обширная клиентская база делают возможной привлечение инвестиционных средств и получение прибыли, выгодной для компании и для инвесторов.
</div>
</li>
<li>
<div class="name">
Как происходит начисление прибыли?
</div>
<div class="text">
Проценты на инвестиции начисляются ежедневно и после начисления они сразу доступны для оперирования инвестору.
</div>
</li>
</ul>
<div class="catname">
<span>
Открытие
</span>
счета
</div>
<ul>
<li>
<div class="name">
Обязательно ли указывать свои реальные данные и информацию о себе?
</div>
<div class="text">
Да. В некоторых случаях необходимо подтверждение введенных данных, для произведения выплаты ли в другой ситуации. Если данные окажутся ложными счет может быть заморожен.
</div>
</li>
<li>
<div class="name">
Я попал в проект по партнерской ссылке, а в поле “партнер” пусто, что делать?
</div>
<div class="text">
Обратитесь в службу поддержки до момента выбора инвестиционного плана и менеджер внесет пригласившего вас участника.
</div>
</li>
</ul>
<div class="catname">
<span>
Ввод и вывод
</span>
средств
</div>
<ul>
<li>
<div class="name">
В какие сроки производится зачисление средств на мой счет?
</div>
<div class="text">
Зачисление производится в течение 2 рабочих дней с момента поступления средств на счета компании.
</div>
</li>
<li>
<div class="name">
С какими платежными системами Вы работаете?
</div>
<div class="text">
Все системы, с которыми мы сотрудничаем представлены на главной странице сайта компании.
</div>
</li>
<li>
<div class="name">
Через какие банки я могу сделать перевод средств?
</div>
<div class="text">
Список всех банков-партнеров предоставлен на сайте компании
</div>
</li>
<li>
<div class="name">
Какая минимальная сумма пополнения через электронные системы?
</div>
<div class="text">
Минимальная сумма пополнения 1$
</div>
</li>
<li>
<div class="name">
Какая минимальная сумма пополнения через банковский перевод?
</div>
<div class="text">
Минимальная сумма пополнения банковским переводом 1$
</div>
</li>
<li>
<div class="name">
Могу ли я сделать перевод от своего родственника?
</div>
<div class="text">
Нет, переводы от третьих лиц не принимаются. Для такого пополнения нужно открыть новый счет.
</div>
</li>
<li>
<div class="name">
Как выводятся средства из проекта?
</div>
<div class="text">
Оформляется заявка на вывод нужной суммы в ЛК. В течение 48 часов (в рабочие дни) она обрабатывается и средства поступают на счет клиента.
</div>
</li>
</ul>
<div class="catname">
<span>
Партнерская
</span>
программа
</div>
<ul>
<li>
<div class="name">
Какие условия вашей партнерской программы?
</div>
<div class="text">
Детальная информация о программе доступна в соответствующем разделе сайта
</div>
</li>
<li>
<div class="name">
Где я могу получить реферальную ссылку?
</div>
<div class="text">
Ссылка будет доступна в личном кабинете после регистрации
</div>
</li>
<li>
<div class="name">
Могу ли я стать партнером проекта без депозита?
</div>
<div class="text">
Конечно, однако, чтобы стать представителем и получать большую прибыль собственный депозит обязателен.
</div>
</li>
</ul>
<div class="catname">
<span>
Безопасность
</span>
проекта
</div>
<ul>
<li>
<div class="name">
Чем Вы обеспечиваете безопасность проекта?
</div>
<div class="text">
Нами получен сертификат безопасности Comodo. Также эта компания обеспечивает высокоуровневое шифрование всех данных проекта.
</div>
</li>
<li>
<div class="name">
Могу ли я потерять инвестированные средства?
</div>
<div class="text">
Это исключено, ввиду того, что все средства сразу начинают работать по прибыльному алгоритму.
</div>
</li>
</ul>
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