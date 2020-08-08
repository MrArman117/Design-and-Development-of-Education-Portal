<?php
if ((function_exists('session_status')
	&& session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
	session_start();
}
include '../pages/heading.php';
include '../pages/navbar.php';
?>
<div class="container mb-10">

    <div class="row">
        <div class="col-md-6">
           
                <form method="POST" action="notify.php" class="mt-2 mb-2">
                    <input type="hidden" name="teacher_name" value="<?php echo $queryTeacherAssoc['first_name'] . ' ' . $queryTeacherAssoc['last_name']; ?>">
                    <input type="text" name="title" placeholder="type your message" class="form-control-sm">
                    <input type="text" name="type" placeholder="Topic: Programming" class="form-control-sm">
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
                    <input type="submit" name="event" class="btn btn-primary mt-2">
                </form>
           
        </div>
        <div class="col-md-6">
            <div id="file_info">
                
                    <p> <small>At <strong></strong></small> <i>noticed by</i> <small></small></p>
             
            </div>
        </div>
    </div>

</div>
<?php
include '../pages/footer.php';
?>