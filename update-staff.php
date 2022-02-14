<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="cstyle/cs.css">
    <script src="bootstrap4/js/jquery-3.6.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center text-uppercase">Update Success</h2>
    <hr>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <?php

            $conn = mysqli_connect("localhost", "root", "" ,"inceptor");
            if (!$conn){
                die("Database connection error : " . mysqli_connect_error());
            }
            //removing SQL injections
            $staffid = mysqli_real_escape_string($conn,$_POST['staff_id']);
            $idnumber = mysqli_real_escape_string($conn,$_POST['id_number']);
            $firstname = mysqli_real_escape_string($conn,$_POST['first_name']);
            $middlename =mysqli_real_escape_string($conn,$_POST['middle_name']);
            $lastname =mysqli_real_escape_string($conn,$_POST['last_name']);
            $geder=mysqli_real_escape_string($conn,$_POST['geder']);
            $pstn=mysqli_real_escape_string($conn,$_POST['position']);
            $department=mysqli_real_escape_string($conn,$_POST['department']);
            $joindate=mysqli_real_escape_string($conn,$_POST['join_date']);


            //Using MYSQL INSERT statement to post the data to the course table in he db
            $sql= "update staff_details set id_number='$idnumber',first_name='$firstname',middle_name='$middle_name',last_name='$lastname',geder='$geder',position='$pstn',
department='$department',join_date='$joindate' where staff_id='$staffid'";

            if($conn->query($sql)==true){
                print "<p>Course details update successfully</p>";
                print"<a href='staff_details.php' class='btn btn-success'> update another course</a>";

            }
            else{
                print "<p>Course details not update</p>";
                print"<a href='staff_details.php' class='btn btn-danger'>Try Again</a>";
            }
            //closing the database connection
            mysqli_close($conn);
            ?>




        </div>


    </div>
</div>

</body>
</html>


