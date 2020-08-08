<?php
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$target_dir = "uploads/";
$target_file = $target_dir . $_FILES["userfile"]["name"];
if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
    $filepath = $_FILES['userfile']['name'];
    $query = "insert into upload(filepath,description,course_type,teacher_id) values('$filepath','$_POST[description]','programming','$_POST[teacher_id]')";
    mysqli_query($conn, $query);
}


// echo 'data is inserted';
echo $target_file;
