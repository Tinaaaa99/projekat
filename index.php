<?php
require 'flight/Flight.php';



Flight::register('db', 'PDO', [ 'mysql:host=localhost;dbname=kviz', 'tina', 'tina00' ]);

function setsession(){
	session_start();

	if(!isset($_SESSION['ulogovaniRadnik'])){
	  $_SESSION['ulogovaniRadnik'] = [];
}

}


Flight::route('/', function(){
	setsession();
	Flight::render('pocetna.php',["_SESSION"=>$_SESSION] );
});

Flight::route('/index.php', function(){
	setsession();
	Flight::render('pocetna.php',["_SESSION"=>$_SESSION] );
});

Flight::route('/kviz/@kategorija', function($kategorija){

	setsession();
	if($kategorija=='baze'){
		$kvizid=1;
	}else{
		$kvizid=2;

	}

    $db = Flight::db();
    $sql = "SELECT pitanje,tacan,netacan1,netacan2,netacan3 FROM pitanje where kvizId=:kvizid limit 4";
    $stmt = $db->prepare($sql);
	$stmt->execute(["kvizid" => $kvizid]);
	$result=$stmt->fetchAll();
	
  
Flight::render('kviz.php',["result"=>$result]);

});


Flight::route('/promjene/dodaj',function(){
	$pitanje=$_GET['pitanje'];
	$tacan=$_GET['tacan'];
	$netacan1=$_GET['netacan1'];
	$netacan2=$_GET['netacan2'];
	$netacan3=$_GET['netacan3'];
	$predmet=$_GET['predmet'];
	$sql = "INSERT INTO pitanje (pitanje,tacan, netacan1, netacan2,netacan3,kvizID)
	VALUES (:pitanje, :tacan, :netacan1,:netacan2,:netacan3,:predmet)";
	 $db = Flight::db();
	 
	 $stmt = $db->prepare($sql);
	 $stmt->execute(["pitanje" => $pitanje,"tacan" => $tacan,"netacan1" => $netacan1,"netacan2" => $netacan2,"netacan3" => $netacan3,"predmet" => $predmet]);
	Flight::redirect('add');
});


Flight::route('/promjene/brisi',function(){
	$pitanje=$_GET['pitanje'];
	
    
	$sql = "DELETE FROM pitanje WHERE pitanje='$pitanje'";
	
	 $db = Flight::db();
	 
	 $stmt = $db->prepare($sql);
	 $stmt->execute(["pitanje" => $pitanje]);
	Flight::redirect('add');
});
	
Flight::route('/add', function(){
	setsession();
	Flight::render('add.php',["_SESSION"=>$_SESSION] );
});

Flight::route('/About', function(){
	setsession();
	Flight::render('about.php',["_SESSION"=>$_SESSION] );
});
Flight::route('/ABOUT.php', function(){
	setsession();
	Flight::render('ABOUT.php',["_SESSION"=>$_SESSION] );
});
Flight::route('/logout.php', function(){
	setsession();
	session_destroy();
	Flight::redirect('index.php');
});

Flight::route('/BLOG.php', function(){
	setsession();
	Flight::render('BLOG.php',["_SESSION"=>$_SESSION] );
});

Flight::route('GET /login.php', function(){
	setsession();
	Flight::render('LOGIN.php',["_SESSION"=>$_SESSION] );
});
Flight::route('POST /login.php', function(){
	setsession();
	$poruka = "";

  if(isset($_POST['login'])){
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
    
	$db = Flight::db();
    $sql = "SELECT * FROM login where username=:user AND password=:pass LIMIT 1";
    $stmt = $db->prepare($sql);
	$stmt->execute(["user" => $user,"pass"=>$pass]);
	$result=$stmt->fetchAll();
	foreach($result as $jedanRed ){
		$_SESSION['ulogovaniRadnik'] = $jedanRed;
	   
		
	  }
    $poruka = "Employee does not exist.";
  } 
  Flight::redirect('index.php');
}
);
Flight::route('/contact.php', function(){
	setsession();
	Flight::render('contact.php',["_SESSION"=>$_SESSION] );
});
Flight::route('/zapamcenipodaci.php', function(){
	setsession();
	Flight::render('zapamcenipodaci.php',["_SESSION"=>$_SESSION] );
});


Flight::start();
?>
