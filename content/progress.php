<?php
include 'conn.php';



if (isset($_POST['done'])) {


	$email = $_POST['email'];
	$password = $_POST['password'];


	if (!empty($email) || !empty($password)) {
		$host = "localhost";
		$dbUserName = "root";
		$dbPassword = "roquib";
		$dbName = "ramrschool";

		$conn = new mysqli($host, $dbUserName, $dbPassword, $dbName);

		if (mysqli_connect_error()) {
			die('Connect Error(' . mysqli_conncet_errno() . ')' . mysqli_connect_error());
		} else {
			$SELECT = "SELECT email From ramrschool Where email =? Limit 1";
			$INSERT = "INSERT Into ramrschool (email, password) values(?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("$", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$passward = $stmt->passward;
		}
		if ($passward == 0) {
			$stmt->$close();

			stmt = $conn->prepare($INSERT);
			$stmt->bind_result($email);
			$stmt->execute();
		}
	} else {
		echo "All file are required";
		die();
	}
	$q = " INSERT INTO `info`(`name`, `roll`, `email`) VALUES ('$name','$number','$email')";

	$query = mysqli_query($con, $q);
}
