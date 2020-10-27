<?php 
	$con = mysqli_connect('127.0.0.1','root','','Magazin1');
	mysqli_query($con, "INSERT INTO product (name, description, img, price) VALUES('".$_GET['name']."','".$_GET['description']."','".$_GET['img']."','".$_GET['price']."')");

	header("Location: index.php"); 
 ?>