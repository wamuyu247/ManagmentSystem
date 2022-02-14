<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="cstyle/cs.css">
    <script src="bootstrap4/js/jquery-3.6.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>

<div class="container">


    <h2 class="text-center text-uppercase"> INVOICE
    </h2>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6" style="background: black">
            <form action="new-invoice.php" method="post">

                <label for=""  style="color: hotpink"><b>date</b></label>
                <input type="date" name="invoice_date" placeholder="*date" required class="form-control">

                <label for=""  style="color: hotpink">first name</label>
                <input type="text" name="first_name" placeholder="*enter your first name" required class="form-control">
                <label for=""  style="color: hotpink"><b>other name</b></label>
                <input type="text" name="other_name" placeholder="*enter your other name" required class="form-control" >
                <label for=""  style="color: hotpink"><b>Course</b></label>
                <input type="text" name="course" placeholder="*enter Course " required class="form-control" >
                <label for=""  style="color: hotpink"><b>tution fees</b></label>
                <input type="number" name="tution_fees" placeholder="*enter fees" required class="form-control">
                <label for=""  style="color: hotpink"><b>registration fees</b></label>
                <input type="number" name="registration_fees" placeholder="*enter fees" required class="form-control">
                <label for=""  style="color: hotpink">accomodation_fees</label>
                <input type="number" name="accomodation_fees" placeholder="*your fees" class="form-control" required>
                <label for="" style="color: hotpink">library fees</label>
                <input type="number" name="library_fees" placeholder="*your fees" class="form-control" required>





                <div class="buttons">
                    <button type="submit" class="btn btn-success">ADD NEW</button>
                    &nbsp;
                    &nbsp;

                </div>
                <hr>

            </form>
        </div>

    </div>
</div>

</body>
</html>

