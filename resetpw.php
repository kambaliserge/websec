<?php 
if (isset($_POST['submit'])) {
	$sel=$_POST['sel'];
  $x=0;
	$newp=$_POST['newp'];
	$rnewp=$_POST['rnewp'];
	
	 if ($newp!=$rnewp) {
    echo '<script>alert("password not match")</script>';
header("location:resetp.php?sel=$sel");
	}
	require "database.php";
$sql="select* from token where token1=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$sel);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['token1']==$sel)
    {
    $x=$x+1;
    $tokenemail=$row['email'];
}
  }
  if ($x<1) {
 echo "you need to re-submit your request";
  }
  else
  {
$sql="select* from token where email=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$tokenemail);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  if (!$row=mysqli_fetch_assoc($select)) {
  	echo "There is an error!";
  }
  else
  {
  $sql="UPDATE security set password=? where email=?";
  $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
	$newphash=sha1($rnewp);
  mysqli_stmt_bind_param($stmt,"ss",$newphash,$tokenemail);
  mysqli_stmt_execute($stmt);

  $sql="delete from token where email=?";
     $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$tokenemail);
  mysqli_stmt_execute($stmt);
  header("location:index.php");
}	
  }

  	}
}
}}}
else
{
  
	header("location:index.php");
}
?>