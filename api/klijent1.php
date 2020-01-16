<!DOCTYPE html>
<html>

<head>
</head>
<body>
<?php

$url = 'http://localhost/projekat/api/server1.php';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
$json_objekat=json_decode($curl_odgovor);
?>
<table border="2" align='center'>
<tr>
<td>Id</td>
<td>Pitanje</td>
<td>Tacan odgovor</td>
</tr>
<?php
foreach($json_objekat->pitanje as $vrednost){
?>
<tr>
<td><?php echo $vrednost->pitanjeID;?></td>
<td><?php echo $vrednost->pitanje;?></td>
<td><?php echo $vrednost->tacan;?></td>

</tr>



<?php
}
?>
</table>

</body>
</html>

