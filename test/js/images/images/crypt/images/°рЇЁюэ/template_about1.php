<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">—айт отключен и недоступен дл€ остальных пользователей!</p>';
}



?>


<!DOCTYPE html><head>
<meta http-equiv="Content-Language" content="en-us">

<title>SAFFRON OIL</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" src="js/viewportchecker.js"></script>


<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.post').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
	    offset: 50    
	   });   
});  

jQuery(document).ready(function() {
	jQuery('.post1').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 50    
	   });   
}); 

jQuery(document).ready(function() {
	jQuery('.post2').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
	    offset: 50    
	   });   
}); 

jQuery(document).ready(function() {
	jQuery('.post3').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInDown', // Class to add to the elements when they are visible
	    offset: 50    
	   });   
});    

jQuery(document).ready(function() {
	jQuery('.post4').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInDown', // Class to add to the elements when they are visible
	    offset: 150    
	   });   
});  

jQuery(document).ready(function() {
	jQuery('.post5').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInDown', // Class to add to the elements when they are visible
	    offset: 250    
	   });   
});                                
</script>





<script type="text/javascript" src="/js/text.js"></script>
<script type="text/javascript" src="/js/calc.js"></script>
<script type="text/javascript" src="/js/tabcontent.js"></script>


<link href="/style.css" rel="stylesheet" type="text/css">
<link href="/flaticon.css" rel="stylesheet" type="text/css">
<link href="/animate.css" rel="stylesheet" type="text/css">
<link href="/buttons/buttons.css" rel="stylesheet" type="text/css">
<link rel="icon" href="/images/icon.ico" type="image/x-icon">

<script type="text/javascript" src="js/tinybox.js"></script>

<script src="/js/easySlider1.7.js"></script>

<script>
$(document).ready(function(){
   $("#slider").easySlider({
      auto: true,
      continuous: true,
	  numeric: true
   });
});
</script>





<script type="text/javascript">
  $(document).ready(function () {

      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.scrollup').fadeIn();
          } else {
              $('.scrollup').fadeOut();
          }
      });

      $('.scrollup').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });

  });
</script>


</head>
<body class="logobodybg" topmargin="0">

<center>
<div class="logobar">
<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="60%"><span class="logobaricon flaticon-map25"></span><span class="logobartxt">2 KENSINGTON HIGH STREET, LONDON, UK, W8 4PT</span> <span class="logobaricon flaticon-envelope5"></span><span class="logobartxt">admin@SAFFRON-OIL.biz</span> <span class="logobaricon flaticon-telephone66"></span><span class="logobartxt"> +00 00 000 000</span></td>
      <td width="40%" align="right">

<a class="flaticon-facebook25 logobartxt" href="https://www.facebook.com/"></a> <a class="flaticon-twitter16 logobartxt" href="https://twitter.com/"></a> <a class="flaticon-google26 logobartxt" href="https://plus.google.com/"></a> <a class="flaticon-skype9 logobartxt" href="skype:"></a> <a class="flaticon-youtube15 logobartxt" href="https://www.youtube.com/"></a>


</td>
    </tr>
  </tbody>
</table>

</div>
<div class="logoslide">
<div class="logobarbg">
  <table width="1200" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td width="500"><a href="?a=home"><img src="images/logo.png" /></a></td>
        <td width="700" align="right"><UL id="menu"><li><a class="current" href="/">Home</a></li>
                  
                    <li><a href='/about'>About</a></li>
          <li><a href='/news'>News</a></li>
          <li><a href='/faq'>F.A.Q</a></li>
          <li><a href='/rules'>Rules</a></li>
          
          <li><a href='/contacts'>Support</a></li>
          </ul></td>
        </tr>
      </tbody>
  </table>
