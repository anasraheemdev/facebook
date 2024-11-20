<?php
include "./config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

session_start();


$query = "INSERT INTO users(name,email,phone,password,dob,gender) values ('{$name}','{$email}','{$phone}','{$password}','{$dob}','{$gender}')" or die();

$insert = mysqli_query($connection,$query);
$_SESSION["username"] = $name;
header("Location: http://localhost/facebook/home.php");

?>