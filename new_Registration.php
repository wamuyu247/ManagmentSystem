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
            $adnumber = mysqli_real_escape_string($conn,$_POST['admission_number']);
            $date=mysqli_real_escape_string($conn,$_POST['date']);
            $firstname = mysqli_real_escape_string($conn,$_POST['first_name']);
            $othernames =mysqli_real_escape_string($conn,$_POST['other_name']);
            $gender =mysqli_real_escape_string($conn,$_POST['gender']);
            $datebirth=mysqli_real_escape_string($conn,$_POST['date_birth']);
            $address=mysqli_real_escape_string($conn,$_POST['postal_address']);
            $telephone=mysqli_real_escape_string($conn,$_POST['telephone']);
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $namekin=mysqli_real_escape_string($conn,$_POST['next_of_kin_name']);
            $telephonekin=mysqli_real_escape_string($conn,$_POST['kin_telephone']);
            $course=mysqli_real_escape_string($conn,$_POST['course_enrolled']);
            $grade=mysqli_real_escape_string($conn,$_POST['kcse_grade']);
            $level=mysqli_real_escape_string($conn,$_POST['education_level']);
            $college=mysqli_real_escape_string($conn,$_POST['college_attended']);


            //Using MYSQL INSERT statement to post the data to the course table in he db
            $sql= "insert into Registration(admission_number,date,first_name,other_name,gender,date_birth,postal_address,telephone,email,next_of_kin_name,kin_telephone,course_enrolled,kcse_grade,
                         education_level,college_attended)
values ('$adnumber','$date','$firstname','$othernames','$gender','$datebirth','$address','$telephone','$email','$namekin','$telephonekin',
 '$course','$grade','$level','$college')";

            if($conn->query($sql)==true)
            {
                print "<p>Registered successfully</p>";
                print"<a href='Registration.php' class='btn btn-success'> Add another course</a>";

            }
            else{
                print "<p>Student not registerd</p>";
                print"<a href='Registration.php' class='btn btn-danger'>Try Again</a>";
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





