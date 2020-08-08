<?php
if ((function_exists('session_status')
    && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    session_start();
}
include "../db/connect.php";
$row = mysqli_query(mysqli_connect('localhost', 'root', '', 'ramr'), "select max(teacher_id) as id from last_ids");
$row = mysqli_fetch_assoc($row);
// echo $row['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$type = $_POST['password'];
// $user_type = $_POST['user_type'];
$position = $_POST['position'];
$remember = $_POST['remember_me'];
if ($remember) {
    $remember_me = 1;
} else {
    $remember_me = 0;
}
$sql = "insert into teacher(first_name,last_name,email,address,address2,city,remember_me,password,position,type) values('$first_name','$last_name','$email','$address','$address2','$city','$remember_me','$password','$position','$type')";
if (mysqli_query($conn, $sql)) {
    $_SESSION['teacher_login'] = $row['id'] + 1;
    $nextId = $row['id'] + 1;
    mysqli_query($conn, "insert into last_ids(teacher_id,student_id) values('$nextId','0')");
    $_SESSION['current_user'] = $password;
    $_SESSION['student_login'] = '';
    $_SESSION['teacher_id'] = $row['id'] + 1;
    $_SESSION['another_teacher_login'] = '';
    header("location:../index.php"); // Redirecting To Other Page
}
