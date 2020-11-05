<?php
require "Humain.php";
require "Voiture.php";
require "Destination.php";


$romain = new Humain("romain","bousquie");
$renault = new Voiture("renault","verte",200,230);
$dest = new Destination("Bar-le-duc");


$romain->messageDemarer($renault);
$renault->addStop($dest);


$dest2 = new Destination("Verdun");
$renault->addStop($dest2);

print_r($renault->getStop());

$renault->delStop("Bar-le-duc");

print_r($renault->getStop());

unset($renault);


?>