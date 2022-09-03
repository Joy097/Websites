<?php
session_start();
error_reporting(0);
include('includes/config.php');


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		
	    <title>Sell Items</title>
	    <link rel="shortcut icon" type="image/png" href="img/logo2.png">
        <link rel="stylesheet" type="text/css" href="assets/css/post.css">
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/style1.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	</head>
	<body class="cnt-home">
		<header class="header-style-1">

<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?></header>
<div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"style="font-size:20px; ">Post for sell</button>
<br><br><br><br><br><br>

<?php 

$db = mysqli_connect("localhost", "root", "", "gaming");
$sql = "SELECT * FROM posts";
$result = mysqli_query($db,$sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='blog-post'>";
    echo " <div class='blog-post_img'>";
    echo "<img src='productimages/".$row['picture']."' >";
    echo "</div>";
    echo "<div class='blog-post_info'>";
    echo "<div class='blog-post_date'>";
    echo "<span>".$row['date']."</span>";
    echo "<span>Condition : ".$row['prio']."</span>";
    echo "<span>Price : ".$row['price']." Tk</span>";
    echo " </div>";
    echo "<h1 class='blog-post_title'>".$row['name']."</h1>";
    echo "<p class='blog-post_text'>".$row['mess']."</p>";
    echo "<a href='#' class='blog-post_cta'>Contact Seller : ".$row['cont']."</a>";
    echo "</div></div>";
    echo "</br></br></br>";
}


?>



        <div class="modal" id="myModal" >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title">Post for sell</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="action.php" method="post" enctype="multipart/form-data" style="font-size:15px; ">
                            
                            

                            <div class="mb-3">
                                <label class="form-label required">Product Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>



                            <div class="mb-3">
                               <label class="form-label required">Picture</label>
                               <input type="file" class="form-control" name="picture">
                            </div>



                            <div class="mb-3">
                                <label class="form-label required">Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>


                            <div class="mb-3">
                                <label class="form-label required">Contact No.</label>
                                <input type="number" class="form-control" name="cont">
                            </div>


                            <div class="mb-3">
                                <label class="form-label required">Description</label>
                                <textarea class="form-control" name="mess"></textarea>
                            </div>


                            
                            <div class="mb-3">
                            <label class="form-label required" for="prio">Condition of the product</label>
                            <select id="prio" name="prio">
                                <option value="Good">Good</option>
                                <option value="Medium" selected>Medium</option>
                                <option value="Bad">Bad</option>
                            </select>
                            </div>


                            <div class="mb-3">
                                <input type="checkbox" id="sc" name="terms" required>
                                <label for="sc" class="form-label required">Are all the informations valid ?</label>
                            </div>


                            <button type="submit" name="submit" class="btn btn-primary" style="font-size:15px;">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    

<br><br><br><br><br><br>
<style>
        .modal-header {
            background: #DE00FE;
            color: #fff;
        }
        
        .required:after {
            content: "*";
            color: red;
        }
    </style>

<div class="hr"></div>
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>


</body>
</html>
