<?php
require "Moteur.php";
class Voiture
{
     public $marque;
     public $couleur;
     private $moteur;
// public function __construct($marque,$couleur,Moteur $moteur)
//      {
//           $this->marque = $marque;
//           $this->couleur = $couleur;
//           $this->moteur = $moteur;
//      }
public function __construct($marque,$couleur,$cv,$vitMax)
     {
          $this->marque = $marque;
          $this->couleur = $couleur;
          $this->moteur = new moteur ($cv,$vitMax);//ici injection de dependance
     }    //le faite d'appeller une dependance au sein de mon constructeur rajoute encore un fort couplage et un code moins maintenable 
public function demarer(Humain $data)
     { 
          echo "vroom $data->nom demare la $this->marque elle peut rouler a ".$this->moteur->vitMax;
     }
public function destructSelf(Voiture &$self)//prend un instance de voiture en l'occurence objet du contexte (equivaut à $this)
{
     unset($this->moteur,$this->marque,$this->couleur);//unset les proprietes 
     $self = null;//donne au contexte  = null
     unset($self);//unset le contexte
}
public function __destruct()//__destruct est un methode dite magique comme __construct elle est action a la destruct de l 'objet 
     {
          unset($this->moteur);//je m'assure de detruire le moteur 
     } 
}
?>