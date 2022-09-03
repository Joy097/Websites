<?php
session_start();
$con = mysqli_connect("localhost","root","","login_sample_db");

if(isset($_POST['update_stud_data']))
{
    $id = $_POST['stud_id'];

    $name = $_POST['name'];
    $class = $_POST['class'];


    $query = "UPDATE details SET date='$name', mechanic='$class' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: admin1.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: admin1.php");
    }
}

?>