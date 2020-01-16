<!DOCTYPE html>

<html>
    <head lang="en">
        <link rel="stylesheet" type="text/css" href="css\dizajn.css">
        <script src="funkcije.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head> 
    <body>
<header>
  
</header>
  <nav>
    <ul>
     
    </ul>
  </nav> 
  <article>
  <h2></h2>
  <table border="1" id="prvaTabela">
    <tr bgcolor="#9acd32">
      
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
    
    $sql = "SELECT kvizId,naziv FROM kviz";
    $result = $conn->query($sql);
    

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
			<td>" . $row['naziv'] . "</td>
			<td>" . $row['kvizId'] . "</td> 
      
			</tr>";
        }
    
    $conn->close();
    ?>


  </table>

  

</article>

<footer>
  <p>Autor: Tijana Blagojević</p>
  <p>Fakultet organizacionih nauka</p>
</footer>
    </body>
</html>