<?php

	include("config/config.php");
	

	
	$content = <<<EOT

  <div class = "center" id = "content">
  
        <h1>Today's Sales</h1>
        <h3>Snowcones sold: tba</h3>
        
        <br/>
 
         <h1>Overall</h1>
        <h3>Snowcones sold: tba</h3>
        
        
        <h3>Including... Clear Daily/Clear Overall/Clear Monthly</h3>
    
    
        </div> 
    

EOT;
	
	$site->display($content, $title, $tcolor, $mcolor, $bcolor);


?>