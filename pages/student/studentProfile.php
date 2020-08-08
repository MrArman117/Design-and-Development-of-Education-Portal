<?php
include '../heading.php';
include "../../pages/navbar.php";
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$id = $_GET['id'];
$queryStudent = mysqli_query($conn, "select * from student where id='$id'");
$fetchArray = mysqli_fetch_assoc($queryStudent);
$first_name = $fetchArray['first_name'];
$last_name = $fetchArray['last_name'];
$student_id = $fetchArray['id'];
$type = $fetchArray['type'];
$dept = $fetchArray['dept'];
$photo = $fetchArray['photo'];
?>
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <?php if ($_SESSION['student_login'] != '' && $type == $_SESSION['current_user']) : ?>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                    </li>
                <?php endif; ?>

            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <?php if ($_SESSION['student_login'] != '' && $type == $_SESSION['current_user']) : ?>
                        
						<h5 class="mb-3">My Profile</h5>
                    <?php else : ?>
					<img src="photos/<?php echo $photo; ?>" width="20%">

                        <h5 class="mb-3"><?php echo ucfirst($first_name . "'s"); ?>Profile</h5>
                    <?php endif;  ?>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <p>
                                <!-- Web Designer, UI/UX Engineer -->
                                <?php echo $first_name . ' ' . $last_name; ?>
                            </p>
                            <h6>Department</h6>
                            <p>
                                <?php echo $dept; ?>
                            </p>
                        </div>


                    </div>
                    <!--/row-->
                </div>
                <?php if (isset($_SESSION['student_login'])) : ?>
                    <div class="tab-pane" id="edit">
                        <form role="form" method="post" action="update_profile.php">
                            <input type="hidden" name="student_id" id="<?php echo $fetchArray['id']; ?>" value="<?php echo $fetchArray['id']; ?>">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="first_name" value="<?php echo $fetchArray['first_name']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="last_name" value="<?php echo $fetchArray['last_name']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" name="email" value="<?php echo $fetchArray['email']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="<?php echo $fetchArray['address']; ?>" name="address" placeholder="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">City</label>
                                <div class="col-lg-6">
                                    <input class="form-control" type="text" value="<?php echo $fetchArray['city']; ?>" name="city" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                    <input type="submit" class="btn btn-primary" name="update_student" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif ?>
            </div>
        </div>
        <?php if ($_SESSION['student_login'] != '' && $type == $_SESSION['current_user']) : ?>

            <div class="col-lg-4 order-lg-1 text-center">
                <img width="150" height="150" src="photos/<?php echo ($fetchArray['photo'] == null) ? "//placehold.it/150" : $fetchArray['photo']; ?>" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <h6 class="mt-2">Upload a different photo</h6>
                <label class="custom-file">
                    <form enctype="multipart/form-data" action="upload_photo.php" method="post">
                        <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                        <input type="file" id="upload_profile" name="upload_profile" accept="image/*" onchange="loadFile(event)" class="custom-file-input"> <br> <img id="output" width="40%" height="40%">
                        <span class="custom-file-control btn btn-danger mb-2">Choose file</span> <br>
                        <script>
                            var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                        <input type="submit" name="upload_photo" class="upload_photo" value="Upload Photo" class="my-2" />
                    </form>

                </label>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php
include '../footer.php';
?>