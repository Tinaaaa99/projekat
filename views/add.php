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
  
  Pitanje:<br>
  <input type="text" name="pitanje" value="" id="pitanjeid"><br>
  Tacan odgovor:<br>
  <input type="text" name="tacan" value="" id="tacanid"><br><br>
  Netacan odgovor1:<br>
  <input type="text" name="netacan1" value="" id="netacan1"><br>
  Netacan odgovor2:<br>
  <input type="text" name="netacan2" value=""id="netacan2"><br><br>
  Netacan odgovor3:<br>
  <input type="text" name="netacan3" value=""id="netacan3"><br><br>

  <p>Selektujte predmet:</p>

  <select name="predmet" id="predmet">
    <option value="1">Baze</option>
    <option value="2">Iteh</option>
  </select>
  <br><br>
 

  <button onclick ="on_add()" >"Dodaj" </button>

 

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

<script>
  function on_add(){
    $.ajax({
        url: 'promjene/dodaj',
        type: 'GET',
        data: {
          "pitanje":document.getElementById("pitanjeid").value,
          "tacan":document.getElementById("tacanid").value,
          "netacan1":document.getElementById("netacan1").value,
          "netacan2":document.getElementById("netacan2").value,
          "netacan3":document.getElementById("netacan3").value,
          "predmet":document.getElementById("predmet").value
        },
        dataType: "json",
        success: (data) => {
         
        }
      })


  }

</script>

    </body>
</html>