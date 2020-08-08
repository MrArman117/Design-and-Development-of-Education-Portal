<?php
include '../heading.php';
// include '../../db/connect.php';
include '../../authentication/Studentlogin.php';
$queryTeachers = mysqli_query(mysqli_connect('localhost', 'root', '', 'ramr'), "select id,first_name,last_name, position from teacher");
?>
<?php
include '../navbar.php';
?>

<div style="font-size:20px; font-family:sans-serif; background-color:#a6a6a4; color:black; padding:17px;">




    <div class="coursebton">
        <div class="container">
            <h4 class="text-dark">List Of Instructors for Programming Language course</h4>
            <table class="table table-hover table-light">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($queryTeachers)) : ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><a href="ProgrammingStudent.php?id=<?php echo $row['id']; ?>"><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></a></td>
                            <td><a href="ProgrammingStudent.php?id=<?php echo $row['id']; ?>"><?php echo $row['position']; ?></a></td>
                            <td><a href="/pages/teacher/teacherProfile.php?id=<?php echo $row['id']; ?>">@<?php echo $row['last_name']; ?></a> </td>
                        </tr> <?php endwhile; ?> </tbody>
            </table>
        </div>
    </div>
</div> <?php
        include "../footer.php";
        ?>