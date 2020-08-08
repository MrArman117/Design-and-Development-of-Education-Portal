<?php
$id = $_GET['id'];
// echo $id;
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$search_file = mysqli_query($conn, "select * from upload where id='$id'");
$fetchAssoc = mysqli_fetch_assoc($search_file);
$filename = $fetchAssoc['filepath'];
// print_r($fetchAssoc);
// echo $filename;
$old = getcwd();
$file =  $old . '/' . $filename;
unlink($file);
$sql = mysqli_query($conn, "delete from upload where id = '$id'");

header('location:ProgrammingTeacher.php');
