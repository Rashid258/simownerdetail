<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$number = addslashes($_POST['number']);
		$name = addslashes($_POST['name']);
		$cnic = addslashes($_POST['cnic']);
		$address = addslashes($_POST['address']);
		
		mysqli_query($conn, "INSERT INTO `searchdb` VALUES('', '$number', '$name', '$cnic', '$address')") or die(mysqli_error());
		
		header('location: admin.php');
		
	}
?>