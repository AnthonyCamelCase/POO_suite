<?php
class Humain
{
     public $nom;
     public $prenom;
public function __construct($nom,$prenom)
     {
         $this->nom = $nom;
         $this->prenom = $prenom;
     }
public function messageDemarer(Voiture $voiture)
     {
        $voiture->demarer($this);
     }
}
?>