<?php
	// session_start();

	// $conn = new mysqli("localhost","root","","stc");
	// $db = mysqli_connect("localhost","root","","stc");

	$db = mysqli_connect('containers-us-west-74.railway.app', 'root', 'shJUuampFCME8cDMR7V6', 'railway', 5805);
	$conn = new mysqli('containers-us-west-74.railway.app', 'root', 'shJUuampFCME8cDMR7V6', 'railway', 5805);

	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
