<?php
 require("KONEKCIJA.php");

  ?>
  <!DOCTYPE html>
<html class="no-js">
    <?php include'HEADER.php';?>
		<div class="inside-banner">
	  <div class="container"> 
		<span class="pull-right"><a href="INDEX.php">Home</a> / Blog</span>
		<h2>Blog</h2>
	</div>
	
	</div>
    <body>
		<section id="services" class="section pad-bot5 bg-white">
			<div class="container">
			<br><br><br>
			<h4> Kliknite na dugme da biste videli tacne odgovore</h4>
			<br>
			<button onclick="location.href='api/klijent1.php';" id="myButton" class="btn-primary"> Klikni <br></button>
			<br><br>
			</div>
			<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
      		
		</section>
		<?php include'FOOTER.php';?>
	</body>
</html>


  