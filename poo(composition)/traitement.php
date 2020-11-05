<?php
require "Humain.php";
require "Voiture.php";

//$moteur = new Moteur (200,230)
$romain = new Humain("romain","bousquie");
$renault = new Voiture("renault","verte",200,230);
// $renault = new Voiture("renault","verte",$moteur);
$romain->messageDemarer($renault);
//la solution pour eviter d'avoir un gros couplage entre moteur et voiture 
//tout en gardons le principe que l'un va pas sans l'autre 
//et soit :
//instancier l'objet moteur hors du constructeur de voiture ex ligne  5
//du coup j'injecter l'instance $moteur directement lorsque j'instance ma voiture remplacement ligne 7 avec ligne 8
//sans oublier de changer le construct de Voiture voir le commentaire au dessus du construct actuel
//soit :
//en utilisant un design pattern (factory)

?>