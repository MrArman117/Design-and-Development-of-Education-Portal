<?php
include '../../authentication/Teacherlogin.php';
include '../heading.php';
include '../navbar.php';
$id = $teacher_login;
$queryTeacher = mysqli_query($conn, "select * from teacher where id='$id'");
$teacher_info = mysqli_fetch_assoc($queryTeacher);
$queryuploads = mysqli_query($conn, "select * from upload where course_type='software_engineering' and teacher_id='$teacher_info[id]'");
?>
<h1 style="font-size:30px;text-align:center; background-color:#9aa7ad;height:45px;font-family:sans-serif;"> Software Engineering </h1>
<!-- 
<p style="font-size:25px; font-family:vardana; background-color:#cfe095; color:black;padding:17px">

	Database management system (DBMS) is system software for creating and managing databases. The DBMS provides users and programmers with a systematic way to create, retrieve, update and manage data.A DBMS makes it possible for end users to create, read, update and delete data in a database.

</p> -->
<div class="container mb-10">

    <div class="row no-gutters">
        <div class="col-12 col-sm-6 col-md-8">
            <h4>List Files</h4>
            <form enctype="multipart/form-data" id="file_form" method="POST" action="upload_file.php" class="mb-2">
                <!-- MAX_FILE_SIZE must precede the file input field -->
                <input type="hidden" name="teacher_id" value="<?php echo $teacher_info['id']; ?>" />
                <input type="hidden" name="course" value="software_engineering">
                <input type="text" name="description" placeholder="File Description">
                <!-- Name of input element determines name in $_FILES array -->
                <input type="file" name="userfile" id="fileupload" />
                <script>
                    var fileupload = document.getElementById('fileupload');
                    fileExtension = ['ppt', 'pptx', 'doc', 'docx', 'pdf', 'xls', 'sql'];
                    fileupload.addEventListener('change', function() {
                        fileuploadExtension = fileupload.files[0].name.split('.').pop();
                        include = fileExtension.includes(fileuploadExtension);
                        if (!include) {
                            alert("please browse this type of file ppt,pptx,doc,docx,pdf,xls");
                            $("#fileupload").val('');
                        }
                    });
                </script>
                <input type="submit" name="upload_file" class="upload_file" value="Upload" class="my-2" />
            </form>
            <div class="mt-10" id="file_info">
                <?php while ($row = mysqli_fetch_array($queryuploads)) : ?>
                    <p>
                        <span><?php echo $row['description']; ?> </span> <span><?php echo '<small>uploaded by </small>' . ucfirst($teacher_info['first_name']) . ' ' . $teacher_info['last_name']; ?></span> <span><a href="file_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></span>
                    </p>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

</div>
<?php
include '../footer.php';
?>