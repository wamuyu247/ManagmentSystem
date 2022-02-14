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
<body background="images/photo3.jpg">
<div class="container">
    <h2 class="text-center text-uppercase"> Enter Courses Code
    </h2>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <form action="displaystaffU.php" method="post">
                <select name="staff_id" id="" class="form-control" required>
                    <?php
                    $conn=mysqli_connect("localhost","root","","inceptor");
                    if(!$conn){
                        die("Database connection Error:".mysqli_connect_error());
                    }
                    $sql="select staff_id from staff_details";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){

                            ?>
                            <option value="<?php echo $row['staff_id'];?>"><?php echo $row['staff_id'];?></option>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </select>
                <hr>
                <div class="buttons">
                    <button type="submit" class="btn btn-success">search</button>
                    &nbsp;&nbsp;
                    <a href="staff_details.php" class="btn btn-outline-danger" >cancel search</a>
                </div>
                <hr>

            </form>
        </div>
        <div class="col-md-3"></div>

    </div>
</div>

</body>
</html>

