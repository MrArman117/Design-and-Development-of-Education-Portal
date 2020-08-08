<?php
// include '../db/connect.php';
if ((function_exists('session_status')
    && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    session_start();
}
$teacher_login = isset($_SESSION['teacher_login']) ? $_SESSION['teacher_login'] : '';
$student_login = isset($_SESSION['student_login']) ? $_SESSION['student_login'] : '';
// $sql = "select * from teacher where last_name='$last_name'";
// $navbar = mysqli_query($conn, $sql);
// $usertype = mysqli_fetch_assoc($navbar)['usertype'];
// $navbars = mysqli_fetch_assoc($navbar);
if ($teacher_login) {
    $sql = "select * from teacher where id='$teacher_login'";
    $SearchTeacher = mysqli_query(mysqli_connect("localhost", "root", "", "ramr"), $sql);
    $SearchTeacher = mysqli_fetch_assoc($SearchTeacher);
}
// print_r($StudentName);
if ($student_login) {
    $sql = "select * from student where id='$student_login'";
    $SearchStudent = mysqli_query(mysqli_connect("localhost", "root", "", "ramr"), $sql);
    $SearchStudent = mysqli_fetch_assoc($SearchStudent);
}
?>
<div class="menu-area">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#47535af5!important">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">School of Science<span class="caret"> </span></a>
                    <ul class="dropdown-menu bg-dark">
                        <?php if (empty($_SESSION['teacher_login'])) : ?>
                            <li><a class="nav-link" href="/pages/student/CSECourse.php">CSE</a> </li>
                        <?php else : ?>
                            <li><a class="nav-link" href="/pages/teacher/CSECourses.php">CSE</a> </li>
                        <?php endif; ?>
                        <li><a class="nav-link" href="#">EEE</a> </li>
                        <li><a class="nav-link" href="#">Civil</a> </li>
                        <li><a class="nav-link" href="#">Textile</a> </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/teacher/notification.php">Notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/teacher/events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">Members<span class="caret"> </span></a>
                    <ul class="dropdown-menu member bg-dark">
                        <li> <a class="nav-link" href="/pages/teacher/membersTeacher.php">Teachers</a></li>
                        <li> <a class="nav-link" href="/pages/student/membersStudents.php">Students</a></li>
                    </ul>
                </li>
            </ul>
            <div>
                <a href="/pages/<?php if ($student_login) : ?>student/studentProfile.php?id=<?php echo $SearchStudent['id']; ?>" <?php endif ?><?php if ($teacher_login) : ?>teacher/teacherProfile.php?id=<?php echo $SearchTeacher['id']; ?>" <?php endif ?>><span><span style="color:yellow;">Welcome, </span><span style="color:#abfcb1;"> <?php echo empty($_SESSION['teacher_login']) ? $SearchStudent['first_name'] . ' ' . $SearchStudent['last_name'] : ucfirst($SearchTeacher['first_name'] . ' ' . $SearchTeacher['last_name']);  ?> (<?php echo empty($_SESSION['teacher_login']) ? 'Student' : 'Teacher'; ?>)</span> </span> </a>

            </div>
            <a href="/pages/logout.php" class="mr-3"> Logout</a>
            
        </div>
    </nav>
</div>