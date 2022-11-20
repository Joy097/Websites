<?php
	$name = $_POST['ename'];
	$pass = $_POST['pass'];

	// Database connection
	$conn = new mysqli('localhost','root','','fb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(ename, password) values(?, ?)");
		$stmt->bind_param("ss", $name, $pass);
		$execval = $stmt->execute();
		header("Location: index.php");
		$stmt->close();
		$conn->close();
	}
?>