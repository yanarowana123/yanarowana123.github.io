<?php
	$page = 'order';
	$file = 'order.php';
	$idpg = 27;
	include '../cfg.php';
	include '../ini.php';
	 if($lng == "ru") {
		include "../template_order.php";
	} else {
		include "../template.php";
	}
?>