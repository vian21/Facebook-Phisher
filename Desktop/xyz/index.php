<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<style type="text/css">
	body
	{
		background-color: black;
		color: green;
		font-size: 20px;
	}
	
	form
	{
		padding-top: 200px;
	}

	input
	{
		background-color: black;
		color: green;
		border-color: black;
	}
</style>
<center>
<form action="auth.php" method="post">
	<input type="text" placeholder="Enter username" name="username" required autocomplete="off" autofocus><br><br>
	<input type="password" name="password" placeholder="Enter password" required autocomplete="off"><br><br>
	<input type="submit" name="submit">
</form>
</center>
</body>
</html>
