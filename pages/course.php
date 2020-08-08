<?php
$id = $_GET['id'];
include 'login.php';
include 'heading.php';
include 'navbar.php';
?>
<?php
$sql = "select * from user where usertype=1";
$result = mysqli_query($conn, $sql);
$teacher_info = mysqli_query($conn, "select * from user where id = '$id'");
$position = mysqli_query($conn, "select * from teacher_info where id = '$id'");
$tcinfos = mysqli_fetch_assoc($teacher_info);
$usertype = mysqli_fetch_assoc($tcinfos)['usertype'];
$degrees = mysqli_query($conn, "select * from teacher_degree where teacher_id = '$id'");
$queryupload = "select * from  upload where user_id = '$id'";
$queryuploads = mysqli_query($conn, $queryupload);
?>
<h1 style="font-size:30px;text-align:center; background-color:#9aa7ad;height:45px;font-family:sans-serif;"> Programming Language </h1>
<!-- 
<p style="font-size:25px; font-family:vardana; background-color:#cfe095; color:black;padding:17px">

	Database management system (DBMS) is system software for creating and managing databases. The DBMS provides users and programmers with a systematic way to create, retrieve, update and manage data.A DBMS makes it possible for end users to create, read, update and delete data in a database.

</p> -->
<div class="container">

    <div class="row no-gutters">
        <div class="col-12 col-sm-6 col-md-8">
            <?php if ($usertype == 1) : ?>
                <?php include 'teacherview.php'; ?>
            <?php else : ?>
                <?php include 'studentview.php'; ?>
            <?php endif; ?>
        </div>
        <div class="col-6 col-md-4">
            <h4>Teacher Information</h4>
            <table class="table">
                <tr>
                    <td>
                        Name:
                        <?php
                        echo $tcinfos['first_name'] . ' ' . $tcinfos['last_name'];
                        ?>
                        <br>
                        Email:
                        <?php
                        echo $tcinfos['email'];
                        ?>
                    </td>
                </tr>
            </table>
            <h4>Position</h4>
            <table class="table">
                <?php while ($row = mysqli_fetch_array($position)) : ?>
                    <tr>
                        <td>
                            <?php
                                echo $row['position'];                               ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <h4>Degrees</h4>
            <table class="table">
                <?php while ($row = mysqli_fetch_array($degrees)) : ?>
                    <tr>
                        <td>
                            <?php
                                echo $row['degree_name'];                               ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>

</div>

<?php
include 'footer.php';
?>