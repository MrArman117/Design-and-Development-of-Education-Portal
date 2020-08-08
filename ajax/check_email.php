<?php
$email = $_POST['email'];
$password = $_POST['password'];
include '../db/connect.php';
// echo 'works';
$result = mysqli_query($conn, "select * from student where email='$email' and password='$password'");
$fetch_Assoc = mysqli_fetch_assoc($result);
// echo $result;
// print_r($fetch_Assoc);
if (empty($fetch_Assoc['email'])) {
    echo "f";
} else {
    echo 't';
}
