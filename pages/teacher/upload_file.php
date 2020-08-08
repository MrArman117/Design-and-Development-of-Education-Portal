<?php
$teacher_id = $_POST['teacher_id'];
$description = $_POST['description'];
$userfile = $_FILES['userfile'];
$filepath = "uploads/" . $userfile['name'];
$upload_file = $_POST['upload_file'];
$course = $_POST['course'];
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$all_uploads = "select * from upload where teacher_id='$teacher_id'";
$result = mysqli_query($conn, $all_uploads);
// while ($row = mysqli_fetch_array($result)) {
//     echo $row['teacher_id'];
// }
// print_r([$userfile, $_POST]);
// print_r([$teacher_id, $description, $userfile, $upload_file, $course, $filepath]);
if (isset($upload_file)) {
    // echo "works";
    if (isset($course)) {
        // echo "works";
        if ($course == "programming") {
            // echo "works1";
            $sql = "insert into upload(filepath,description,course_type,teacher_id) values('$filepath','$description','$course','$teacher_id')";
            // echo $sql;
            mysqli_query($conn, $sql);

            move_uploaded_file($userfile['tmp_name'], $filepath);
            header('location:ProgrammingTeacher.php');
        }
        if ($course == "software_engineering") {
            $sql = "insert into upload(filepath,description,course_type,teacher_id) values('$filepath','$description','$course','$teacher_id')";
            mysqli_query($conn, $sql);
            move_uploaded_file($userfile['tmp_name'], $filepath);
            header('location:SoftwareEngineering.php');
        }
    }
}
