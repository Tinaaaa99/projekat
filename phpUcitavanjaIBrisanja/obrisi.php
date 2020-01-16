<?php
    $servername = "localhost";
    $username = "tina";
    $password = "tina00";
    $dbname = "kviz";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $pitanje=$_GET['pitanje'];
    
    $sql = "DELETE FROM pitanje WHERE pitanje='$pitanje'";
    $conn->query($sql);

    $conn->close();
    
    header( "refresh:1;url=http://localhost/projekatiteh/add.php" );
    
    ?>