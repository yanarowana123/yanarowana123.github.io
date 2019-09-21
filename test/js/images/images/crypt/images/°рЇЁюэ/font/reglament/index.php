<?php
	$page = 'reglament';
	$file = 'reglament.php';
	$idpg = 24;
	include '../cfg.php';
	include '../ini.php';
	 if($lng == "ru") {
		include "../template_reglament.php";
	} else {
		include "../template.php";
	}
?>