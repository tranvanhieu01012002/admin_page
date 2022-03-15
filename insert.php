<?php
include "../account.php";
$mysql = new mysqli($host, $user, $password, $database);
if ($mysql === false) {
    die("ERROR: Could not connect" . $mysql->connect_error);
}


echo "aaaaaaaaaaaaaaaaaaaaaaaaaaa";
$first_name = $mysql->real_escape_string($_POST["firstname"]);
$last_name = $mysql->real_escape_string($_POST["lastname"]);
$email = $mysql->real_escape_string($_POST["email"]);
$sql = "INSERT INTO persons (first_name,last_name,email) VALUES('$first_name','$last_name','$email')";
if ($mysql->query($sql) === true) {
    echo "Insert data successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysql->error;
}
$mysql->close();