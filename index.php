<?php

	include "config/config.php";
	
	$title = "Fizz";
	
	$content = <<<EOT

    <div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
        <a href = "register.php">
     <img class="icon" border="0" alt="Register" src="media/register.png"/>
            </a>
      <span class = "pinktext"><br/>Register Mode</span> 
    </div>
    <div style='display: inline-block; vertical-align: top;'>
           <a href = "overview.php">
      <img class="icon" border="0" alt="Overview" src="media/overview.png"/>
        </a>
         <span class = "bluetext"><br/>Overview Mode</span>
        
    </div>
</div>    
    

EOT;
	
	$site->display($content, $title);


?>