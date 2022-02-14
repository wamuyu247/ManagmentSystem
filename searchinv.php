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
    <h2 class="text-center text-uppercase"> Enter  Code
    </h2>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <form action="reportinv.php" method="post">

                <label for="" style="color: white"><b>Date From</b></label>
                <input type="date" name="jDateFrom" class="form-control" required>
                <label for="" style="color: white"><b>Date To</b></label>
                <input type="date" name="jDateTo" class="form-control" required>
                <div class="buttons" >
                    <button class="btn btn-primary">VIEW REPORT</button>
                </div>
            </form>
            <div class="col-md-3"></div>

        </div>
    </div>

</body>
</html>