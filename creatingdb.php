<?php

$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die("Database connection error : " . mysqli_connect_error());
}
//create a database
$sql="create database inceptor";
//checking whether the data base exists