</div>
<br><br><br>
  <div class="logotit">
    <div class="animated bounceInLeft"> SAFFRON-OIL  <span class="logottxt2"> Investment in saffron</span> <br>
      able to exercise your profits  <br>constantly<br>
      <center>
    <div class="logoline"></div>
    </center>
    </div>
    <div class="animated bounceInDown">
    <a class="button gray medium flaticon-sign3" href="/login">LOGIN</a><span class="logolinkdash">  </span><a class="button blue medium flaticon-check30" href="/registration">REGISTRATION</a>  </div>
  </div>

<br>
<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td align="center" class="homebp"><div class="">
      
      



</div></td>
     
    </tr>
  </tbody>
</table>
<br><br><br>




</div>


            

<div class="themebg">
  <div class="post">
    <table width="1200" border="0">
      <tbody>
        
        </tr>
      </tbody>
    </table>
    <br>
    
    <table width="1200" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
         
          <td valign="top"><div class="abouttit"></div><br>
            <table width="100%" border="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="abouttxt">
                   	<div class="a_bottom">
					<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {
		print "<h1>".$title."</h1><hr />";
		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>
                    <br><br><br>
                    <a class="sbmt" href="/registration">REGISTRATION</a>
                  </td>
                  
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
    
    
    <br>
    
  </div>
  <br><br>
</div>


<div class="aboutworkbg">
<div class="post">
Why Choose Us?  
<br><br>

<table width="1200" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td class="aboutpad" width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td width="20%"><img src="/images/business.png" alt="" width="80" height="80"/></td>
                <td width="80%"><div class="abouttit2">ESTABLISH A SUCCESSFUL BUSINESS</div><br>
                  <div class="abouttxt3"> With our assistance in the person of the most experienced business consultants and experts of SAFFRON-OIL, you can discover the strategy of success for your business.</div></td>
                </tr>
              </tbody>
            </table>
            <br><br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td width="20%"><img src="/images/signature.png" alt="" width="80" height="80"/></td>
                  <td width="80%"><div class="abouttit2">WE WILL PROVIDE YOU WITH NECESSARY KNOWLEDGE</div><br>
                  <div class="abouttxt3">After starting with just four employees back in 2004, we developed into the biggest company and we are always ready to share our knowledge with you. Feel free to contact us anytime and ask us any question you want!</div></td>
                </tr>
              </tbody>
            </table>
            
          </td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td width="20%"><img src="/images/business.png" alt="" width="80" height="80"/></td>
                <td width="80%"><div class="abouttit2">YOU CAN FULLY RELY ON US</div><br>
                  <div class="abouttxt3"> From the very beginning we were devoted to our clients' success. So even if all you have is an original idea of starting a business of your dreams, you can freely contact us Ц we know how to get it started.</div></td>
                </tr>
              </tbody>
            </table>
            <br><br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td width="20%"><img src="/images/man.png" alt="" width="80" height="80"/></td>
                  <td width="80%"><div class="abouttit2">
                    
                    THE REVIEWS OF OUR CLIENTS WILL TELL YOU MORE ABOUT US</div><br>
                  <div class="abouttxt3"> We appreciate every word of your reviews and feedback. The success of your own businesses is the main motivation that pushes us forward to our own advancement and development.</div></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>

</div>
</div>

  <div class="homebotbg">
  <div class="post">
   
    <div class="homeptit">


What we offer

</div>
<div class="homesplit"></div>  <br><br>
  <table width="1200" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td class="aboutbox" align="center" valign="top"><img class="aboutimg" src="/images/photo31.png" alt=""/>
          <br>
          <span class="abouttit3">REGISTERED COMPANY</span>
          <br>
          <span class="aboutbgtxt">

SAFFRON-OIL Ltd is absolutely legit. It is registered and works according to the United Kingdom laws. The company has registration number 101394.
</span>
        </td>
        <td class="aboutbox" align="center" valign="top"><img class="aboutimg" src="/images/photo32.png" alt=""/><br>
          <span class="abouttit3">FAST PAYMENTS</span>
          <br>
          <span class="aboutbgtxt">

Payeer, BitCoin, AdvCash and NixMoney withdrawals are processed INSTANTLY, while PerfectMoney withdrawals are processed manually within 24 hours maximum, for security reasons.
</span></td>
          <td class="aboutbox" align="center" valign="top"><img class="aboutimg" src="/images/photo33.png" alt=""/><br>
          <span class="abouttit3">LICENSED SCRIPT</span>
          <br>
          <span class="aboutbgtxt">

Our program uses licensed GoldCoders script, which is the most friendly and convenient script for investors. We are sure all of you will like it very much!
</span></td>
        <td class="aboutbox" align="center" valign="top"><img class="aboutimg" src="/images/photo34.png" alt=""/><br>
          <span class="abouttit3">HIGHEST SECURITY</span>
          <br>
          <span class="aboutbgtxt">

We are hosted on a dedicated server from DDOS-GUARD with the highest level of DDOS protection and fully protected from hackers. Safe online transaction with SSL.
</span></td>
      </tr>
    </tbody>
  </table>  
    
  </div>
</div>






</td>
  </tr>
</table> 


<center>
<br>
<img src="/images/payment.jpg" alt=""/>
<br><br>
<div class="fcontent">

<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="400" valign="top"><img src="/images/logo.png" alt=""/>
      <br>
    <div class="footercp">Registered Investment Company in London,<br>
      Company Reg. Number  10139934</div> <br>
      <a class="flaticon-facebook25 logobartxt" href="https://www.facebook.com/"></a> <a class="flaticon-twitter16 logobartxt" href="https://twitter.com/ltd"></a> <a class="flaticon-google26 logobartxt" href="https://plus.google.com/10201524421045"></a> <a class="flaticon-skype9 logobartxt" href="skype:ni9?call"></a> <a class="flaticon-youtube15 logobartxt" href="https://www.youtube.com/channel/UCv-gg0l-aloHxCgxMkW8NyQ"></a></td>
       <td width="400" valign="top"><br><div class="ftit"></div>
              <table cellspacing=0 cellpadding=2 border=0 width=100%>

<tr>
 <td class="hnews">

 <a href=?a=news#6"><b>
 </b></a> 
    
 <br>

   
 
  <br><br>

 </td>
</tr>
<tr>
 <td>
 </td>
</tr>
</table>
                <div class="footercp"></div></td>
      <td valign="top" width="400">
        
  <center>
  <br>
    
 
  <input id="deposit"  type="text" name="fullname" value="Enter Amount" class="homecalintps" onclick="if(this.value=='Enter Amount'){this.value=''}" onblur="if(this.value==''){this.value='Enter Amount'}" /><br>
     <select name="percent" class="homecalintps"  id="percent" onChange="calcthis(1);">
      <option value="perc1" selected="selected" class="hlist2">130% After 1 Day</option>

      </select> <br>
    <input type="button" value="CALCULATE profit" onClick="calcthis(2);" class="homecalbtn"> <br>
    <table border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        
        <td width="50%"><div class="homecal">total ROI</div>
          <div class="homecal2">$<b id="inpvar2">0</b></div>
        </td>
        
      </tr>
    </tbody>
  </table>
    
  </center>
</td>
      </tr>
  </tbody>
</table>

<br>

<div class="fmenu"><table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="50%"> <a href="/" class="fmlink ">Home</a>
          <a href="/about" class="fmlink ">About us</a>
          <a href="/news" class="fmlink ">News</a>
          <a href="/faq" class="fmlink ">FAQ</a>
          <a href="/rules" class="fmlink ">Terms Of Use</a>
          
          <a href="/contacts" class="fmlink ">Support</a></td>
      <td align="center"><div class="footercp">© SAFFRON OIL.biz 2017. All rights reserved. </div></td>
    </tr>
  </tbody>
</table>
</div>

</div>




<a href="#" class="scrollup">Scroll</a>
<a name="footer"></a>


</center></body>
</html>

