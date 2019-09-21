<div class="header" style="background:url(/headvn.jpg) no-repeat center;     height: 349px;"><div class="parallax-layer parallax-layer-3"></div></div>























	<div class="inners_wrap inners_wrap2 clearfix">
	<div class="inner_container" id="inner_container">
	




<div class="tpl_wrap clearfix">

	<h2>Новости</h2>
<?php
defined('ACCESS') or die();
if(!intval($_GET[id])) {
function show_topics ($id, $subj, $msg, $date, $status)
{
	$text = substr($msg, 0, 1000);
	$text = str_replace("\n", "", $text);
	$text = preg_replace('/(<)(.+?)(>)/', '', $text);
	$text = substr($text, 0, 500);

											if ($status == 1 || $status == 2)
	{
		print " <td><a href=\"/adminpanel/adminstation.php?a=edit_news&id=".$id."\"><img src=\"/adminpanel/images/edit_small.gif\" width=\"12\" height=\"12\" border=\"0\" alt=\"Редактировать новость\" /></a> ";
		print "<img style=\"cursor: hand;\" onclick=\"if(confirm('Вы уверены?')) top.location.href='/adminpanel/del/news.php?id=".$id."'\";  width=\"12\" height=\"12\" border=\"0\" src=\"/adminpanel/images/del.gif\" alt=\"Удалить новость\" /></td>";
	}
			if(file_exists('../uploads/imgtonews'.$id.'.jpg')) { $imagenew = "<br><img src=\"../uploads/imgtonews".$id.".jpg\">"; } else
		if(file_exists('../uploads/imgtonews'.$id.'.jpeg')) { $imagenew = "<br><img src=\"../uploads/imgtonews".$id.".jpeg\">"; } else
		if(file_exists('../uploads/imgtonews'.$id.'.png')) { $imagenew = "<br><img src=\"../uploads/imgtonews".$id.".png\">"; }
										print'
									<table width="100%" border="0" style="margin-top: 1px; height: 180px; position:relative;">
		<tbody><tr>
			<td class="answeee"><p style="text-align:center; color:white; background: rgba(0,0,0,0.5);"> <span style="font-size: 28px;"> '.$date.' </span></td><td style="vertical-align: middle;background: rgba(159, 195, 160, 0.1); padding: 5px; border-right: 1px solid darkgrey; border-top: 1px solid darkgrey;  border-bottom: 1px solid darkgrey;">
			<div class="hline"></div>
			<p align="justify" style="position: relative; top: 5px;"><b><u>'.$subj.'</u></b><br>'.$text.''.$imagenew.'</p>	<div style="margin-top: 3px;" class="hline"></div>
		<div style="float: left;">
		</div>
			</td>
		</tr>
	</tbody></table><div class="hline" style="margin-bottom: 3px;"></div>';
}

function topics_list($page, $num, $status)
{
	$query	= "SELECT * FROM news ORDER BY id DESC";
	$result	= mysql_query($query);
	$themes = mysql_num_rows($result);
	$total	= intval(($themes - 1) / $num) + 1;
	if(empty($page) or $page < 0) $page = 1;
	if($page > $total) $page = $total;
	$start = $page * $num - $num;
	$result = mysql_query($query." LIMIT ".$start.", ".$num);

	while ($row = mysql_fetch_array($result))
	{
		show_topics($row['id'], $row['subject'], $row['msg'], $row['date'], $status);
	}

	if ($page) {
		if($page != 1) { $pervpage = "<a href=\"?page=". ($page - 1) ."\">««</a>"; }
		if($page != $total) { $nextpage = " <a href=\"?page=".$total."\">»»</a>"; }
		if($page - 2 > 0) { $page2left = " <a href=\"?page=". ($page - 2) ."\">". ($page - 2) ."</a> "; }
		if($page - 1 > 0) { $page1left = " <a href=\"?page=". ($page - 1) ."\">". ($page - 1) ."</a> "; }
		if($page + 2 <= $total) { $page2right = " | <a href=\"?page=". ($page + 2) ."\">". ($page + 2) ."</a> "; }
		if($page + 1 <= $total) { $page1right = " | <a href=\"?page=". ($page + 1) ."\">". ($page + 1) ."</a> "; }
	}
	print "<div class=\"pages\" >".$pervpage.$page2left.$page1left." <b style=\"font-size:19px;\">".$page."</b> ".$page1right.$page2right.$nextpage."</div>";
}

$page = intval($_GET['page']);
topics_list($page, $num, $status);
} else {

	print "<p align=\"justify\">".stripslashes($news_text)."</p>";
	print '<div class="hline"></div><script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
	<table width="100%"><tr><td><div class="yashare-auto-init" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,friendfeed,lj"></div></td><td align="right">Дата публикации: <b>'.$news_date.'</b></td></tr></table>';

}
?>
		</div>
	  			</div>
	  		</div>