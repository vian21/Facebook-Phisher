<?php 
$user=$_POST['username'];
$pass=$_POST['password'];

if ($user=="admin" and $pass=="admin")
	{
		session_start();
		$_SESSION['admin']="yes";
	header('location:main.php');

	}
else
	{

	header('location:index.php');

	}
?>