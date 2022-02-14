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


    <h2 class="text-center text-uppercase"> STUDENT REGISTRATION
    </h2>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6" style="background: black">
            <form action="new_Registration.php" method="post">

                <label for="" style="color: hotpink"><b>Admission number</b></label>
                <input type="text" name="admission_number" placeholder="*enter your admission_number" required class="form-control">
                <label for=""  style="color: hotpink"><b>date</b></label>
                <input type="date" name="date" placeholder="*date" required class="form-control">

                <label for=""  style="color: hotpink">first name</label>
                <input type="text" name="first_name" placeholder="*enter your first name" required class="form-control">
                <label for=""  style="color: hotpink"><b>other name</b></label>
                <input type="text" name="other_name" placeholder="*enter your other name" required class="form-control" >
                <label for=""  style="color: hotpink"><b>Gender</b></label>
                <input type="radio" name="gender" placeholder="*enter gender " required class="form-control" >
                <input type="radio" name="gender" placeholder="*enter gender" required class="form-control" >
                <br><br><br><br>
                <label for=""  style="color: hotpink"><b>Date of birth</b></label>
                <input type="date" name="date_birth" placeholder="*enter birth date " required class="form-control" >
                <label for=""  style="color: hotpink"><b>Postal address</b></label>
                <input type="number" name="postal_address" placeholder="*enter address " required class="form-control" >
                <label for=""  style="color: hotpink"><b>Telephone Number</b></label>
                <input type="number" name="telephone" placeholder="*enter telephone " required class="form-control" >
                <label for=""  style="color: hotpink"><b>email</b></label>
                <input type="email" name="email" placeholder="*enter your email" required class="form-control">
                <label for=""  style="color: hotpink">Next of Kin Name</label>
                <input type="text" name="next_of_kin_name" placeholder="*their name" class="form-control" required>
                <label for=""  style="color: hotpink">Next of Kin telephone</label>
                <input type="number" name="kin_telephone" placeholder="*their telephone" class="form-control" required>
                <label for=""  style="color: hotpink">Course enrolled</label>
                <input type="text" name="course_enrolled" placeholder="*their course" class="form-control" required>
                <label for=""  style="color: hotpink">KCSE Grade</label>
                <input type="text" name="kcse_grade" placeholder="*your grade" class="form-control" required>
                <label for="" style="color: hotpink">Education level</label>
                <select name="education_level" id="" value="education_level" class="form-control">
                    <option value="High School">High School</option>
                    <option value="College">College</option>
                    <option value="University">University</option>

                </select>
                <label for="" style="color: hotpink">College/University attended</label>
                <input type="text" name="college_attended" placeholder="*name" required class="form-control">




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

