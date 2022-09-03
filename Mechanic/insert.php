<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(isset($_POST['submit'])){
	if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['car_reg'])	&& !empty($_POST['car_eng']) && !empty($_POST['date'])	&& !empty($_POST['mechanic'])) 
	{
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$car_reg = $_POST['car_reg'];
		$car_eng = $_POST['car_eng'];
		$date = $_POST['date'];
		$mechanic = $_POST['mechanic'];

		$query = "insert into details (name,address,phone,car_reg,car_eng,date,mechanic) values('$name' ,'$address' ,'$phone','$car_reg','$car_eng','$date','$mechanic')";
		$run = mysqli_query($conn,$query) or die (mysqli_error());

		if($run){
			header("Location: user1.php");
		}

		else {
			header("Location: user1.php");
		}

	}
		else{
			echo "all fields required";
		}
	}

?>