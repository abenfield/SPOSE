<?php

	include("config/config.php");
	


	$content = <<<EOT

        <div class = wrapper>
          
       <select style = "width:100%; height:30px; margin-top:25px; margin-bottom:25px;">
  <option value="nil">Syrup Flavor..</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
    
               
     
        <div class = "snowcone center">
                 <div style=" float:left;background-size: 100% 100%;margin-top:80px;width: 50px; height:50px; background-image: url('media/plus.png');">
            </div>
            <div style=" float:left;background-size: 100% 100%;width: 130px; height:200px; background-image: url('media/snowcone.png');">
                 
                <span class = "blacktext" style = "margin-top=-50px;">Purchased</span>
                <br/> <br/> <br/><br/>
                <span class ="blacktext">0</span>
                <br/> <br/> <br/> <br/> <br/> 
                <div style = "background-color:#D3D3D3;width:150px; height:150px;">
              
                    <br/>
                Cups Used: 0 <br/>
                Syrup Used: 0ml <br/>
                Spoons used: 0 <br/>
                Lids Used: 0 <br/>
                Straws Used: 0    <br/> 
                </div>
            </div>
             <div style=" float:left; background-size: 100% 100%;margin-top:80px;width: 50px; height:50px; background-image: url('media/minus.png');">
                </div>
               
            
            <div style=" float:right;background-size: 100% 100%;margin-top:80px;width: 50px; height:50px; background-image: url('media/minus.png');">
            </div>
            
            <div style=" float:right;background-size: 100% 100%;width: 130px; height:200px; background-image: url('media/promo.png');">
                 
                <span class = "blacktext" style = "margin-top=-50px;">Promotional</span>
                <br/> <br/> <br/><br/>
                <span class ="blacktext">0</span>
                  <br/> <br/> <br/> <br/> <br/> 
                <div style = " background-color:#D3D3D3;width:150px; height:150px;">
               
                    <br/>
                     Cups Used: 0 <br/>
                Syrup Used: 0ml <br/>
                Spoons used: 0 <br/>
                Lids Used: 0 <br/>
                Straws Used: 0    <br/> 
                </div>
            </div>
             <div style=" float:right; background-size: 100% 100%;margin-top:85px;width: 50px; height:50px; background-image: url('media/plus.png');">
                </div>
        </div>
        
         
           
            

   
        </div>
   
    

EOT;
	
	$site->display($content, $title, $tcolor, $mcolor, $bcolor);


?>