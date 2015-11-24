<?php
include 'connect.php';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
   echo "Connection Failed";
} 









?>