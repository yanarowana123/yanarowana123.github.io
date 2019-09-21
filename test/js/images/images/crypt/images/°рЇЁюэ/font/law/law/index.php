<?php
	$page = 'law';
	$file = 'law.php';
	$idpg = 10;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
	   	include "../template_infa_ru.php";
	} else {
		include "../template_infa_en.php";
	}
?>