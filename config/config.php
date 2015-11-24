<?php

include 'variables.php';
include 'upload.php';
include 'connection.php';
if(isset($_POST['sets'])) {
 $tcolor = $_POST['sets'];
    $mcolor = $_POST['sets2'];
     $bcolor = $_POST['sets3'];
    
$var_str = var_export($tcolor, true);
    $var_str2 = var_export($mcolor, true);
        $var_str3 = var_export($bcolor, true);
      $var_str4 = var_export($title, true);
$var = "<?php\n\n\$tcolor = $var_str;\n\n
\$mcolor = $var_str2;\n\n
\$bcolor = $var_str3;\n\n
\$title = $var_str4;\n\n
?>";
file_put_contents('config/variables.php', $var);
      
}

if(isset($_POST['sname'])) {
 $servername = $_POST['sname'];
    $username = $_POST['uname'];
     $password = $_POST['dpassword'];
    
$var_str5 = var_export($servername, true);
    $var_str6 = var_export($username, true);
        $var_str7 = var_export($password, true);
$var = "<?php\n\n\$servername = $var_str5;\n\n
\$username = $var_str6;\n\n
\$password = $var_str7;\n\n

?>";
file_put_contents('config/connect.php', $var);
     
}





$site = new site;
	



function __autoload($class) {
	
		include "classes/".$class.".php";
	
	}

	
	
	$site->addHeader("config/header.php");
	
	$site->addFooter("config/footer.php");
	
	$page = new page;
	
?>