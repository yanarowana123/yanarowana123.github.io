
<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">���� �������� � ���������� ��� ��������� �������������!</p>';
}


#################################################
# Kubelance.ru
# ������ �����������  Zorro
# ���������: https://vk.com/kub_elance
# Skype: zorro.red (����� ������� ���� ������)
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
�������
</a>
</li>
<li>
<a class="" href="/about">
� ��������
</a>
</li>
<li>
<a class="" href="/news">
�������
</a>
</li>
<li>
<a class="" href="/faq">
FAQ
</a>
</li>
<li>
<a class="" href="/contacts">
��������
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
123317, ������
</span>
����������� ���., ��� 10
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
�����������
</span>
� �������
</span>
</a>
</div>
</li>
<li>
<div>
<a class="reg" href="/registration">
<span>
<span class="p">
�����������
</span>
� �������
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
������
</span>
������������
</span>
</a>
</div>
</li>
<li class="">
<div>
<a class="exit" href="/exit.php">
<span>
<span class="p">
�����
</span>
�� �������
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
��� ������� � ���������� ������ � ZEPPELIN CARS
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
���� �� ���������� � ����������������� ������������: ������� ��������, ��������� �������, ������������ ��������� ����������, ����������, �� ��������� ������������ ���������������� - ���� ���������� ��� � ���� �������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
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
������ � ����� � VIP ���������
</div>
<div style="margin-left: 0px;" class="lineblack">
������� ���������� ������� �������� ������������ ������ � ����� ��������� ����������. ��� �������� ����� �������, �� �� ������ ��������. ������ ������� ������ ���� ������ ������ � ������ ��������� � �������� ��� ������������, �������� ��� ������� ����� ���������� � ���������. �� ������ ����������� ���� �������� � ����� ������, ��� � ���� ����! �� ������������� �� ���������� �������� ����������!
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
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
���������� � �������
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
ZEPPELIN CARS � ������� ��������������. ������������� ������ �� ������ ���� ������� ������ �� ������ ������. ���� �������� �����������, �������������� ������ � �������, ���������� ������� �������� � ��������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
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
Rolls-Royce � �������������� �������
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
�� ���������� � ������ ������� ������� � �����? ������������ � ����� ������. ��������� ��� ������, � Rolls-Royce � ��������� � ��� ������� ������, ��� ����� � �����������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
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
���� ������ ��������?
</div>
<div style="margin-left: 0px;" class="lineblack">
� � ����� ���������� � ��! ����������� ������������ ���������� � ������ ZEPPELIN CARS ���������� 7% � �����. ��� ���������� ������� ������������ �� ����� ����-�������� ��������. ���������� �������� ������ ����� � ������� �������� �������� ���������� �� ����������� ����.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/registration">
����� ����������
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
��� ������� � ���������� ������ � ZEPPELIN CARS
</div>
<div style="margin-left: 0px;" class="lineblack">
<br>
���� �� ���������� � ����������������� ������������: ������� ��������, ��������� �������, ������������ ��������� ����������, ����������, �� ��������� ������������ ���������������� - ���� ���������� ��� � ���� �������.
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
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
������ � ����� � VIP ���������
</div>
<div style="margin-left: 0px;" class="lineblack">
������� ���������� ������� �������� ������������ ������ � ����� ��������� ����������. ��� �������� ����� �������, �� �� ������ ��������. ������ ������� ������ ���� ������ ������ � ������ ��������� � �������� ��� ������������, �������� ��� ������� ����� ���������� � ���������. �� ������ ����������� ���� �������� � ����� ������, ��� � ���� ����! �� ������������� �� ���������� �������� ����������!
</div>
<div style="margin-right: 0px;" class="order">
<a href="/order">
�������� ����������
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
VIP ������������
</div>
<div class="txt">
��� ��� ����������� ������ � ��������������� ����� � ������ � ������� ������ ������� ����
</div>
</li>
<li class="i2 act">
<div class="nm">
������ ����� ����������
</div>
<div class="txt">
���� ������� SSL-������������ ����������� �������� (Extended Validation) - ������������ ���������� ������ ������������
</div>
</li>
<li class="i3 act">
<div class="nm">
����������� ���������
</div>
<div class="txt">
��� ��� �������� �������������� ����������� ���������, �������������� ������������� ������
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
�����������
</span>
���������
</span>
</div>
<div class="blob">
<div class="left">
����������� ���������
<br>
��� ������� ����������
<span class="i1">
2%
</span>
<span class="i2">
1%
</span>
<span class="i3">
4%
</span>
</div>
<div class="right">
����������� ���������
<br>
��� ��������������
<span class="i1">
3%
</span>
<span class="i2">
2%
</span>
<span class="i3">
6%
</span>
</div>
<div class="clr">
</div>
</div>
<div class="texting">
<span>
����������� ��������� �������� ZEPPELIN CARS ����� ��������� ������������� ��������:
</span>
<b>
������� ��� ��������
</b>
<br>
����� ������������ ���� ����� ������� ������� � �������� ��������� ZEPPELIN CARS, ������� ����������� ����������.
<br>
<br>
<b>
��������� �����
</b>
<br>
������� �������� ���������� � ������������� � ����� ��� ���������� ����� ��������� �������.
<br>
<br>
<b>
������������� �������� ������
</b>
<br>
��������, ������� ������� � 1 500$ � ���� ���������� �������������� � ������� ����������� ����������� ������� � �������.
<br>
<i>
������������� ����������� ��������� �������� ZEPPELIN CARS ��������� ��������� ������ ��� ��������������� �������� ������� ��������� ������������.
</i>
<br>
<br>
<span>
�������
</span>
� ������������ ������������ ������� ������ �������� �������� �� 4% �� ������������� �������.
<br>
� ���� ������������ ������� ������, ����� �������� �������������� ������� ���������� ����� ��������� ������� ������, � �� ��������� 2% �� �� ����������.
<br>
� � �������, �������� �������� ������ �������� �� 1% �� ��������������� � ������ �������.
<br>
<br>
<span>
�������������
</span>
��� ��������� � ��������� � ������� 1 500$ � ���� ���������� ������� ������� �������������, ����� �������� ����������� � ������ �� ����������.
<br>
������� ������� ������ �������� 6% �� ��������������� �������
<br>
������� ������� ������ 3% �� ����������
<br>
������� �������� ������ 2%
<br>
<br>
<b>
��������� ������ ������������� ������� ������� ����� ����� ���������� ������ �� ����������� ��������� �������:
</b>
<br>
�� ����������� 10 ���������, ������ �� ������� ������ 1000$ ���������� � �� ���� ��������� �� 40$ �� �������� �� ������� ��������. ����� 10 ��������� �� 40$ = 400$ �������!
<br>
������ �� ��������� ������� 10 ����� ���������, � �������� ��������� ��� �� 2% �� �� ���������� � 1000$, �� ���� �� 20$. ����� 100 ��������� ������� ������ �� 20$ = 2000$ �������!
<br>
� ������� ������ �� ����� ��������� ������� ������ ��������� �� 10 ����� ���������, � �������� ����� �������� ��� �������������� �� 1% �� ������ �� ����������. ����� 1000 ��������� � ����������� � 1000$ �������� ��� 10 000$ ������� ��� ����������.
<br>
������������� ��� ����� ������� ������ ���������� ������� ������� �����.
<br>
<br>
<span>
���� �������������
</span>
<div class="table-cc">
<table>
<tbody>
<tr class="title">
<td>
���
</td>
<td>
�����
</td>
<td>
��������
</td>
<td>
�����
</td>
</tr>
<tr>
<td>
����� ������� �������������
</td>
<td>
Xatik
</td>
<td>
Skype:
<a href="skype:xatiki?add">
xatiki
</a>
<br>
E-mail:
<a href="mailto:xatiki@gmail.com" target="_blank">
xatiki@gmail.com
</a>
<br>
����:
<a href="http://www.xatik.ru/" target="_blank">
http://www.xatik.ru/
</a>
<br>
�������: +79043701691
</td>
<td>
�����������
</td>
</tr>
<tr>
<td>
������ ������� ����������
</td>
<td>
hyipinv
</td>
<td>
E-mail:
<a href="mailto:projects@hyipinv.com" target="_blank">
projects@hyipinv.com
</a>
<br>
����:
<a href="http://hyipinv.com" target="_blank">
http://hyipinv.com/
</a>
<br>
�������: +79118599634
</td>
<td>
�����������
</td>
</tr>
<tr>
<td>
����
</td>
<td>
ProfitHunters
</td>
<td>
E-mail:
<a href="mailto:support@profit-hunters.biz" target="_blank">
support@profit-hunters.biz
</a>
<br>
����:
<a href="http://profit-hunters.biz" target="_blank">
http://profit-hunters.biz/
</a>
<br>
Skype:
<a href="skype:profit-hunters.biz?add">
profit-hunters.biz
</a>
<br>
���������:
<a href="https://vk.com/club66751030" target="_blank">
https://vk.com/club66751030
</a>
<br>
�������: +79636809097
</td>
<td>
������
</td>
</tr>
<tr>
<td>
���������� �����������
</td>
<td>
Versalsky
</td>
<td>
E-mail:
<a href="mailto:support@royal-investments.net" target="_blank">
support@royal-investments.net
</a>
<br>
����:
<a href="http://royal-investments.net" target="_blank">
http://royal-investments.net/
</a>
<br>
Skype:
<a href="skype:versalsky?add">
versalsky
</a>
</td>
<td>
������������
</td>
</tr>
<tr>
<td>
������� ������
</td>
<td>
Millioninvestor
</td>
<td>
E-mail:
<a href="mailto:admin@millioninvestor.com" target="_blank">
admin@millioninvestor.com
</a>
<br>
����:
<a href="http://millioninvestor.com" target="_blank">
http://millioninvestor.com/
</a>
<br>
Skype:
<a href="skype:andrew_investor?add">
andrew_investor
</a>
</td>
<td>
Cancun (Mexico)
</td>
</tr>
</tbody>
</table>
</div>
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
� ��������
</a>
</li>
<li>
<a href="/rules">
������� ������
</a>
</li>
<li>
<a href="/reglament">
��������� ��������
</a>
</li>
<li>
<a href="/privacypolicy">
�������� ������������������
</a>
</li>
</ul>
<ul>
<li>
<a href="/news">
�������
</a>
</li>
<li>
<a href="/faq">
������ - �����
</a>
</li>
<li>
<a href="/partners">
���������
</a>
</li>
<li>
<a href="/order">
����� ����������
</a>
</li>
</ul>
<div class="clr">
</div>
</div>
<div class="kontakt">
<div class="phone">
������� � ������: 8-800-100-81-73
</div>
<div class="phone">
������� � ���: +971800035703995
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
zeppelin-cars.com � COPYRIGHT 2015
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