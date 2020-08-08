<?php
$connect = new PDO("mysql:host=localhost;dbname=ramr", 'root', '');
if (isset($_POST['action'])) {
    if ($_POST['action'] == "delete") {
        $query = "DELETE FROM upload WHERE id = '" . $_POST["id"] . "'";
        $statement = $connect->prepare($query);
        $statement->execute();
        echo '<p>Data Deleted</p>';
    }
    if ($_POST["action"] == "fetch_single") {
        $query = "
		SELECT * FROM upload WHERE id = '" . $_POST["id"] . "'
		";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row) {
            $output['filepath'] = $row['filepath'];
            $output['description'] = $row['description'];
        }
        echo json_encode($output);
    }
    if ($_POST["action"] == "update") {
        $query = "
		UPDATE upload 
		SET first_name = '" . $_POST["first_name"] . "', 
		last_name = '" . $_POST["last_name"] . "' 
		WHERE id = '" . $_POST["hidden_id"] . "'
		";
        $statement = $connect->prepare($query);
        $statement->execute();
        echo '<p>Data Updated</p>';
    }
}
