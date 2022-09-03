<!DOCTYPE html>
<html>
<head>
	<title>Mechanic Details</title>
	<link rel="shortcut icon" type="image/png" href="tire.png">
	<link rel="stylesheet" type="text/css" href="css1/style.css">
</head>
<body >
<header>
	<div class = "main">
		<div class ="logo" >
			<img src="mec_logo.png">
		</div>
		<ul>
			<li><a href="admin.php">Home</a></li>
			<li><a href="admin1.php">Appointments</a></li>
			
			
		</ul>
		
</header>




<div class="container">

<style type="text/css">
        		html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100; 
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 1500px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.4);
	
	background-color: rgba(0,0,0,0.4);
	

}
tr{border-radius: 30px;
	border:2px solid white ;}
th,
td {
	padding: 15px;
	
	color: #fff;
	font-family: Georgia;


}

th {
	text-align: left;

}

thead {
	th {
		background-color: #FF0000;
	}
}


tr:hover {
			background-color: rgba(255,255,255,0.3);
		}
	
        	</style>
	<table >
		<label style=" color: white; font-family: Georgia; font-size:80px; ">Mechanic Details</label>
		<thead>
			<tr>
				<th>Sl no.</th>
				<th>Mechanic Name</th>
				<th>Review</th>
				<th>Availability</th>
				<th>Change Status</th>
				
			</tr>
		</thead>
		<tbody>
<?php 
session_start();
	include("connection.php");
	include("functions.php");
	

$query1 = mysqli_query($con, "SELECT * FROM `mecha`");
while($row=mysqli_fetch_array($query1))
          {echo"
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['review']."</td>
				<td>".$row['availability']."</td>
				<td><a href='upd.php?rn=$row[id] &fn=$row[name]   '> "?> <img alt="Qries" src="egg.png"
         width=35" height="35"> <?php " </a></td>
			</tr>";
		} ?>
		</tbody>
	</table>
</div>
	</div>


</body>
<footer>© Shihab Rumee Chowdhury 2022 

</footer>
</html>