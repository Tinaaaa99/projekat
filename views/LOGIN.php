<?php

    include 'SESIJA.php';
  include 'KONEKCIJA.php';
  

  $poruka = "";

  if(isset($_POST['login'])){
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
    $upit = "SELECT * FROM login where username='$user' AND password='$pass' LIMIT 1";
    $rezultat = $konekcija->query($upit);
    while($jedanRed = $rezultat->fetch_assoc()){
      $_SESSION['ulogovaniRadnik'] = $jedanRed;
      header("Location:INDEX.php");
      die();
    }

    $poruka = "Employee does not exist.";
  } 


?>

<?php include'HEADER.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Log In</span>
    <h2>Log In</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 ">
                    <div class="text-center">
                        <form method="POST" action="">
                          <label for="username">Username</label>
                          <input type="text" name="username" class="form-control">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control">
                          <label for="submit"></label>
                          <input type="submit" name="login" class="btn btn-primary" value="Login">
                        </form>
                        <?php echo $poruka; ?>
                    </div>

                </div>
</div>
</div>
</div>
</div>

<?php include'FOOTER.php';?>