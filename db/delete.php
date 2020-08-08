<?php 

include 'connect.php';
$id = $_GET['id'];
$delete = "delete from upload where id='$id'";
mysqli_query($conn,$delete);
$sql = "select * from upload where id = '$id'";
$search = mysqli_query($conn,$sql);
$user_id = mysqli_fetch_assoc($search)['user_id'];
// header('location:ProgrammingTeacher.php?id='.$user_id.'');
print_r([$user_id,$sql]);