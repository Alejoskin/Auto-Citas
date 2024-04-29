<?php
	include"conection.php";
	
	$Name = $_POST['name'];
	$Phone = $_POST['phone'];
	$Date = $_POST['date'];
	
	$sql = "INSERT INTO clientes (
			nombre, 
			telefono, 
			fecha)
			VALUES (
			'$Name', 
			'$Phone', 
			'$Date')";
	
	mysqli_query($db, $sql);
	header("Location: main.php");
?>

