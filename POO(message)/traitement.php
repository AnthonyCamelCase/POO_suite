<?php
require "Humain.php";
require "Voiture.php";
$romain = new Humain("romain","bousquie");
$renault = new Voiture("renault","verte");

$romain->messageDemarer($renault);
//l'objet romain va demander à l'objet renault l'action demarer 
?>