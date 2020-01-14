<?php

class Broker{

    private static $broker;
    private $mysqli;
    private $rezultat
    private function __construct(){
        $this->mysqli=new mysqli("localhost","root","","edukacija");
    }
    public static function getBroker(){
        if(!isset($broker)){
            $broker=new Broker();
        }
        return $broker;
    }
    public function getRezultat()
    {
        return $this->rezultat();
    }

    public function postojiKorisnik($user,$pass)
    {
        $this->rezultat=$this->mysqli->query("select * from korisnik where korisnickoIme='".$user."' and sifra= '".$pass."'");
    }

}


?>