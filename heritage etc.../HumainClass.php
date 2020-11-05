<?php
require('PersoClass.php');
class Humain extends Perso
{   
    private $nom;
    private $premon;
   
    public function __construct($a,$b)
    {
        $this->setNom($b);
        $this->setPrenom($a);
        parent::__construct(10);
    }
    public function addVie($nbr)
    {
        parent::addVie($nbr);
    }
    public function setNom($z)
    {
        $this->nom = $z;
    }
    public function setPrenom($y)
    {
        $this->prenom = $y;
    }
    public function getMagie()
    {
        return $this->magie;
    }
    public function getVie()
    {
        return $this->vie;
    }
    public function getNom()
    {
       return $this->nom;
    }
    public function getPrenom()
    {
       return $this->prenom;
    }
    public function hello()
    {
        echo "bonjour, moi s'est: ".$this->nom;
    }
}; 