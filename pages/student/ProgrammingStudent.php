<?php
// $id = $_GET['id'];
include '../../db/connect.php';
include '../../authentication/Studentlogin.php';
include '../heading.php';
include '../navbar.php';
$id = $_GET['id'];
$fullName = explode(" ", $_SESSION['student_login']);
$firstName = $fullName[0];
//$lastName = $fullName[1];
// $queryStudent = mysqli_query($conn, "select * from student where first_name='$firstName' and last_name='$lastName'");
// $student_info = mysqli_fetch_assoc($queryTeacher);
// $degrees = mysqli_query($conn, "select * from teacher_degree where teacher_id='$teacher_info[id]'");
// $degrees2 = mysqli_query($conn, "select * from teacher_degree where teacher_id='$teacher_info[id]'");
$queryuploads = mysqli_query($conn, "select * from upload where course_type='programming' and teacher_id='$id'");
// $queryuploads = fetchAssoc($conn, "select * from upload where course_type='programming'");
?>
<h1 style="font-size:30px;text-align:center; background-color:#9aa7ad;height:45px;font-family:sans-serif;"> Programming Language </h1>
<!-- 
<p style="font-size:25px; font-family:vardana; background-color:#cfe095; color:black;padding:17px">

	Database management system (DBMS) is system software for creating and managing databases. The DBMS provides users and programmers with a systematic way
         to create, retrieve, update and manage data.A DBMS makes it possible for end users to create, read, update and delete data in a database.

</p> -->
<div class="container mb-10">

    <div class="row no-gutters">
        <div class="col-12 col-sm-6 col-md-8">
            <h4>List Files</h4>
            <?php while ($ro = mysqli_fetch_array($queryuploads)) :   ?>
                <span><b><?php echo $ro['description'] . '    '; ?></b></span>
                <a href="/pages/teacher/<?php echo $ro['filepath'] . '  '; ?>">Download</a>
                <small><span>uploaded by <i><?php echo fetchName($ro['teacher_id']); ?></i></span></small>
                <br>
            <?php endwhile; ?>
        </div>
    </div>

</div>
<?php
include '../footer.php';
?>