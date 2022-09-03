<?php

session_start();
include('includes/config.php');


	
if(isset($_POST['submit'])) {
$name = $_POST["name"];
$price = $_POST["price"];
$mess = $_POST["mess"];
$prio = $_POST["prio"];
$picture=$_FILES["picture"]["name"];
$cont = $_POST["cont"];




move_uploaded_file($_FILES["picture"]["tmp_name"],"productimages/".$_FILES["picture"]["name"]);
	



$query = "insert into posts(name,picture,price,mess,prio,cont) values('$name','$picture','$price','$mess','$prio','$cont')"; 

$run = mysqli_query($con,$query) or die (mysqli_error());


if($run){
	header("Location: sell.php");
}

else{
	header("Location: sell.php");
}

}?>



        


	
