<?php
class Logica{

    private $nombreIntegrante1;

    public function metodoIntegrante1(){
        $nombreIntegrante1="Angel Jadan";
        return "Este método ha sido modificado por ".$nombreIntegrante1;
    }
}

$logica=new Logica;
$string=$logica->metodoIntegrante1();
echo $string;
?>