<?php
include '../heading.php';
include '../../authentication/Studentlogin.php';
include '../../authentication/Teacherlogin.php';
include '../navbar.php';
$queryTeachers = mysqli_query(mysqli_connect('localhost', 'root', '', 'ramr'), "select id,first_name,last_name, dept,email from student");
?>

<div style="font-size:20px;text-align:center; background-color:#9aa7ad;font-family:sans-serif;padding:17px;">




    <div class="coursebton">
        <div class="container">
            <h4 class="text-dark">List Of Student </h1>
                <table class="table table-hover table-light">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($queryTeachers)) : ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo ucfirst($row['first_name']) . ' ' . ucfirst($row['last_name']); ?></td>
                                <td><?php echo $row['dept']; ?></td>
                                <td><a href="/pages/student/studentProfile.php?id=<?php echo $row['id'] ?>">@<?php echo $row['last_name']; ?></a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
        </div>
    </div>






</div>


<?php
include '../footer.php';
?>