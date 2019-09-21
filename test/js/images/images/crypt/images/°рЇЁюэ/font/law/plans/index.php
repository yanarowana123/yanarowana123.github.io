<?php
	$page = 'plans';
	$file = 'plans.php';
	$idpg = 22;
	include '../cfg.php';
	include '../ini.php';
	 if($lng == "ru") {
		include "../template_plans.php";
	} else {
		include "../template.php";
	}
?>