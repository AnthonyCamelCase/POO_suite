<?php
class Voiture
{
     public $marque;
     public $couleur;

public function __construct($marque,$couleur)
     {
          $this->marque = $marque;
          $this->couleur = $couleur;
     }
public function demarer(Humain $data)//j'exige une instance de la class Humain que j'utiliserais sous $data
     { 
          echo "vroom $data->nom demare la $this->marque ";
          //$data represente un objet instance humain passer lors de l'appel
          //$this represente l'instance de l'objet en cours
     }
}
?>