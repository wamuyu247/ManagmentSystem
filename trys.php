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
<body  background="images/photo.jpg" >

<div class="container">


    <h2 class="text-center text-uppercase"> STAFF
    </h2>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6" style="background: black">
            <form action="" method="post">

                <label for="" style="color: hotpink"><b>id_number</b></label>
                <input type="number" name="id_number" placeholder="*enter your id_number" required class="form-control">
                <label for=""  style="color: hotpink">first name</label>
                <input type="text" name="first_name" placeholder="*enter your first name" required class="form-control">
                <label for=""  style="color: hotpink"><b>middle name</b></label>
                <input type="text" name="middle_name" placeholder="*enter your middle name" required class="form-control" >
                <label for=""  style="color: hotpink"><b>last name</b></label>
                <input type="text" name="last_name" placeholder="*enter your last name" required class="form-control" >
                <label for=""  style="color: hotpink"><b>Gender</b></label><br>
                Female <input type="radio" name="geder"  value="female"required class="form-control" >
                Male  <input type="radio" name="geder"  value="male" required class="form-control" >
                <br><br><br>
                <label for=""  style="color: hotpink"><b>position</b></label>
                <select name="position" id="" required class="form-control">
                    <option value="System Administrator">System Administrator</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Front office">Front office</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Management">Management</option>
                    <option value="Lecturer">Lecturer</option>
                    <option value="Career counselor">Career counselor</option>
                    <option value="Librarian">Librarian</option>
                    <option value="Receptionist">Receptionist</option>
                    <option value="Janitor">Janitor</option>

                </select>
                <label for=""  style="color: hotpink">department</label>
                <input type="text" name="department" placeholder="*your department" class="form-control" required>


                <label for=""  style="color: hotpink"><b>join date</b></label>
                <input type="date" name="join_date" placeholder="*join date" required class="form-control">


                <div class="buttons">
                    <button type="submit" class="btn btn-success">ADD NEW</button>
                    &nbsp;
                    &nbsp;
                    <a href="searchstaff.php" class="btn btn-info">UPDATE</a>

                </div>
                <hr>

            </form>
        </div>

    </div>
</div>

</body>
</html>





















