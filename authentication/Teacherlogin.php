<?php
if ((function_exists('session_status')
    && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    session_start();
}
// require_once "../db/connect.php";
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$error = '';
// print_r($_POST);
if (isset($_POST['teacher_login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from teacher where email='$email' and password='$password'";
        $search = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($search);
        $rows = mysqli_num_rows($search);
        print_r($rows);
        if ($rows == 1) {
            $_SESSION['teacher_login'] = $row['id']; // Initializing Session
            $_SESSION['current_user'] = $row['type'];
            $_SESSION['teacher_id'] = $row['id'];
            $_SESSION['student_login'] = '';
            $_SESSION['another_teacher_login'] = '';
            header("location:../index.php"); // Redirecting To Other Page
        } else {
            $error = "Email or Password is invalid";
            header('location:../index.php');
        }
    }
}
