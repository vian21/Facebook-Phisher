<?php 


$connect=mysqli_connect('localhost','root','','phish');


$ID=$_GET['id'];

$do=$connect->query("Delete FROM passwords WHERE id='$ID'");

header("location: main.php");

 ?>