<?php

function __autoload($class) {
	
		include "classes/".$class.".php";
	
	}

	$site = new site;
	
	$site->addHeader("config/header.php");
	
	$site->addFooter("config/footer.php");
	
	$page = new page;
	
?>