<?php 
session_start(); 
include("connection.php");
$rn=$_GET['rn'];

include("functions.php");

$query = "SELECT * FROM `mecha`";
$result1 = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="tire.png">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Data</h4>
                    </div>
                    <div class="card-body">

                        <form action="up1.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Student ID</label>
                                <input type="text" name="stud_id" class="form-control" readonly value="<?php echo "$rn" ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Appointment Date</label>
                                <input type="datetime-local" required name="name" class="form-control"   >
                            </div>






                            <div class="form-group mb-3">
                                <label for="">Mechanic</label>
                                <select  id="course" name="class"  class="form-control">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option  value="<?php echo $row1[1];?>"><?php echo $row1[1];?>
            </option>
            <?php endwhile;?>
        </select>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>