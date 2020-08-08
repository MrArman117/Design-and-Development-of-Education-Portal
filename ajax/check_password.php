<?php
$password = $_POST['password'];

include '../db/connect.php';
// echo 'works';
$result = mysqli_query($conn, "select * from student where password='$password'");
$fetch_Assoc = mysqli_fetch_assoc($result);
// echo $result;
// print_r($fetch_Assoc);
// echo $fetch_Assoc['password'];
if (empty($fetch_Assoc['password'])) {
    echo "f";
} else {
    echo 't';
}
