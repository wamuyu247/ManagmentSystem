<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="cstyle/cs.css">
    <script src="bootstrap4/js/jquery-3.6.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<p class="text-center">
    <img src="images/logo.png" alt="Corporates" width="400" height="250">
</p>
<div class="heading">
    <h2 class="text-center">Student Management Information System .</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">

                            <label for="">username : </label>
                        </td>
                        <td>
                            <input type="text" name="username" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Password : </label>
                        </td>
                        <td>
                            <input type="password" name="password" class="form-control" required>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-right">
                            <label for="">User group </label>
                        </td>
                        <td>
                            <select name="user_group" id="user_group" class="form-control" required>
                                <option value="System Administrator">Systems Administrator</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Front office">Front office</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Management">Management</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <input type="submit" name="submit" value="Login" class="btn btn-primary">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
<?php
session_start();

if (isset($_POST['submit'])) {
    include 'db_connect.php';


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $usergroup = mysqli_real_escape_string($conn, $_POST['user_group']);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE  username='$username'
                          AND password='$password' AND user_group='$usergroup'");

    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($sql);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if ($count == 1) {

        if (!empty($username) && !empty($password) && !empty($usergroup == 'System Administrator')) {
            header("LOCATION:systemadmin_dashboard.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup =='Administrator')) {
            header("LOCATION:administratordashboard.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Front office')) {
            header("LOCATION:frontoffice.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Accounts')) {
            header("LOCATION:accounts.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Management')) {
            header("LOCATION:managementdash.php");
        }


    } else {
        header("LOCATION:login_error.php");
    }
}
?>
