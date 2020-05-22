<?php
class Logica{

    private $nombreIntegrante1;

    public function metodoIntegrante1(){
        $nombreIntegrante1="Angel Jadan";
        return "Integrante1 ".$nombreIntegrante1;
    }

    public function metodoIntegrante2(){
        $nombreIntegrante2="Wilson Conce";
        return "Integrante2 ".$nombreIntegrante2;
    }
}

$logica=new Logica;
$string=$logica->metodoIntegrante1();
echo $string;
?>