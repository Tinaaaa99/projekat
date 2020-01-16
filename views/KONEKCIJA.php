<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", false);
ini_set("log_errors",true);
//ini_set("error_log", "upravljanjeGreskama.log");

$servername = "localhost";
    $username = "tina";
    $password = "tina00";
    $dbname = "kviz";
    
    // Create connection
    $konekcija = new mysqli($servername, $username, $password, $dbname);

 ?>