<?php
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn){
    die("Database db Failed" . mysqli_error($conn));
}
$select_conn = mysqli_select_db($conn, 'inceptor');
if (!$select_conn){
    die("Database Selection Failed" . mysqli_error($conn));
}