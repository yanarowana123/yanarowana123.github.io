<?php
defined('ACCESS') or die();

$action = $_GET['action'];
// Добавление отзыва
if ($action == "send") {
	if ($login) {
			$text = nl2br(htmlspecialchars(substr($_POST['text'], 0, 10000), ENT_QUOTES, ''));

			$text = str_replace(":001:","<img src=\"/images/smiles/01.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":002:","<img src=\"/images/smiles/02.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":003:","<img src=\"/images/smiles/03.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":004:","<img src=\"/images/smiles/04.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":005:","<img src=\"/images/smiles/05.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":006:","<img src=\"/images/smiles/06.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":007:","<img src=\"/images/smiles/07.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":008:","<img src=\"/images/smiles/08.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":009:","<img src=\"/images/smiles/09.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":010:","<img src=\"/images/smiles/10.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":011:","<img src=\"/images/smiles/11.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":012:","<img src=\"/images/smiles/12.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":013:","<img src=\"/images/smiles/13.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":014:","<img src=\"/images/smiles/14.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":015:","<img src=\"/images/smiles/15.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":016:","<img src=\"/images/smiles/16.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":017:","<img src=\"/images/smiles/17.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":018:","<img src=\"/images/smiles/18.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":019:","<img src=\"/images/smiles/19.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":020:","<img src=\"/images/smiles/20.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":021:","<img src=\"/images/smiles/21.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":022:","<img src=\"/images/smiles/22.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":023:","<img src=\"/images/smiles/23.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":024:","<img src=\"/images/smiles/24.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":025:","<img src=\"/images/smiles/25.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":026:","<img src=\"/images/smiles/26.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":027:","<img src=\"/images/smiles/27.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);
			$text = str_replace(":028:","<img src=\"/images/smiles/28.gif\" height=\"20\" width=\"20\" border=\"0\" alt=\":)\" />",$text);

			$temp = strtok($text, " ");


			if (!$text || $text == " ") {
				print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text"> Введите текст сообщения</p>
								</div>';
			} elseif (strlen($temp) > 100) {
				print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text"> Текст Вашего сообщение содержит слишком много символов без пробелов!</p>
								</div>';
			} elseif (mysql_num_rows(mysql_query("SELECT id FROM answers WHERE date > ".(time() - 1800)." AND username = '".$login."' LIMIT 1")) && $status <> 1) {
				print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text"> Отзыв нельзя добавлять чаще одного раза в 30 минут.</p>
								</div>';
			} else {

					$radi = 1;

				if(mysql_num_rows(mysql_query("SELECT user_id FROM deposits WHERE user_id = ".$user_id." LIMIT 1"))) {

					$get_user	= mysql_query("SELECT user_id FROM deposits WHERE user_id = ".$user_id." LIMIT 1");
					$row		= mysql_fetch_array($get_user);
					$client_id	= $row['user_id'];
					$view 		= 0;

				} else {
					$view 		= 0;
					$client_id 	= 0;
				}

				$sql = "INSERT INTO answers (`username`, `client_id`, `text`, `date`, `yes`, `view`, `ip`, `poll`) VALUES ('".$login."', ".$client_id.", '".$text."', ".time().", '".$radi."', ".$view.", '".getip()."', ".intval($_POST['poll']).")";

				if (mysql_query($sql)) {
								$lastinser = mysql_insert_id();
								
								if($_FILES['userfile']['name']) {
								
								$uploaddir = '../uploads';
				if(!file_exists($uploaddir)) {
				@mkdir('../uploads',0751); 
chmod('../uploads',0751);
}
								
	if($_FILES['userfile']['size'] != 0){
$typeimg = exif_imagetype($_FILES['userfile']['tmp_name']); 
if($typeimg == 1){ 
$tmpimg = imagecreatefromgif($_FILES['userfile']['tmp_name']); 
}elseif($typeimg == 3){ 
$tmpimg = imagecreatefrompng($_FILES['userfile']['tmp_name']); 
}elseif($typeimg == 2){ 
$tmpimg = imagecreatefromjpeg($_FILES['userfile']['tmp_name']); 
}else{
echo '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-check"></i>
								  </div>
								  <p class="alert__text">Файл корректен и был успешно загружен.</p>
								</div>';
} 
if($tmpimg){
$pathtoimg = $uploaddir.'/imgtoanswer'.$lastinser.'.jpeg'; 
$test = imagejpeg($tmpimg,$pathtoimg); 
imagedestroy($tmpimg); 
}

}
  }
											print '	<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-check"></i>
								  </div>
								  <p class="alert__text">Отзыв отправлен на модерацию!</p>
								</div>';		
				} else {
					print '	<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Произошла ошибка при записи данных в БД</p>
								</div>';
				}

				$text = "";
			}
	} else {
		print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Вы должны авторизироваться для доступа на эту страницу!</p>
								</div>';
	}
} elseif($_GET['a'] == "pollno") {
	// Голосование (ПРОТИВ)

	if(!$login) {
		print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Для голосования вам необходимо зарегистрироваться!</p>
								</div>';
	} elseif(mysql_num_rows(mysql_query("SELECT * FROM answers_poll WHERE answer_id = ".intval($_GET['id'])." AND (user_id = ".$user_id." || ip = '".getip()."') LIMIT 1"))) {
		print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Вы уже голосовали за данный отзыв</p>
								</div>';
	} else {

		mysql_query("INSERT INTO answers_poll (`user_id`, `date`, `ip`, `answer_id`, `poll`) VALUES (".$user_id.", ".time().", '".getip()."', ".intval($_GET['id']).", 1)");
		mysql_query("UPDATE answers SET poll_no = poll_no + 1, poll_count = poll_count + 1 WHERE id = ".intval($_GET['id'])." LIMIT 1");
		print '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-check"></i>
								  </div>
								  <p class="alert__text">Ваше мнение учтено!</p>
								</div>';

	}

} elseif($_GET['a'] == "pollyes") {
	// Голосование (ЗА)

	if(!$login) {
		print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Вы уже голосовали за данный отзыв</p>
								</div>';
	} elseif(mysql_num_rows(mysql_query("SELECT * FROM answers_poll WHERE answer_id = ".intval($_GET['id'])." AND (user_id = ".$user_id." || ip = '".getip()."') LIMIT 1"))) {
		print '<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-close-circle"></i>
								  </div>
								  <p class="alert__text">Вы уже голосовали за данный отзыв</p>
								</div>';
	} else {

		mysql_query("INSERT INTO answers_poll (`user_id`, `date`, `ip`, `answer_id`, `poll`) VALUES (".$user_id.", ".time().", '".getip()."', ".intval($_GET['id']).", 2)");
		mysql_query("UPDATE answers SET poll_yes = poll_yes + 1, poll_count = poll_count + 1 WHERE id = ".intval($_GET['id'])." LIMIT 1");
		print '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-check"></i>
								  </div>
								  <p class="alert__text">Ваше мнение учтено!</p>
								</div>';

	}

} elseif($status == 1 && $_GET['v']) {
	mysql_query("UPDATE answers SET view = 0 WHERE id = ".intval($_GET['v'])." LIMIT 1");
	print '<div class="alert alert-fixed alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
								  <div class="alert__icon pull-left">
								  	<i class="pe-7s-check"></i>
								  </div>
								  <p class="alert__text">Сообщение скрыто</p>
								</div>';
}
// Вывод отзывов
function topics_list($page, $num, $status)
{
setlocale(LC_ALL, 'Russian_Russia.1251');
	$query	= "SELECT * FROM answers WHERE view = 1 AND part = 0 ORDER BY id DESC";
	$result	= mysql_query($query);
	$themes = mysql_num_rows($result);
	$total	= intval(($themes - 1) / $num) + 1;
	if(empty($page) or $page < 0) $page = 1;
	if($page > $total) $page = $total;
	$start = $page * $num - $num;
	$result = mysql_query($query." LIMIT ".$start.", ".$num);
	
print'<div class="main-container">
	  		<div id="faq-container" class="container">
	  			<!-- SKILLS -->
	  			<h2 class="with-breaker animate-me fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
		  			Отзывы
	  			</h2>
	  			<p class="center">В данном разделе находятся отзывы наших участников. </p>
	  			<hr>
				';
				
if ($_SESSION['user']) {
print'
<div class="hline"></div>
<h4 class="animate-me fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
		  			Добавить отзыв
	  			</h4>
<center style="margin-top: 3px;">
<table width="100%" border="0" align="center">
	<form action="?action=send" method="post" name="msg_form" enctype="multipart/form-data">
	<tr>
		<td colspan="3"><textarea placeholder="Текст сообщения..." style="min-width: 278px; width: 100%; background: rgb(255, 255, 255); border-radius: 10px;" name="text" rows="7" cols="48">'.htmlspecialchars(substr($_POST['text'], 0, 10000), ENT_QUOTES, '').'</textarea></td>
	</tr>
	<tr>
		<td style="width: 50%; text-align: center;">
		<h5 class="animate-me fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; margin: 5px 0; width: 100%;">
		  			Загрузка изображения
	  			</h5>
<input name="userfile" type="file" value="Выбрать изображение" style="margin: 0 0 5px 40%;" />
</td></tr>
	<tr>
		<td align="right"><button type="submit" style="width:100%; margin: 2px 0 5px 0;" class="btn green fixed">Отправить</button></td>
	</tr>
	</form>
</table>
</center>
';
} else {
	print '<p class="er" style="text-align: center;">Для добавления отзывов вам необходимо авторизироваться!</p>';
}
	
	while ($row = mysql_fetch_array($result))
	{
  		if ($status == 1) {
			$admin_but  = "<a href=\"/adminpanel/adminstation.php?a=admin_answers&id=".$row['id']."\"><img src=\"/adminpanel/images/comment_small.gif\" width=\"12\" height=\"12\" border=\"0\" alt=\"Комментировать\" /></a> ";
			$admin_but .= "<a href=\"/adminpanel/adminstation.php?a=edit_answers&id=".$row['id']."\"><img src=\"/adminpanel/images/edit_small.gif\" width=\"12\" height=\"12\" border=\"0\" alt=\"Редактировать сообщение\" /></a> ";
			$admin_but .= "<img style=\"cursor: hand;\" onclick=\"if(confirm('Вы уверены?')) top.location.href='/adminpanel/del/answers.php?id=".$row['id']."'\"; src=\"/adminpanel/images/delite_small.gif\" width=\"12\" height=\"12\" border=\"0\" alt=\"Удалить сообщение\" />";
			$admin_but .= " IP: ".$row['ip'];
		} else {
			$admin_but	= "";
		}

		if ($row['yes'] == 1) {
			$smile = '<img src="/images/yes.gif" width="15" height="15" border="0" alt="Положительный отзыв" title="Положительный отзыв" />';
			$style = "margin-top: 1px; height: 180px; position:relative;";
			$styleback = 'background: rgba(159, 195, 160, 0.1); padding: 5px; border-right: 1px solid darkgrey; border-top: 1px solid darkgrey;  border-bottom: 1px solid darkgrey;';
		} else {
			$smile = '<img src="/images/no.gif" width="15" height="15" border="0" alt="Отрицательный отзыв" title="Отрицательный отзыв" />';
			$style = "margin-top: 1px; height: 180px; position:relative;";
			$styleback = 'background: rgba(243, 93, 93, 0.1); padding: 5px; border-right: 1px solid darkgrey; border-top: 1px solid darkgrey;  border-bottom: 1px solid darkgrey;';
		}



print '
	<table width="100%" border="0" style="'.$style.'">
		<tr>
			<td class="answeee"><p style="text-align:center; color:white; background: rgba(0,0,0,0.5);"> <span style="font-size: 28px;">'.$row['username'].'</span> <br> <b>'.date("d.m.Y H:i", $row['date']).'</b>';

print ' <br>'.$admin_but.'</p></td><td style="vertical-align: middle;'.$styleback.'">
			<div class="hline"></div>
			<p align="justify" style="position: relative; top: 5px;">'.$row['text'].'</p>';

		if($row['answer']) { print "<div style='border: 2px solid rgba(146, 145, 143, 0.48); word-break: break-all; background-color: rgba(140, 156, 173, 0.18); padding: 3px;border-radius: 12px;margin-top: 9px;'><i style=\"color: rgba(0, 0, 0, 0.37);\">Комментарий от администрации:</i><br /><font style=\"color: rgb(105, 105, 105);\">".$row['answer']."</font></div>"; }

		if(file_exists('../uploads/imgtoanswer'.$row['id'].'.jpg')) { print "<div style='border: 2px solid rgba(146, 145, 143, 0.48); background-color: rgba(140, 156, 173, 0.18); padding: 3px;border-radius: 12px;margin-top: 9px; height:80px;'><i style=\"color: rgba(0, 0, 0, 0.37);\">Прикрепленные файлы:</i> <a href=\"../uploads/imgtoanswer".$row['id'].".jpg\"><img class=\"imagesansw\" src=\"../uploads/imgtoanswer".$row['id'].".jpg\"></a></div>"; } else
		if(file_exists('../uploads/imgtoanswer'.$row['id'].'.jpeg')) { print "<div style='border: 2px solid rgba(146, 145, 143, 0.48); background-color: rgba(140, 156, 173, 0.18); padding: 3px;border-radius: 12px;margin-top: 9px; height:80px;'><i style=\"color: rgba(0, 0, 0, 0.37);\">Прикрепленные файлы:</i> <a href=\"../uploads/imgtoanswer".$row['id'].".jpeg\"><img class=\"imagesansw\" src=\"../uploads/imgtoanswer".$row['id'].".jpeg\"></a></div>"; } else
		if(file_exists('../uploads/imgtoanswer'.$row['id'].'.png')) { print "<div style='border: 2px solid rgba(146, 145, 143, 0.48); background-color: rgba(140, 156, 173, 0.18); padding: 3px;border-radius: 12px;margin-top: 9px; height:80px;'><i style=\"color: rgba(0, 0, 0, 0.37);\">Прикрепленные файлы:</i> <a href=\"../uploads/imgtoanswer".$row['id'].".png\"><img class=\"imagesansw\" src=\"../uploads/imgtoanswer".$row['id'].".png\"></a></div>"; }
		
print '	<div style="margin-top: 3px;" class="hline"></div>
		<div style="float: left;">
		</div>
			</td>
		</tr>
	</table><div class="hline" style="margin-bottom: 3px;"></div>
';

	}
	print'</div>';


	if($page != 1) { $pervpage = "<a href=\"?page=". ($page - 1) ."\">««</a> "; }
	if($page != $total) { $nextpage = " <a href=\"?page=".$total."\">»»</a>"; }
	if($page - 2 > 0) { $page2left = " <a href=\"?page=". ($page - 2) ."\">". ($page - 2) ."</a> "; }
	if($page - 1 > 0) { $page1left = " <a href=\"?page=". ($page - 1) ."\">". ($page - 1) ."</a> "; }
	if($page + 2 <= $total) { $page2right = " <a href=\"?page=". ($page + 2) ."\">". ($page + 2) ."</a> "; }
	if($page + 1 <= $total) { $page1right = " <a href=\"?page=". ($page + 1) ."\">". ($page + 1) ."</a> "; }

	print "<div class=\"pages\" style=\"width: 100%;\">".$pervpage.$page2left.$page1left." [".$page."] ".$page1right.$page2right.$nextpage."</div>";
}

$page = intval($_GET['page']);
topics_list($page, $num, $status);
?>
