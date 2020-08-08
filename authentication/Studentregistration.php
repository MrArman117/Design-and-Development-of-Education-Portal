<?php
if ((function_exists('session_status')
    && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    session_start();
}
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$row = mysqli_query(mysqli_connect('localhost', 'root', '', 'ramr'), "select max(student_id) as id from last_ids");
$row = mysqli_fetch_assoc($row);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$dept = $_POST['dept'];
$type = $_POST['password'];
$remember = 1;
if ($remember) {
    $remember_me = 1;
} else {
    $remember_me = 0;
}
$sql = "insert into student(first_name,last_name,email,address,address2,city,remember_me,password,dept,type) values('$first_name','$last_name','$email','$address','$address2','$city','$remember_me','$password','$dept','$type')";
if (mysqli_query($conn, $sql)) {
    $_SESSION['student_login'] = $row['id'] + 1;
    $_SESSION['current_user'] = $password;
    $nextId = $row['id'] + 1;
    mysqli_query($conn, "insert into last_ids(teacher_id,student_id) values('0','$nextId')");
    $_SESSION['teacher_login'] = '';
    $_SESSION['another_student_login'] = '';
    $_SESSION['student_id'] = $row['id'] + 1;
    header("location:../index.php"); // Redirecting To Other Page
}
