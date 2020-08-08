
<?php
if (isset($_POST['update_student'])) {
    $fn = $_POST['first_name'];
    $ln = $_POST['last_name'];
    $el = $_POST['email'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    // $id =
    $id = $_POST['student_id'];
    if (mysqli_query(mysqli_connect('localhost', 'root', '', 'ramr'), "update student set first_name='$fn',last_name='$ln',email='$el',address='$add',city='$city' where id= '$id'")) {
        $_SESSION['student_login'] = $fn . ' ' . $ln;
        $_SESSION['current_user'] = $fn;
        header("location:/pages/student/studentProfile.php?id=$id");
    }
}
?>
