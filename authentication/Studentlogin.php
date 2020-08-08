<?php
if ((function_exists('session_status')
    && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    session_start();
}
// include "../db/connect.php";
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$error = '';
// echo "it's works";
if (isset($_POST['student_login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
        // echo $_POST['email'] . ' ' . $_POST['password'];
    } else {
        echo 'else section';
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from student where email='$email' and password='$password'";
        $search = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($search);
        $rows = mysqli_num_rows($search);
        if ($rows == 1) {
            $_SESSION['student_login'] = $row['id']; // Initializing Session
            $_SESSION['current_user'] = $row['type'];
            $_SESSION['teacher_login'] = '';
            $_SESSION['another_student_login'] = '';
            $_SESSION['student_id'] = $row['id'];
            header("location:../index.php"); // Redirecting To Other Page
        } else {
            $error = "Email or Password is invalid";
            header('location:../index.php');
        }
    }
}
function fetchAssoc($link, $sql)
{
    $temp  = mysqli_query($link, $sql);
    $assoc = mysqli_fetch_assoc($temp);
    return $assoc;
}
function fetchArray($link, $sql)
{
    $temp  = mysqli_query($link, $sql);
    $array = mysqli_fetch_array($temp);
    return $array;
}
function fetchName($id)
{
    $conn = mysqli_connect('localhost', 'root', '', 'ramr');
    $temp  = mysqli_query($conn, "select first_name,last_name from teacher where id='$id'");
    $array = mysqli_fetch_assoc($temp);
    $fullName = $array['first_name'] . ' ' . $array['last_name'];
    return $fullName;
}
