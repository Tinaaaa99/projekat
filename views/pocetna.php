<?php include'HEADER.php';?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Pocetna</a> / Dobrodošli</span>
    <h2>Kvizovi</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form">
    <h4><span class="glyphicon glyphicon-search"></span> Pretraga kvizova</h4>
		<form action="search-result.php" method="get" class="form form-group">
            <input type="text" class="form-control" name="search" placeholder="Search by Name">
			<br>
            <button class="btn btn-primary">Pretraži</button>
		</form>
  </div>



<div class="hot-properties hidden-xs"></div>

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">

</div>
<div class="row"> 

<br>

<img src="slike\slikabazepodataka.png" alt="Baza podataka" width="317" height="218">
<br>
<a href="kviz/baze">Baze kviz</a>
      <!-- kviz baze -->
<br>
<!-- kviz iteh-->
<img src="slike\itehpredmet.jfif" alt="Iteh" width="317" height="218">
<br>
<a href="kviz/iteh">Iteh test </a> 

</div>
</div>
</div>
</div>
</div>

<?php include'FOOTER.php';?>