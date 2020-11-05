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
public function messageDemarer(Voiture $voiture)//j'exige une instance de la class Voiture que j'utiliserais sous $voiture
     {
        //la function attend un objet de la classe Voiture pour fonctionner
        $voiture->demarer($this);
        //je demande la methode demarer à cette objet voiture 
        //ici je passe $this qui represente l'ensemble de l'objet en cours
     }
}
?>