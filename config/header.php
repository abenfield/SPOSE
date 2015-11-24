<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title><?php echo $title ?></title>
 <link href="styles.css" rel="stylesheet" type="text/css">
     <link href="ionicons.css" rel="stylesheet" type="text/css">

	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>
	   .tcolor { background-color:<?php echo $tcolor ?>;}
        .mcolor { background-color:<?php echo $mcolor ?>;}
        .bcolor {background-color:<?php echo $bcolor ?>;}
         .tcolortext{font-size:30px;color:<?php echo $tcolor ?>;}
             .mcolortext{font-size:30px;color:<?php echo $mcolor ?>;}
			 .bcolortext{font-size:30px;color:<?php echo $bcolor ?>;}
	
        
		</style>
</head>
<body>
    <a href = "http://benfielddesigns.com/fizz">
<div id = "logo" class = "center"><img src="media/logo.png" width="300px" /></div>
   </a>
   
    <div class = "tcolor bar"></div>
    <div class = "mcolor bar"></div>
    <div class = "bcolor bar"></div>
    
    <div id = "content">