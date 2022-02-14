<?php
session_start();

if (isset($_POST['submit'])) {
    include 'creatingdb.php';


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $usergroup = mysqli_real_escape_string($conn, $_POST['user_group']);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE  username='$username'
                          AND password='$password' AND usergroup='$usergroup'");

    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($sql);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if ($count == 1) {

        if (!empty($username) && !empty($password) && !empty($usergroup == 'Systems Administrator')) {
            header("LOCATION:systemadmin_dashboard.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Administrator')) {
            header("LOCATION:administratordashboard.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Front office')) {
            header("LOCATION:frontoffice.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Accounts ')) {
            header("LOCATION:accounts.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Management')) {
            header("LOCATION:managementdash.php");
        }


    } else {
        header("LOCATION:login_error.php");
    }
}
?>
