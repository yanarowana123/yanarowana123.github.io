   <link rel="stylesheet" type="text/css" href="/css/signin.css">
<?php
if($login) {
	print'<meta http-equiv="refresh" content="0;/lk/">';
	exit();
}
if($er) {
	print '	<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text"> <strong>Не удается войти.</strong><br />
	Пожалуйста, проверьте правильность написания <b>логина</b> и <b>пароля</b>.</p>
								</div>';
} else {
if($_GET['mes'] == 'nopage') {
	print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text"> Введите ваш логин и пароль в данной форме!</p>
								</div>';
								} elseif($_GET['mes'] == 'rsuc') {
								print '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-check"></i>
								  </div>
								  <p class="alert__text">Поздравляем! Вы зарегистрировались. Авторизируйтесь пожалуйста.</p>
								</div>';
								}
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Авторизация</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Magical Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/1css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Авторизация</h1>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				 <form method="POST" action="/login/">
				 <input class="text" name="user" type="text" placeholder="ЛОГИН">
					<input class="text" name="pass" id="pass" type="password" placeholder="ПАРОЛЬ">
					
					<div class="wthree-text"> 
						<ul> 
							<li>
								<label class="anim">
									
									<span> </span> 
								</label> 
							</li>
							
						</ul>
						<div class="clear"> </div>
					</div>   
					<input type="submit" value="Логин">
				</form>
				
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile">
			<p>© 2017</p>
		</div>
		<!-- //copyright -->
		<ul class="w3lsg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>	
	<!-- //main --> 
</body>
</html>