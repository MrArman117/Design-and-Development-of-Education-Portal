<?php
include 'heading.php';
include 'connect.php';
include 'navbar.php';
$sql = "select * from user where usertype=2";
$result = mysqli_query($conn, $sql);
?>
<h1 class="display-4 text-center">List of Students </h1>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) : ?>
        <tr>
            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php
include 'footer.php';
?>