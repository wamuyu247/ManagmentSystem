
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
        <h2 class="text-center text-uppercase text-primary">New User</h2>
        <form action="try.php" class="form-group" method="post">
            <table class="table table-striped">


                <tr>
                    <td align="right"><label for="first_name" class="text-primary"><b>First Name : </b></label></td>
                    <td><input type="text" name="first_name" class="form-control" ></td>
                </tr>
                <tr>
                    <td align="right"><label for="middle_name" class="text-primary"><b>Middle name : </b></label></td>
                    <td><input type="text" name="middle_name" class="form-control" "></td>
                </tr>
                <tr>
                    <td align="right"><label for="last_name" class="text-primary"><b>Other Names : </b></label></td>
                    <td><input type="text" name="last_name" class="form-control" ></td>
                </tr>
                <tr>
                    <td align="right"><label for="department" class="text-primary"><b>Department : </b></label></td>
                    <td><input type="text" name="department" class="form-control" ></td>
                </tr>

                <tr>
                    <td align="right"><label for="" class="text-primary"><b>Username : </b></label></td>
                    <td><input type="text" name="username" class="form-control" required></td>
                </tr>
                <tr>
                    <td align="right"><label for="" class="text-primary"><b>Password : </b></label></td>
                    <td><input type="password" name="password" class="form-control" required></td>
                </tr>
                <tr>
                    <td align="right"><label for="" class="text-primary"><b>User Group : </b></label></td>
                    <td>
                        <select name="user_group" id="user_group" class="form-control" required>
                            <option value="System Administrator">System Administrator</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Front office">Front office</option>
                            <option value="Accounts">Accounts</option>
                            <option value="Management">Management</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit" class="btn btn-primary">Save</button>
                        &nbsp;
            </table>
        </form>
    </div>
    </body>

