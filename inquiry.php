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
<body>

<div class="container">


    <h2 class="text-center text-uppercase"> STAFF
    </h2>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6" style="background: black">
            <form action="new_inquiry.php" method="post">

                <label for="" style="color: hotpink"><b>inquiry_id</b></label>
                <input type="text" name="inquiry_id" placeholder="*enter your inquiry_id" required class="form-control">
                <label for=""  style="color: hotpink"><b>date</b></label>
                <input type="date" name="date" placeholder="*date" required class="form-control">

                <label for=""  style="color: hotpink">first name</label>
                <input type="text" name="first_name" placeholder="*enter your first name" required class="form-control">
                <label for=""  style="color: hotpink"><b>other name</b></label>
                <input type="text" name="other_name" placeholder="*enter your other name" required class="form-control" >
                <label for=""  style="color: hotpink"><b>Telephone Number</b></label>
                <input type="number" name="telephone" placeholder="*enter telephone " required class="form-control" >
                <label for=""  style="color: hotpink"><b>email</b></label>
                <input type="email" name="email" placeholder="*enter your email" required class="form-control">
                <label for=""  style="color: hotpink">course</label>
                <input type="text" name="course" placeholder="*your course" class="form-control" required>
                <label for="" style="color: hotpink">How did you know about us</label>
                <select name="How" id="" value="How" class="form-control">
                    <option value="Newspaper">Newspaper</option>
                    <option value="Television">Television</option>
                    <option value="Student">Student</option>
                    <option value="Friend">Friend</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Staff Member">staff Member</option>
                    <option value="Social media">Social Media</option>
                </select>
                <label for="" style="color: hotpink">comment</label>
                <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>



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
