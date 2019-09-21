<?php
/*
Данный скрипт разработан Михайленко Виктором Леонидовичем, далее автор.
Любое использование данного скрипта, разрешено только с письменного согласия автора.
Дата разработки: 12.10.2007 г.

-> Файл обработчика формы и последующей отсылки данных на e-mail (контактная форма)
*/
defined('ACCESS') or die();
print $body;
$action = htmlspecialchars(str_replace("'","",substr($_GET['action'],0,6)));

	if($action == "submit") {
		$name		= htmlspecialchars(str_replace("'","",substr($_POST['name'],0,50)), ENT_QUOTES, '');
		$mail		= htmlspecialchars(str_replace("'","",substr($_POST['mail'],0,50)), ENT_QUOTES, '');
		$subj		= htmlspecialchars(str_replace("'","",substr($_POST['subj'],0,100)), ENT_QUOTES, '');
		$textform	= htmlspecialchars(str_replace("'","",substr($_POST['textform'],0,10240)), ENT_QUOTES, '');

		    if(!$name) {
				print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите пожалуйста Ваше имя!</p>
								</div>';
		}
		elseif(!$mail) {
				print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите пожалуйста Ваш e-mail!</p>
								</div>';
		}
		elseif(!$subj) {
				print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите пожалуйста тему Вашего сообщения!</p>
								</div>';
		}
		elseif(!$textform) {
				print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите пожалуйста текст Вашего сообщения!</p>
								</div>';
		}
		elseif(!preg_match("/^[a-z0-9_.-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|edu|gov|arpa|info|biz|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$/is",$mail)) {
				print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Введите пожалуйста Ваш e-mail валидно!</p>
								</div>';
		} else {

			$headers = "From: ".$mail."\n";
			$headers .= "Reply-to: ".$mail."\n";
			$headers .= "X-Sender: < http://".$cfgURL." >\n";
			$headers .= "Content-Type: text/html; charset=windows-1251\n";

			$textform2 = "Здравствуйте, ".$name."!<br />Вы писали нам, указав e-mail: ".$mail.", как контактный следующее:<p> ".$textform."</p>";
			$send2 = mail($mail,$subj,$textform2,$headers);
			
			$textform = "".$name." написал в поддержку, указав e-mail: ".$mail.", как контактный следующее:<p> ".$textform."</p>";
            $send = mail($adminmail,$subj,$textform,$headers);

			if(!$send) {
				print '<div class="alert alert-fixed alert-warning alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Ошибка почтового сервера!<br />Приносим извинения за предоставленные неудобства.</p>
								</div>' ;
			} else {

				print '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-attention"></i>
								  </div>
								  <p class="alert__text">Ваше сообщение отправлено!</p>
								</div>';

				$name		= "";
				$mail		= "";
				$subj		= "";
				$textform	= "";
			}
		}
	}
?>


	<div class="header" style="background:url(/headvn.jpg) no-repeat center;     height: 349px;"><div class="parallax-layer parallax-layer-3"></div></div>























	<div class="inners_wrap inners_wrap2 clearfix">
	<div class="inner_container" id="inner_container">
	




<div class="tpl_wrap clearfix">

	<h2>Контакты</h2>
	<h3></h3>
	  					<!-- FORMS -->
	  					<form action="?action=submit" method="post" id="contactform" class="form-horizontal">
							<!-- NAME -->
							<div class="control-group row">
								<label class="control-label col-md-3" for="contact-name">Ваше имя</label>
								<div class="controls col-md-9">
									<input id="contactname" name="name" type="text" placeholder="" value="<?php if(!$name) { print $login; } else { print $name; } ?>" class="input-xlarge form-control" required="">
								</div>
							</div><br>
							<!-- EMAIL -->
							<div class="control-group row">
								<label class="control-label col-md-3" for="contact-email">Ваш Email</label>
								<div class="controls col-md-9">
									<input id="contact" name="mail" type="text" placeholder="" value="<?php if(!$mail) { print $user_mail; } else { print $mail; } ?>" class="input-xlarge form-control" required="">
								</div>
							</div>
											<br>			<div class="control-group row">
								<label class="control-label col-md-3" for="contact-email">Тема вопроса</label>
								<div class="controls col-md-9">
									<input name="subj" id="subject" type="text" value="<?php print $subj; ?>" placeholder="" class="input-xlarge form-control" required="">
								</div>
							</div>
							<!-- TOPIC -->

							<!-- MESSAGE --><br>
							<div class="control-group row">
								<label class="control-label col-md-3" for="contact-message">Ваш вопрос</label>
								<div class="controls col-md-9">                     
									<textarea name="textform" id="message" class=" form-control"><?php print $textform; ?></textarea>
								</div>
							</div>
							<!-- CAPTCHA -->
						
							<!-- BUTTON -->
							<div class="control-group text-right">
							 	<input type="hidden" name="submit" id="submit" value="true">
							 	<input name="submit" type="submit" class="btn btn-default">
							</div>
						</form>
	  				</div>
	  			</div>
	  		</div>
	  		

  
  
  
  <script src="/js/jquery.min.js" type="text/javascript"></script>
      <script src="/js/jquery.validate.pack.js" type="text/javascript"></script>
<script type="text/javascript">
      $(document).ready(function(){
      $("#contactform").validate();
      });
  </script>    
  
  
    
  
	  			  			</div>