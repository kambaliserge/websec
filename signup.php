

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
body{
	text-align: center;
	padding: 100px 40px;
	background-color: peachpuff;
}


	</style>
</head>
<body>
<form action="signupcap.php" method="post">
	<input type="text" placeholder="Firstname" name="Fname"><br>
	<input type="text" placeholder="Lastname" name="Lname"><br>
	<input type="text" placeholder="email" name="email"><br>
	<input type="text" placeholder="username" name="username"><br>
	<input type="text" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" name="password" required>><br>
	<input type="submit" name="button">



</form>
</body>
</html>