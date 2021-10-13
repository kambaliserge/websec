<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">

		input[type=text]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
	input[type=password]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
button[type=button]{
	 width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 10px;
  margin: 5px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
body{
  text-align: center;
  padding: 100px 40px;
  
  margin: 80px 100px;
  border-radius: 80px 100px;
  background-color: darkcyan;
}

p{
  font-size: 18px;
  font-family: serif;
}
.new{
 
  border-radius: 2px solid;
  width: 600px;
  height:250px;
  border: 1px solid teal;
border-radius: 10px;}
form{
  background-color: lightcyan;
}

	</style>

</head><center>
<body><div class="new">
	<form action="formsave2.php" method="post">
    <h1>account not verified</h1>
		<input type="text" name="username"  value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>"  required placeholder="username"><br>
		<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"required placeholder="password"><br>
		<p><input type="submit" name="login" value="login">
		<input type="checkbox" name="remember">remember me</p>
    <p><a href="formula.php">verify now</a></p>
    <p><a href="forgetp.php">forget password</a></p>
    <p>i dont have account<a href="signup.php">  signup</a></p>
	</form></div>
	

</body>
</html>