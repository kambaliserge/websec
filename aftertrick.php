<?php
session_start();

require_once('database.php');
if (isset($_POST['button'])) {
  
  $email = $conn->real_escape_string($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo"Invalid Email format";
    }
  
  
  
    $result ="SELECT count(*) FROM security WHERE email=?";
$stmt = $conn->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
  if ($count==0) { // if user exists
   
      echo"No account with the Email provided";
    }

  else{
    
$otp= mt_rand(100000, 999999);

    $query = "UPDATE security SET code=? WHERE email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('is',$otp,$email);
$stmti->execute();
$stmti->close();

    $_SESSION['em'] = $email;
    $_SESSION['code'] = $otp;
  
    $to=$email;
    $from="From: kambalisergekwi@gmail.com";
    $subject="Verification Code for kambali Website";
    $message =$otp;
  
    $mailing = mail($to,$subject,$message,$from);

    header('location: code.php');
    
  }
}


?>