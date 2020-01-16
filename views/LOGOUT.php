<?php
  include 'SESIJA.php';
  session_destroy();
  header("Location:INDEX.php");
 ?>
