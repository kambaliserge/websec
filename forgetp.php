<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		h1{
			font-family: serif;
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
		body{
  text-align: center;
  padding: 100px 40px;
  
  margin: 80px 100px;
  border-radius: 80px 100px;
  background-color: darkcyan;
}

		input[type=text]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
	</style>
</head>
<body>
<h1>forget password</h1>
<form action="email.php" method="post">
<input type="text" placeholder="enter your email" name="email"><br>
<input type="submit" name="button" value="next"><br>
<label>i already have account</label>
</form>
</body>
</html>