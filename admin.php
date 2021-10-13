<?php
session_start();
if (!isset($_SESSION['k1'])) {
  
header('Location: index.php');


} 
?>

<?php

//create csrf token
if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}
nav ul {
  list-style-type: none;
  padding: 0;
}
article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}
 article h1{
			font-size: xx-large;
			color: blue;
			font-family: brush script mt;
		}
section::after {
  content: "";
  display: table;
  clear: both;
}footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
	
	</style>
</head>
<body>
	<header>
		<img src="1.png">
</header>
<section>
  <nav>
    <ul>
    
       <li><a href='logout.php'><input type=button value=logout name=logout></a></li>
    </ul>
  </nav>
  
  <article>
    <center><h1>welcome to our page</h1></center>
    <p>any thing we provide in jah we provide  </p>
    <p>in the left part there is a link to log you out </p>
  </article>
</section>
<footer>
  <p>service delay is service denied</p>
</footer>
<input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
</body>
</html>