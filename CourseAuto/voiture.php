<?php
require_once("vehicule.php");
class Voiture extends Vehicule{



    function __toString()
    {
        $res=parent::__toString();
        return $res."/"."Voiture: ".$this->couleur;
    }
}

?>