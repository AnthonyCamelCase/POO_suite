<?php
class Perso
{
    protected $vie= 50;
    protected $magie;
public function __construct($points)
{
    $this->magie = $points;
}
protected function addVie($pts)
{
    if($this->vie >= 100 )
    {
        echo "message : vous avez votre vie au MAX";
    }
    else
    {
        $this->vie+=$pts;

            if($this->vie >= 100)
            {
                $this->vie = 100;
            }
    }

}
};





