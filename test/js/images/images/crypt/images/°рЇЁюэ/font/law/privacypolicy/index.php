<?php
	$page = 'privacypolicy';
	$file = 'privacypolicy.php';
	$idpg = 25;
	include '../cfg.php';
	include '../ini.php';
	 if($lng == "ru") {
		include "../template_privacy.php";
	} else {
		include "../template.php";
	}
?>