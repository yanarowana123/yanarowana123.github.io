<?php
	$page = 'payments';
	$file = 'payments.php';
	$idpg = 22;
	include '../cfg.php';
	include '../ini.php';
	 if($lng == "ru") {
		include "../template_infa_ru.php";
	} else {
		include "../template_infa_en.php";
	}
?>