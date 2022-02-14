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
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <?php

            $conn = mysqli_connect("localhost", "root", "" ,"inceptor");
            if (!$conn){
                die("Database connection error : " . mysqli_connect_error());
            }
            //removing SQL injections

            $firstname =mysqli_real_escape_string($conn,$_POST['first_name']);
            $middlename =mysqli_real_escape_string($conn,$_POST['middle_name']);
            $lastname =mysqli_real_escape_string($conn,$_POST['last_name']);
            $department=mysqli_real_escape_string($conn,$_POST['department']);
            $username=mysqli_real_escape_string($conn,$_POST['username']);
            $password=mysqli_real_escape_string($conn,$_POST['password']);
            $usergroup=mysqli_real_escape_string($conn,$_POST['user_group']);


            //Using MYSQL INSERT statement to post the data to the course table in he db
            $sql= "insert into users(first_name,middle_name,last_name,department,username,password,user_group)
values ('$firstname','$middlename','$lastname','$department','$username','$password','$usergroup')";

            if($conn->query($sql)==true)
            {
                print "<p>User added successfully</p>";
                print"<a href='users.php' class='btn btn-success'> Add another user</a>";

            }
            else{
                print "<p>User not added</p>";
                print"<a href='users.php' class='btn btn-danger'>Try Again</a>";
            }
            //closing the database connection
            mysqli_close($conn);
            ?>




        </div>

    </div>
</div>

</body>
</html>


