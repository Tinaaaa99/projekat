<!DOCTYPE html>
<?php include'HEADER.php';?>
<html>
    <head lang="en">
        <link rel="stylesheet" type="text/css" href="css\dizajn.css">
        <script src="funkcijeJa.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head> 
    <body>
<header>
  
</header>
<div class="container">
  <nav>
    <ul>
     
      </ul>
  </nav> 
  <article>
  <h2>Ubaci pitanje</h2>
  <table border="1" id="prvaTabela">
    <tr bgcolor="#9acd32">
      <th>Pitanje</th>
      <th>Tacan</th>
	  <th>Netacan1</th>
	  <th>Netacan2</th>
    <th>Netacan3</th>
    </tr>
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
    
    $sql = "SELECT pitanje, tacan, netacan1,netacan2,netacan3 FROM pitanje";
    $result = $conn->query($sql);
    

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
			<td>" . $row['pitanje'] . "</td>
			<td>" . $row['tacan'] . "</td> 
      <td>" . $row['netacan1'] . " </td>
      <td>" . $row['netacan2'] . " </td>
      <td>" . $row['netacan3'] . " </td>
			</tr>";
        }
    
    $conn->close();
    ?>


  </table>

  

  <button type="button" onclick="sortTable(0)">Sortiraj po nazivu pitanja!</button >
  
  <p><b>Ubacivanje u bazu</b></p>
  <form action="promjene\dodaj">
  Pitanje:<br>
  <input type="text" name="pitanje" value=""><br>
  Tacan odgovor:<br>
  <input type="text" name="tacan" value=""><br><br>
  Netacan odgovor1:<br>
  <input type="text" name="netacan1" value=""><br>
  Netacan odgovor2:<br>
  <input type="text" name="netacan2" value=""><br><br>
  Netacan odgovor3:<br>
  <input type="text" name="netacan3" value=""><br><br>

  <p>Selektujte predmet:</p>

  <select name="predmet">
    <option value="1">Baze</option>
    <option value="2">Iteh</option>
  </select>
  <br><br>
 

  <input type="submit" value="Dodaj" >

  </form>

<p><b>Obriši</b></p>
  <form  action="promjene\brisi">
  Naziv pitanja:<br>
  <input id="brisanje" type="text" name="pitanje" value=""><br>
 
  <input type="submit" value="Obriši" >
</form>

</div>
</article>

<footer>
<?php include'FOOTER.php';?>
</footer>
    </body>
</html>