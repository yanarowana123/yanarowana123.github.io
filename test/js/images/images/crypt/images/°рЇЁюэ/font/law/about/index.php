<?php
	$page = 'about';
	$file = 'about.php';
	$idpg = 16;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
			include "../template_about.php";
	} else {
		include "../template_infa_en.php";
	}
?>