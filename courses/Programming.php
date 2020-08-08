<?php
include 'heading.php';
include 'login.php';
include 'navbar.php';
?>
<h1 style="font-size:30px;text-align:center; background-color:#9aa7ad;height:45px;font-family:sans-serif;"> Programming Language </h1>
<!-- 
<p style="font-size:25px; font-family:vardana; background-color:#cfe095; color:black;padding:17px">

	Database management system (DBMS) is system software for creating and managing databases. The DBMS provides users and programmers with a systematic way to create, retrieve, update and manage data.A DBMS makes it possible for end users to create, read, update and delete data in a database.

</p> -->
<h4 class="display-4">List Of Course instructors</h4>
<?php
$sql = "select * from user where usertype=1";
$result = mysqli_query($conn, $sql);
?>
<div class="">
	<table class="table">
		<tr>
			<th>Name</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($result)) : ?>
			<tr>
				<td>
					<a href="course.php?id=<?php echo $row['id']; ?>">
						<?php echo $row['first_name'] . " " . $row['last_name']; ?>
					</a>
				</td>
			</tr>
		<?php endwhile; ?>
	</table>
</div>
<?php
include 'footer.php';
?>