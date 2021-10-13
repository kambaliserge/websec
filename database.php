<?php
$server="localhost";
$username="root";
$password="";
$database="booking";
$conn=new mysqli($server, $username, $password, $database);
if($conn -> connect_error){
	die("connection failed".connect_error);
}




  ?>