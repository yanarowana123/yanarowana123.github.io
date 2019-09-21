<?php
	$page = 'partners';
	$file = 'partners.php';
	$idpg = 26;
	include '../cfg.php';
	include '../ini.php';
	 if($lng == "ru") {
		include "../template_partners.php";
	} else {
		include "../template.php";
	}
?>