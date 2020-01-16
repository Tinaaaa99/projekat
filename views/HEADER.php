<!DOCTYPE html>
<?php include'SESIJA.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Djina i Tina</title>
    <link rel="shortcut icon" type="image/png" href="logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <link rel="stylesheet" href="STYLE.css"/>


</head>

<style>
.logo{
    width:200px;
    height:100px;
}
</style>  

<body>
    
    <!-- Header Starts -->
<div class="navbar-wrapper">

<div class="navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">


      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>


    <!-- Nav Starts -->
    <div class="navbar-collapse  collapse">
      <ul class="nav navbar-nav navbar-right">
       <li class="active"><a href="index.php">Početna</a></li>
        <li><a href="About">o Nama</a></li>
        <li><a href="blog.php">Blog</a></li>
        
         <?php if(empty($_SESSION['ulogovaniRadnik'])){
           
          ?>
          <li><a href="contact.php">Kontakt</a></li>
          <li><a href="login.php">Ulogujte se kao zaposleni</a></li>
          <?php
        }else{
          
            ?>
            <li><a href="add"><i class="fa fa-check color-brown"></i>Add New</a></li>
            <li><a href="logout.php"><i class="fa fa-check color-brown"></i> Log Out</a></li>  
            
        <!-- -->
    
        <li class="dropdown">
        <a href="message.php" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span><span class="glyphicon glyphicon-comment"  style="font-size:18px;"></span></a>
        <ul class="dropdown-menu"></ul>
        </li>

     <!--  -->
                    
            <?php
          }
          ?>
        
      </ul>
    </div>
    <!-- #Nav Ends -->

  </div>
</div>

</div>
<!-- #Header Starts -->
<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="INDEX.php"><img class="logo" src="logo.png" alt="QUIZ"></a>   
      
</div>
<!-- #Header Starts -->
</div>



</div>
</body>
</html>