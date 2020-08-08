<?php
// print_r($_POST);
if (isset($_POST['notification'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'ramr');
	$title = $_POST['title'];
	$teacher_name = $_POST['teacher_name'];
	$type = $_POST['type'];
	$sql = "insert into notification(title,teacher_name,type) values('$title','$teacher_name','$type')";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		header('location:notification.php');
	} else {
		header('location:notification.php');
	}
} else {
	header('location:notification.php');
}
