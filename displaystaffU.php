<?php
$conn=mysqli_connect("localhost","root","","inceptor");
if(!$conn){
    die("Database connection Error:".mysqli_connect_error());
}
$staffid=mysqli_real_escape_string($conn,$_POST['staff_id']);
$sql="select * from staff_details where staff_id='$staffid'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>courses</title>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
            <link rel="stylesheet" href="cstyle/cs.css">
            <script src="bootstrap4/js/jquery-3.6.0.js"></script>
            <script src="bootstrap4/js/popper.min.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
        </head>
        <body background="images/photo2.jpg">
        <div class="container">
            <h2 class="text-center text-uppercase"> Update details
            </h2>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <form action="update-staff.php" method="post">
                        <label for=""><b>id_number</b></label>
                            <input type="text" name="id_number" placeholder="*enter your id_number" required class="form-control" value="<?php echo $row['id_number'];?>">
                            <label for="">first name</label>
                            <input type="text" name="first_name" placeholder="*enter your first name" required class="form-control" value="<?php echo $row['first_name'];?>">
                            <label for=""><b>middle name</b></label>
                            <input type="text" name="middle_name" placeholder="*enter your middle name" required class="form-control" value="<?php echo $row['middle_name'];?>" >
                            <label for=""><b>last name</b></label>
                            <input type="text" name="last_name" placeholder="*enter your last name" required class="form-control" value="<?php echo $row['last_name'];?>" >
                            <label for=""><b>position</b></label>
                        <input type="text" name="position" required placeholder="*position" class="form-control" value="<?php echo $row['position'];?>">

                            <label for="">department</label>
                            <input type="text" name="department" placeholder="*your department" class="form-control" required value="<?php echo $row['department'];?>">


                            <label for=""><b>join date</b></label>
                            <input type="date" name="join_date" placeholder="*join date" required class="form-control" value="<?php echo $row['join_date'];?>">
                        <hr>
                        <div class="buttons">
                            <button type="submit" class="btn btn-success">update</button>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>>


            </div>
        </div>

        </body>
        </html>


        <?php
    }
}
mysqli_close($conn);
?>

