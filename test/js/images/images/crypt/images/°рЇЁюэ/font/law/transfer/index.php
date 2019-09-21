<?php
	$page = 'transfer';
	$file = 'transfer.php';
	$idpg = 21;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
	   include "../template_lk_ru.php";
	} else {
		include "../template_lk_en.php";
	}
?>