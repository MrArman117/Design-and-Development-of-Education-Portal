<?php

if (isset($_POST['upload_photo'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'ramr');
    $target_dir = "photos/";
    $id = $_POST['student_id'];
    $sql_query = "select * from student  where id = '$id'";
    $result = mysqli_query($conn, $sql_query);
    $fetchAssoc = mysqli_fetch_assoc($result);
    $photo_name = $fetchAssoc['photo'];
    // echo "photos/$photo_name";
    unlink("photos/$photo_name");
    $target_file = $target_dir . $_FILES["upload_profile"]["name"];
    if (move_uploaded_file($_FILES["upload_profile"]["tmp_name"], $target_file)) {
        $filepath = $_FILES['upload_profile']['name'];
        $query = "update student set photo='$filepath' where id='$id'";
        mysqli_query($conn, $query);
        header("location:/pages/student/studentProfile.php?id=$id");
    }
}
