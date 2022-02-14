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
    <h2 class="text-center">Search</h2>
    <form action="users.php" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <td class="text-right">
                    <label for="user_id">Staff ID : </label>
                </td>
                <td>
                    <input type="number" class="form-control" name="user_id">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button class="btn btn-success" type="submit">Search</button>
                    <a href="login.php" class="btn btn-primary">Login</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
