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
    <h2 class="text-center text-uppercase">Success</h2>
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
            $idnumber = mysqli_real_escape_string($conn,$_POST['inquiry_id']);
            $date=mysqli_real_escape_string($conn,$_POST['date']);
            $firstname = mysqli_real_escape_string($conn,$_POST['first_name']);
            $othernames =mysqli_real_escape_string($conn,$_POST['other_name']);
            $telephone =mysqli_real_escape_string($conn,$_POST['telephone']);
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $course=mysqli_real_escape_string($conn,$_POST['course']);
            $How=mysqli_real_escape_string($conn,$_POST['How']);
            $usergroup=mysqli_real_escape_string($conn,$_POST['comment']);


            //Using MYSQL INSERT statement to post the data to the course table in he db
            $sql= "insert into inquiry(inquiry_id,date,first_name,other_name,telephone,email,course,How,comment)
values ('$idnumber','$date','$firstname','$othernames','$telephone','$email','$course','$How','$usergroup')";

            if($conn->query($sql)==true)
            {
                print "<p>inquiry successfully</p>";
                print"<a href='inquiry.php' class='btn btn-success'> Add another inquiry</a>";

            }
            else{
                print "<p>students not added</p>";
                print"<a href='inquiry.php' class='btn btn-danger'>Try Again</a>";
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




