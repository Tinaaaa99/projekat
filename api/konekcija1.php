<?php
$servername = "localhost";
$username = "tina";
$password = "tina00";
$dbname = "kviz";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");
?>
