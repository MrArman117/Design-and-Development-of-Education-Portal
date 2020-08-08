<?php
print_r($_POST);
$teacher_name = $_POST['teacher_name'];
$name = $_POST['name'];
$topic = $_POST['topic'];
$userfile = $_FILES['userfile'];
print_r($userfile);
$filepath = "events/" . $userfile['name'];
$upload_file = $_POST['events'];
$teacher_id = $teacher_login;
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
// while ($row = mysqli_fetch_array($result)) {
//     echo $row['teacher_id'];
// }
// print_r([$userfile, $_POST]);
// print_r([$teacher_id, $description, $userfile, $upload_file, $course, $filepath]);
// if (isset($upload_file)) {
//     // echo "works";
//     if (isset($course)) {
//         // echo "works";
//         if ($course == "programming") {
//             // echo "works1";
//             $sql = "insert into upload(filepath,description,course_type,teacher_id) values('$filepath','$description','$course','$teacher_id')";
//             // echo $sql;
//             mysqli_query($conn, $sql);

//             move_uploaded_file($userfile['tmp_name'], $filepath);
//             header('location:ProgrammingTeacher.php');
//         }
//         if ($course == "software_engineering") {
//             $sql = "insert into upload(filepath,description,course_type,teacher_id) values('$filepath','$description','$course','$teacher_id')";
//             mysqli_query($conn, $sql);
//             move_uploaded_file($userfile['tmp_name'], $filepath);
//             header('location:SoftwareEngineering.php');
//         }
//     }
// }

$sql = "insert into events(name,teacher_name,filepath,topic) values('$name','$teacher_name','$filepath','$topic')";
move_uploaded_file($userfile['tmp_name'], $filepath);
$query = mysqli_query($conn, $sql);
if ($query) {
    header('location:events.php');
} else {
    header('location:events.php');
}
