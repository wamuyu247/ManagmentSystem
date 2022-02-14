<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry Report</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="cstyle/cs.css">
    <script src="bootstrap4/js/jquery-3.6.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-bordered table-striped table-responsive-md">
        <tr>
            <th colspan="9">Enquiry REPORT</th>
        </tr>
        <tr>
            <th>Enquiry Id</th>
            <th>Date</th>
            <th>First Name</th>
            <th>Other Name</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Course</th>
            <th>How did you know about us</th>
            <th>Comment</th>
        </tr>
        <?php
        $conn=mysqli_connect("localhost","root","","inceptor");
        if(!$conn){
            die("Database connection error".mysqli_connect_error());
        }
        $datefrom=mysqli_real_escape_string($conn,$_POST['jDateFrom']);
        $dateto=mysqli_real_escape_string($conn,$_POST['jDateTo']);
        $sql="select * from inquiry where date >='$datefrom' and date<= '$dateto'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while (($row=$result->fetch_assoc()))
            {
                ?>
                <tr>
                    <td><?php print $row['inquiry_id'] ?></td>
                    <td><?php print $row['date'] ?></td>
                    <td><?php print $row['first_name'] ?></td>
                    <td><?php print $row['other_name'] ?></td>
                    <td><?php print $row['telephone'] ?></td>
                    <td><?php print $row['email'] ?></td>
                    <td><?php print $row['course'] ?></td>
                    <td><?php print $row['How did you know about us'] ?></td>
                    <td><?php print $row['comment']?></td>
                </tr>

                <?php
            }
            mysqli_close($conn);
        }
        ?>

    </table>
    <div class="buttons">
        <a href="searchinquiryJdate.php" class="btn btn-outline-primary">select join date</a>
    </div>
</div>

</body>
</html>

