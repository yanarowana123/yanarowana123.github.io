
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
�������������� ���������
</span>
�� ZEPPELIN CARS
</span>
</div>
<div class="texting">
��� ������ �������� ���� ��� ���������� ��� �������������� ��������. ������ ��������� ���������� ����������� ������ ������, ������ ��������������, � ����� ������������ ��������� ������������ � ������ ��������� ����������.
<br>
<br>
<div class="table-cc ttb">
<table>
<tbody>
<tr class="title">
<td>
</td>
<td>
���������
</td>
<td>
�������
</td>
<td>
��������
</td>
<td>
������������
</td>
</tr>
<tr>
<td>
�������
</td>
<td>
�� 100 �� 500 �������� ���
</td>
<td>
�� 500 �� 5000 �������� ���
</td>
<td>
�� 1000 �������� ���
</td>
<td>
�� 500 �������� ���
</td>
</tr>
<tr>
<td>
����� �������������� ���������
</td>
<td>
30 ����������� ����
</td>
<td>
90 ����������� ����
</td>
<td>
180 ����������� ����
</td>
<td>
360 ����������� ����
</td>
</tr>
<tr>
<td>
���������� ������
</td>
<td>
7% � �����
</td>
<td>
8% � �����
</td>
<td>
10% � �����
</td>
<td>
13% � �����
</td>
</tr>
<tr>
<td>
���������� ��������� �� ������
</td>
<td>
�����������
</td>
<td>
�����������
</td>
<td>
�����������
</td>
<td>
�����������
</td>
</tr>
<tr>
<td>
����������� ������������ ������ ���������
</td>
<td>
����
</td>
<td>
����
</td>
<td>
����
</td>
<td>
����
</td>
</tr>
<tr>
<td>
���������� �������� � ����� �����
</td>
<td>
����
</td>
<td>
����
</td>
<td>
����
</td>
<td>
����
</td>
</tr>
</tbody>
</table>
</div>
<br>
<br>
<u>
�������� ��������!
</u>
<br>
�������������� ���������� �������� ������� �� ���������� ��������� �����.
<br>
�������� ������������ ������ � �������� ����� ������������� -
<br>
�&nbsp;������������ ���������� ������
<br>
�&nbsp;������������ ���� �������������� ���������
<br>
<h3>
�������������� ���������.
</h3>
<u>
������������ ������ � ����� ��������� ��������������� �������
</u>
<br>
1.&nbsp;�������������� ������� ���������� ��������� �� 1 ����.
<br>
������������:
<br>
�&nbsp;���� �� ������������ ����, �������������� �� �������, ���������� � �������� � ��������� ���� �������� ���� �� 35%;
<br>
�&nbsp;���������� � ��������� ��������� �� ��������� �������������� �������� �� ������, ���������� � ������. ��� ���������� ��������� �� �������� � ������������ ������.
<br>
<br>
2.&nbsp;���������� ���������� �� ����, ����������� ������������ �������, ����������� ��� �� ������������� ������ � ����������� ���� � ������.
<br>
3.&nbsp;��������� �������� ������ ����� ����������� ���������� �� 400 usd �� 2800 usd, ��� ��� �������������� �������� � 27 � 28 ���� ��������� ��� � ������������ ��� �� 7 ������ ������.
<br>
4.&nbsp;����� 2 ��� ������������ ���������� ���������, ��� �/� �� ���� ���������� �����, ������� ���������� ���� ������ ������������� ����.
<br>
������ ��������, �� ���� � ��� ���� ��������, �������� ��������� ������.
<br>
<h3>
����� �� �������.
</h3>
������� ���������� BMW X3 2012 ���� �������, ��� ���� ������� � ������, ��� ��������� � ���������.&gt; 10 ����������, ������� ������������� �� 130 000 ������
<br>
&gt; ����� ����� ���������� � 10 ���������� ��������� 1300000 ������
<br>
1.&nbsp;�� ��� �������� ��� ���������� ������������ BMW X3 2012 ���� ������� �� 1 200 000 ������;
<br>
2.&nbsp;���������� ���� ����� � ��������� ������� ���������� �������� 100 000 ������, ����� ���� ���������� ����� ��������;
<br>
3.&nbsp;�������� ������ BMW X3 ���������� 8 000 ������, ��� �� 27 ���� ������ �������� 216 000 ������;
<br>
4.&nbsp;1 300 000 / 216 000 = 6 ������� �����������. �����, ��� 1,5 ���� ���� ��������� ������ �����;
<br>
5.&nbsp;����� 2 ��� ������������ ���������� ��� ������ �� ������� �� ����� ���� � 1 200 000 ������, ��� ����������� ��������� ������ ��� ��������� �� ������� ��������.
<br>
<br>
��� ������� ���������� ���������� ������ � 10% ����������� ����� �������� � ������� ���������� �������� 86000 ������, ����� ���������� 130000 ������.
<br>
�� 2 ���� ������ ��� ��������������� 1 300 000 ������ ��������� ����� ����� � ������� 6 384 000 ������.���� ���������� �� 24 ������ �������������� ��������� �� ����� 3 120 000 ������, ��� ������� ������� �������� ������������� ��������������� �������.
<br>
�������� �����.
<br>
<br>
<u>
���� ������������
</u>
<br>
�&nbsp;������� � ����� ���������. �����, �������� ������ ����� ������� ������ ����� ������������� ���� ����� ������� ��������� ������. ���� �������������� ����� ��������� ��������� ������� � �������� ����� ������� �����, � ����� ���������, ������������ �������� ��������� ���� ������;
<br>
�&nbsp;����������� ������������ ���������� � ������ ���������� 7% � �����;
<br>
�&nbsp;������� ��� �����;
<br>
�&nbsp;�������� ����������� � ��������.
<br>
��� ���������� ������� ��������������� ������� �� ��������� �������� ������������ � ��������� ������������:<br>
�&nbsp;������������ ����������� ����, �� �������������� � ���������� �������;
<br>
�&nbsp;������������ ����� ����������� ���� ����� �������;
<br>
�&nbsp;������ ����������� ��� ��������;
<br>
�&nbsp;�������������� ������: ���������������� ��������, ������� � ���������, ������ ���������������� ���������� ���� � ���������� �� ������ � ZEPPELIN CARS
<br>
<br>
<i>
ZEPPELIN CARS - ��������� �������������� ����� � �������������� ��������� � �������� ������� �������� �� ������ ������.
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