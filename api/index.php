<?php
require 'flight/Flight.php';
require 'jsonindent.php';


Flight::route('/', function(){
});

Flight::register('db', 'Database', array('database_real_estate'));



Flight::route('GET /agents', function()
{
	header("Content-Type: application/json; charset=utf-8");
	$db = Flight::db();
	$db->vratiAgente();

	$niz =  [];
	while ($red = $db->getResult()->fetch_object())
	{
		array_push($niz,$red);
	}

	echo indent(json_encode($niz));
});

Flight::route('GET /realEstates', function()
{
	header("Content-Type: application/json; charset=utf-8");
	$db = Flight::db();
	$db->vratiNekretnine();

	$niz =  [];
	while ($red = $db->getResult()->fetch_object())
	{
		array_push($niz,$red);
	}

	echo indent(json_encode($niz));
});

Flight::route('GET /realEstates/@id', function($id)
{
	header("Content-Type: application/json; charset=utf-8");
	$db = Flight::db();
	$db->vratiNekretninu($id);

	$niz =  [];
	while ($red = $db->getResult()->fetch_object())
	{
		array_push($niz,$red);
	}

	echo indent(json_encode($niz));
});

Flight::route('POST /newRealEstate', function()
{
	header("Content-Type: application/json; charset=utf-8");
	$db = Flight::db();
	$podaci = file_get_contents('php://input');
	$niz = json_decode($podaci,true);
	$db->unesiNekretninu($niz);
	if($db->getResult())
	{
		echo "Uspesno";
	}
	else
	{
		echo  "Greska!";

	}

});


Flight::start();
?>
