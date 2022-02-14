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
    <h2 class="text-center text-uppercase">RECEIPT</h2>
    <hr>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php

            $conn = mysqli_connect("localhost", "root", "" ,"inceptor");
            if (!$conn){
                die("Database connection error : " . mysqli_connect_error());
            }
            //removing SQL injections

            $date=mysqli_real_escape_string($conn,$_POST['receipt_date']);
            $firstname = mysqli_real_escape_string($conn,$_POST['first_name']);
            $othernames =mysqli_real_escape_string($conn,$_POST['other_name']);
            $course =mysqli_real_escape_string($conn,$_POST['course']);
            $fe=mysqli_real_escape_string($conn,$_POST['tution_fees']);
            $fee=mysqli_real_escape_string($conn,$_POST['registration_fees']);
            $fees=mysqli_real_escape_string($conn,$_POST['accomodation_fees']);
            $fees1=mysqli_real_escape_string($conn,$_POST['library_fees']);
            $paid=mysqli_real_escape_string($conn,$_POST['amount_paid']);



            //Using MYSQL INSERT statement to post the data to the course table in he db
            $sql= "insert into receipt(receipt_date,first_name,other_name,course,tution_fees,registration_fees,accomodation_fees,library_fees,amount_paid)
values ('$date','$firstname','$othernames','$course','$fe','$fee','$fees','$fees1','$paid')";

            if($conn->query($sql)==true)
            {
                print "<p>receipt added successfully</p>";
                print"<a href='receipt.php' class='btn btn-success'> Add another data</a>";

            }
            else{
                print "<p>receipt not added</p>";
                print"<a href='receipt.php' class='btn btn-danger'>Try Again</a>";
            }
            //closing the database connection
            mysqli_close($conn);
            ?>




        </div>
        <div class="col-md-3"></div>

    </div>
</div>

</body>
</html>

