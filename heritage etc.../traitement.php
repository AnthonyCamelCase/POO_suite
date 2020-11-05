<?php
require('HumainClass.php');

$objetA = new humain("romain","bousquie");
$objetB = new humain("nicolas","back");

$objetA->addVie(26);
$objetB->addVie(14);
echo  $objetA->getPrenom()." a: ".$objetA->getVie()." de points de vie";
echo "\n";
echo  $objetB->getPrenom()." a: ".$objetB->getVie()." de points de vie";
$objetB->addVie(50);
echo "\n";
echo  $objetB->getPrenom()." a: ".$objetB->getVie()." de points de vie";
echo "\n";
$objetB->addVie(10);