<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">Сайт отключен и недоступен для остальных пользователей!</p>';
}



?>


<!DOCTYPE html><head>
<meta http-equiv="Content-Language" content="en-us">

<title>SAFFRON OIL</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" src="js/viewportchecker.js"></script>




<script>

 $(function () {
	
	$( "#onepercent" ).change(function() {
		
		if( $( "#onepercent" ).val() == 2.5 ){
			mins = 100;
			maxs = 3000;
			counts = 1;
			percent = 10;
		} else if( $( "#onepercent" ).val() == 4 ){
			mins = 5000;
			maxs = 50000;
			counts = 50;
			percent = 2;
		}
		
		
	slider = $("#range").data("ionRangeSlider");
		
	slider.update({
        min: mins,
        max: maxs,
		from: mins,
    });
	
	$("#sum1").html(mins*percent);
	$("#value").html(mins);
	$("#sum2").html(percent);
	$("#srok").html(counts);
		
	});
	
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 100,
            max: 3000,
			from: 10,
            type: 'single',
            step: 1,
            prefix: "",
            grid: true,
			onChange: function (data) { 
			$("#value").html(data.from);
			if(data.from){
				
		if( $( "#onepercent" ).val() == 2.5 ){
			mins = 100;
			maxs = 3000;
			counts = 1;
			percent = 10;
		} else if( $( "#onepercent" ).val() == 4 ){
			mins = 5000;
			maxs = 50000;
			counts = 50;
			percent = 2;
		}	
		
		

			$("#sum1").html(data.from*percent);
			$("#sum2").html(percent);
			$("#srok").html(counts);
			}
			}
        });

		
		
    });

if( $("#modal").is(":visible") == true ){ $("#for-blur").attr("style", "-webkit-filter: blur(2px);-moz-filter: blur(2px);-o-filter: blur(2px);-ms-filter: blur(2px);filter: blur(2px);"); }
	
function hide_modal(){
  $( "#modal" ).css("visibility", "hidden");
  $( "#modal-bg" ).css("visibility", "hidden");
  $( "#modal" ).css("display", "none");
  $("#for-blur").attr("style", "");
}
	
$( "#close-modal" ).click(function() {
  $( "#modal" ).css("visibility", "hidden");
  $( "#modal-bg" ).css("visibility", "hidden");
  $( "#modal" ).css("display", "none");
  $("#for-blur").attr("style", "");
});	
</script>






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

            
<div class="homewelbg">

  <div class="container post">
    
    <div class="plbox">
    <img class="planimg" src="images/wallet.png"/>
      <span class="homeplanstit2">1%</span>
	   <br>
      <span class="homeplansrate">Per <span class="plreturn">Day</span></span><br><br>
      <br>
      <span class="homeplansinfo">min deposit $30</span>
	
	   <br>
      <span class="homeplansinfo">max deposit not limited</span>
	  
	 <br>
   
	    <span class="homeplansinfo">life</span>
      <br>
     
      <span class="homeplansinfo">PRINCIPAL INCLUDED</span>
      <br>
	   <br>
	    <br>
      <a class="homesbmt" href="/deposit">DEPOSITS</a>
	   <br>
    </div>
    
   
   
      
  
   
   
   
   
   
   
          
    </tr>
  </tbody>
</table>
<br><br><br>


<br>
	
	
	
        
	
	
	
	
	
	
	
    </div>
    
  </div>
</div>



<div class="homeplanbg">
<div class="post1">
<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="30%" valign="top"><img src="images/home.png"/></td>
      <td width="70%" valign="top" ><div class="homeabout">About <span class="hometxtcolor">our company</span></div><br>
        <div class="hometitcolor">Welcome to SAFFRON OIL!</div><br>
<div class="homeabouttxt">SAFFRON OIL company engaged in the cultivation of Safronov in Brazil,with this we can help people to earn money.<br><br>
Create a Deposit and get daily profit on your payment systems , we offer excellent pricing plan and a great referral system in which people can earn extra income. WELCOME TO THE COMPANY!!
  <br><br><br>
  <a class="sbmt" href="/about">read more</a></div></td>
    </tr>
  </tbody>
</table>

</div>
</div>




















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



















  <div class="homecerbg">
  
<div class="post2">
  
  <div class="homestbox1"><img src="images/work-team.png"/>
    <div class="logostatbr"><span class="logostatam"><?php print intval(mysql_num_rows(mysql_query("SELECT id FROM users WHERE go_time > ".intval(time() - 1200))) + cfgSET('fakeonline')); ?></span><br>
      <span class="logostattxt">USER:</span></div>
  </div>
  
  <div class="homestbox2"><img src="images/business-deal.png"/>
    <div class="logostatbr2"><span class="logostatam">USD   <?php print $depmoney; ?></span><br>
      <span class="logostattxt">Invested:</span></div>
  </div>
  
  <div class="homestbox1"><img src="images/stack-of-coins.png"/>
    <div class="logostatbr"><span class="logostatam">USD <?php print $money; ?></span><br>
      <span class="logostattxt">Paid:</span></div>
  </div>
  
  <div class="homestbox3"><img src="images/check-with-pen.png"/>
    <div class="logostatbr"><span class="logostatam"><?php print $nu['login']; ?></span><br>
      <span class="logostattxt">New user</span></div>
  </div>
</div>

  </div>





</div>
  <br><br>   
     <div class="homerefbg"><span class="homerefbgtxt">10-3-1% </span>REFERRAL COMMISSION</div>

    </div>








</td>
  </tr>
</table> 


<center>
<br>
<img src="images/payment.jpg" alt=""/>
<br><br>
<div class="fcontent">

<table width="1200" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="400" valign="top"><img src="images/logo.png" alt=""/>
      <br>
      <div class="footercp">Registered Investment Company in London,<br>
      Company Reg. Number  101394</div> <br>
      <a class="flaticon-facebook25 logobartxt" href="https://www.facebook.com/groups/"></a> <a class="flaticon-twitter16 logobartxt" href="https://twitter.com/ltd"></a> <a class="flaticon-google26 logobartxt" href="https://plus.google.com/102018524421045"></a> <a class="flaticon-skype9 logobartxt" href="skype:nicolasll"></a> <a class="flaticon-youtube15 logobartxt" href="https://www.youtube.com/channel/UMkW8NyQ"></a></td>
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



