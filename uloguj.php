<?php
    include "broker.php";
    $broker=Broker::getBroker();

    if(isset($_POST["user"])&& isset($_POST["sifra"])){
        $broker->postojiKorisnik($_POST["user"],$_POST["sifra"]);
        $rezultat=$broker->getRezultat();
        if(!$rezultat || !$rezultat->fetch_object()){
            echo "false";
        }else{
            echo "true";
        }
    }


?>