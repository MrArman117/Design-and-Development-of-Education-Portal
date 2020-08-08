<?php
include '../../authentication/Teacherlogin.php';
include '../heading.php';
include '../navbar.php';
$id = $teacher_login;
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
// echo $id;
$queryTeacher = mysqli_query($conn, "select * from teacher where id='$id'");
$queryTeacherAssoc = mysqli_fetch_assoc($queryTeacher);
// print_r($queryTeacherAssoc);
$type = $queryTeacherAssoc['type'];
// print_r([$_SESSION['teacher_login'],  $type, $_SESSION['current_user']]);
$queryNotification = mysqli_query($conn, "select * from events order by id desc");
// $all_notification = mysqli_fetch_all($queryNotification);
// print_r($queryTeacherAssoc);
?>
<h1 style="font-size:30px;text-align:center; background-color:#a79ea9;color: #353c34;height:45px;font-family:sans-serif;"> Events </h1>
<!-- 
<p style="font-size:25px; font-family:vardana; background-color:#cfe095; color:black;padding:17px">

	Database management system (DBMS) is system software for creating and managing databases. The DBMS provides users and programmers with a systematic way to create, retrieve, update and manage data.A DBMS makes it possible for end users to create, read, update and delete data in a database.

</p> -->
<div class="container mb-10">

  <div class="row">
    <div class="col-md-6">
      <?php if (!$_SESSION['student_login']) : ?>
        <form method="POST" enctype="multipart/form-data" action="upload_file_events.php" class="mt-2 mb-2">
          <input type="hidden" name="teacher_name" value="<?php echo $queryTeacherAssoc['first_name'] . ' ' . $queryTeacherAssoc['last_name']; ?>">
          <input type="text" name="name" placeholder="type your message" class="form-control-sm">
          <input type="text" name="topic" placeholder="Topic: Programming" class="form-control-sm">
          <input type="file" name="userfile" id="fileupload" />
          <input type="submit" name="events" class="btn btn-primary mt-2">
        </form>
      <?php endif; ?>
    </div>
    <div class="col-md-6">
      <div id="file_info">
        <?php while ($row = mysqli_fetch_array($queryNotification)) : ?>
          <p><?php echo $row['name']; ?> <small>At <strong><?php echo $row['topic'] ?></strong></small> <i>posted by</i> <small><?php echo $row['teacher_name']; ?></small> <a href="/pages/teacher/<?php echo $row['filepath']; ?>" class="btn btn-success">Download</a></p>
        <?php endwhile; ?>
      </div>
    </div>
  </div>

</div>
<?php
include '../footer.php';
?>