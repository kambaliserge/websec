<?php 
session_start();
include "database.php";
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$uname=$_POST['username'];
$_SESSION['em']=$email;
$_SESSION['code']=$code;

$password=$_POST['password'];
$cod=mt_rand(100000,999999);
$statas="not verified";

$sql1="insert into security(Fname, Lname, email, username, password, code, status) values(?, ?, ?, ?, ?, ?, ?)";
$st=mysqli_stmt_init($conn);
$to=$email;
$from="From: kambalisergekwi@gmail.com";
    $subject="Verification Code for kambali Website";
    $message =$cod;
  
    $mailing = mail($to,$subject,$message,$from);

if (mysqli_stmt_prepare($st,$sql1))
 {
 	$salted="saltedsfgfgbgvg".$password;
 	$saltsh=hash('sha1', $salted);
	mysqli_stmt_bind_param($st, "sssssss", $Fname, $Lname, $email, $uname, $saltsh, $cod, $statas);
	mysqli_stmt_execute($st);
	//echo"<script>alert('successfully signup')</script>";
	//echo"<script>location.href='index.php'</script>";
	header("location:code.php");
}

	else{
		echo"<script>alert('failed to signup')</script>";
		echo"error:".$sql1."<br>".$conn ->error;
		echo"<script>location.href='signup.php'</script>";
	}

$conn->close();

 ?>