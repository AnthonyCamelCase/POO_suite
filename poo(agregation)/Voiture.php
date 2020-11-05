<?php
require "Moteur.php";
class Voiture
{
     public $marque;
     public $couleur;
     private $stop = [];//tableau qui contiendra tout les objets de destination
     private $moteur;

public function __construct($marque,$couleur,$cv,$vitMax)
     {
          $this->marque = $marque;
          $this->couleur = $couleur;
          $this->moteur = new moteur ($cv,$vitMax);
     }  
public function AddStop( Destination $adr) //fonction qui permet de rajouter des stop
     {
          $this->stop[] = $adr;
     }
public function getStop() //getter du tableau 
     {
          return $this->stop;
     }
public function delStop($value)
     {    //l'index qui a pour valeur dans le tableau correspondant à la clef 
          $index = array_search($value,array_column($this->stop,"adresse"));
          //du coup je unset avec l'index trouver 
          unset($this->stop[$index]);
     }
public function demarer(Humain $data)
     { 
          echo "vroom $data->nom demare la $this->marque elle peut rouler a ".$this->moteur->vitMax;
     }
public function destructSelf(Voiture &$self)
{
     unset($this->moteur,$this->marque,$this->couleur);
     $self = null;
     unset($self);
}
public function __destruct()//__destruct est un methode dite magique comme __construct elle est action a la destruct de l 'objet 
     {
          unset($this->moteur);//je m'assure de detruire le moteur 
     } 
}
?>