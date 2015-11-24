<?php

	include("config/config.php");
	include("config/connect.php");
	include("config/connection.php");
	
	$content = <<<EOT

  <div class = "center" id = "content">
  
     <h2> App Settings </h2>
     <hr/>
     <h3>Change Theme Colors: </h3>
    <center><div style = "background-color:$tcolor; width:25px; height:25px;"></div></center>

    
    
     
     <form action="settings.php"  method="post">
 Color #1: <input value="$tcolor" type="text" name="sets" />
 <br />

<br/>
<br/>
    <center><div style = "background-color:$mcolor; width:25px; height:25px;"></div></center>


 Color #2: <input value="$mcolor" type="text" name="sets2" />
 <br />

<br/>
<br/>
    <center><div style = "background-color:$bcolor; width:25px; height:25px;"></div></center>
<form action="settings.php"  method="post">
 Color #3: <input value="$bcolor" type="text" name="sets3" />
 <br /><br /><input type="submit" value="Save Changes" onclick="return confirm('Are you sure?')"/>
</form>
<br/>
<h3>Upload Header Image: </h3>

<form action="settings.php" method="post" enctype="multipart/form-data">
    Upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  
</form>
     <h3> Change Database Connection: </h3>

<form action="settings.php"  method="post">
 Server IP: <input value="$servername" type="text" name="sname" />
  Username: <input value="$username" type="text" name="uname" />
  Password: <input value="$password" type="password" name="dpassword" />
 <br /> <br />
<input type="submit" value="Save Changes" onclick="return confirm('Are you sure?')"/>
</form>






        <hr/>
          <h2> Add/Remove Catagory </h2>
             <hr/>
          <h2> Add/Remove Flavor </h2>
       <hr/>

EOT;
	
	$site->display($content, $title, $tcolor, $mcolor, $bcolor);



?>