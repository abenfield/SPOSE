<?php

	include "config/config.php";
	
	
	$content = <<<EOT

    <div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
        <a href = "register.php">
        <i style = "font-size:200px;"class="tcolortext ion-ios-cart icon"></i>
      <span class = "tcolortext"><br/>Register Mode</span> 
          </a>
    </div>
    <div style='display: inline-block; vertical-align: top;'>
           <a href = "overview.php">
         <i style = "font-size:200px; "class="mcolortext icon ion-briefcase icon"></i>
         <span class = "mcolortext"><br/>Overview Mode</span>
        </a>
    </div>
    
     <div style='display: inline-block; vertical-align: top;'>
           <a href = "settings.php">
         <i style = "font-size:200px; "class="bcolortext icon ion-ios-settings-strong"></i>
         <span class = "bcolortext"><br/>Settings</span>
        </a>
    </div>
    
    
</div>    
    

EOT;
	
	$site->display($content, $title, $tcolor, $mcolor, $bcolor);


?>