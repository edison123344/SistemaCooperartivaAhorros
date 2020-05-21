<?php
class Logica{

    private $nombreIntegrante1;

    public function metodoIntegrante1(){
        $nombreIntegrante1="Angel Jadan";
        return "Integrante1 ".$nombreIntegrante1;
    }
}

$logica=new Logica;
$string=$logica->metodoIntegrante1();
echo $string;
?>