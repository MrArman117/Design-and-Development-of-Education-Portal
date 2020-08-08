<?php
include '../heading.php';
include '../../authentication/Studentlogin.php';
include '../../authentication/Teacherlogin.php';
include '../navbar.php';
$queryTeachers = mysqli_query(mysqli_connect('localhost', 'root', '', 'ramr'), "select id,first_name,last_name, email, position from teacher");
?>

<div style="font-size:20px;text-align:center; background-color:#9aa7ad;font-family:sans-serif;padding:17px;">




    <div class="coursebton">
        <div class="container">
            <h4 class="text-dark">List Of Instructors </h1>
                <table class="table table-hover table-light">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($queryTeachers)) : ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo ucfirst($row['first_name']) . ' ' . ucfirst($row['last_name']); ?></td>
                                <td><?php echo $row['position']; ?></td>
                                <td><a href="/pages/teacher/teacherProfile.php?id=<?php echo $row['id']; ?>">@<?php echo $row['last_name']; ?></a></td>
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