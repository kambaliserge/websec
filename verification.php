<?php
session_start();


require_once('database.php');

// LOGIN USER
if (isset($_POST['button'])) {
    $email=$_SESSION['em'];
    $code=$_POST['code'];

    
   $query = "SELECT * FROM security WHERE code=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i',$code);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
      $query = "UPDATE security SET status='Verified' WHERE email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('s',$email);
$stmti->execute();
$stmti->close();
echo"<script>alert('your email verified successfully')</script>";
header('location:index.php');

    }
  else{
    echo"Wrong activation code ";
  }

  }

//..........................................
  //Verify after creating an account




?>