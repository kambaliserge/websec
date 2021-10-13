<?php 
if (isset($_POST['button'])) {
	$email=$_POST['email'];
	$x=0;
	include"database.php";
	$sql="select* from security where email=?";
$y= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($y,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($y,"s",$email);
  mysqli_stmt_execute($y);
  $select=mysqli_stmt_get_result($y);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$email)
    {
    $x=$x+1;
    $takemail=$row['email'];
}
  }
}
  if($x>=1){
	$sel=bin2hex(random_bytes(8));
	$token=random_bytes(32);
	$url="http://localhost/databasesec/resetp.php?sel=$sel";
	
     $sql="delete from token where email=?";
     $y= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($y,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($y,"s",$email);
  mysqli_stmt_execute($y);
}
$q="insert into token(email,token1) values(?,?)";
$y= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($y,$q)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($y,"ss",$email,$sel);
  mysqli_stmt_execute($y);
}
$from = 'kambalisergekwi@gmail.com';
$to = $email;
$subject = 'Reset password';
$message = '<p>click this link to follow';
$message .= '<a href="'.$url.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
echo"check your email";
}
else{
echo"email not found";
}
}
?>