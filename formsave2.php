<?php
session_start();
include "database.php";
$uname=$_POST['username'];
$password=$_POST['password'];
$salted="saltedsfgfgbgvg".$password;
 	$saltsh=hash('sha1', $salted);
$t=0;


$f=mysqli_query($conn,"select * from security where username='$uname'");
while ($p=mysqli_fetch_array($f)) {
	if ($uname==$p['username'] and $saltsh==$p['password']) {
		$t=1;
		$h=$p['username'];
		$b=$p['password'];
	}
}
if ($t==1) {
	$query = "SELECT * FROM security WHERE status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }

  if($num_rows > 0){

header("location:admin.php");
//echo "<button><a href='logout.php'>logout</a></button>";


$_SESSION['k1']=$h;
$_SESSION['k2']=$b;
if(!empty($_POST['remember'])) {
	setcookie("username",$_POST['username'],time()+ 3600);
	setcookie("password",$_POST['password'],time()+ 3600);
	echo "cookies.set.successfully";

}}
else{
	header("location:trick.php");
}
}
else
{
	echo "<script>alert('username or password incorrect!')</script>";
 	echo "<script>location.href='index.php'</script>";
}

?>

