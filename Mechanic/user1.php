<?php 
session_start();
	include("connection.php");
	include("functions.php");

$query = "SELECT * FROM `mecha`";
$result1 = mysqli_query($con, $query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Book a Mechanic</title>
	<link rel="shortcut icon" type="image/png" href="tire.png">
	<link rel="stylesheet" type="text/css" href="css2/style1.css">
</head>
<body >
<header>
	<div class = "main">
		<div class ="logo" >
			<img src="mec_logo.png">
		</div>

		<ul>
			<li><a href="user.php">Home</a></li>
			<li><a href="user12.php">Mechanic Details</a></li>
		</ul>
	</div>

		

<style type="text/css">

.in input{
	width: 45%;
	border:2px solid black;
	padding:10px;
	display: inline-block;
	background: white;
	font-family: serif;
}

.texts textarea{
      width: 45%;
      border:2px solid black;
	padding:10px;
	display: inline-block;
	background: white;
	font-family: serif;

}

.in select{
	width: 45%;
	border:2px solid black;
	padding:10px;
	display: inline-block;
	background: white;
	font-family: serif;
}

button{
	text-decoration: none;
	color: #000;
	padding: 5px 35px;
	border:2px solid black ;
	transition : 0.3s ease;
	border-radius: 30px;
	box-shadow: 0 0 15px 1px rgb(0,0,0);
	font-size:30px; 
	margin-top: 20px;
}

button:hover{
	 background-color: #fff;
	color: #000;
	border:4px solid #000;
	box-shadow: 0 0 15px 1px rgb(255,0,0);
}
</style>
	


	<div class="form1">

	<br><br><br><br><br><br><br>
<center>
    <form action="insert.php" method="post">
    	<label style=" color: white; font-size:80px; ">Book here</label>
    		<div class="in">
    			<input type="text" placeholder="Your name" name="name">
    		</div>

    		

    		<div class="in">
    			<input type="number" placeholder="Phone Number" name="phone">
    		</div>

    		<div class="in">
    			<input type="text" placeholder="Car Registration number" name="car_reg">
    		</div>

    		<div class="in">
    			<input type="text" placeholder="Car Engine number" name="car_eng">
    		</div>

    		<div class="in">
    			<input type="datetime-local" placeholder="Appointment Date" name="date">
    		</div>

    		<div class="texts">
    			<textarea rows="5" placeholder="Address" name="address"></textarea>
    		</div>

    		<div class="in">
			<label style="font-family: serif; font-size: 30px; color: white; margin-right: 560px; " class="col-md-4 control-label" for="Course" >Mechanic :</label> 
			<div >
		<select  id="course" name="mechanic"  class="in">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option  value="<?php echo $row1[1];?>"><?php echo $row1[1];?>
            </option>
            <?php endwhile;?>
        </select>
        </div>		
        </div>

    	<button type="submit" name="submit">Submit</button>

    	</form>
    	</center>
    	</div>

</header>        
</body>
<footer>© Shihab Rumee Chowdhury 2022 

</footer>
</html>