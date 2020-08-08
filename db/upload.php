<?php
include 'connect.php';
$filename = $_FILES['userfile']['name'];
$updir = 'uploads/';
$fulldir = $updir.$filename;
move_uploaded_file($_FILES['userfile']['tmp_name'],$fulldir);
$user_id = $_POST['user_id'];
$description = $_POST['description'];
// $sql = "insert into upload(user_id,filepath,description) values('$user_id','$filename','$description')";
// echo $sql;
print_r($_FILES);
print_r([$fulldir,$filename,$user_id]);
// $query = mysqli_query($conn,$sql);
// header("location:ProgrammingTeacher.php?id=$user_id");
