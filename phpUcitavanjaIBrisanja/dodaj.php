<?php
 $servername = "localhost";
 $username = "tina";
 $password = "tina00";
 $dbname = "kviz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$pitanje=$_GET['pitanje'];
$tacan=$_GET['tacan'];
$netacan1=$_GET['netacan1'];
$netacan2=$_GET['netacan2'];
$netacan3=$_GET['netacan3'];
$predmet=$_GET['predmet'];
$sql = "INSERT INTO pitanje (pitanje,tacan, netacan1, netacan2,netacan3,kvizID)
VALUES ('$pitanje', '$tacan', '$netacan1','$netacan2','$netacan3','$predmet')";

if (mysqli_query($conn, $sql)) {
  

    echo "<script>window.location = 'http://localhost/projekatiteh/add.php'</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>