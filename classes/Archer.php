<?php


class Archer extends Character
{
    public $nbArrow = 10;
    private $HP = 100;


    public function __construct ($pseudo)
        {
            parent:: __construct($pseudo);
            $this->pseudo = $pseudo;
            
        }

    public function arrowAtk($target) 
        {
            $this->nbArrow = $nbArrow;
            $rand1 = rand(1, 10);
            $cost=5;
            if ($this->lifePoint = 95 && $target->damage= 95);
            $target->setlifePoint($cost*2);
                if ($this->nbArrow <= 0){
                    $this->nbArrow = 0;
                    return "$this->pseudo n'a plus de flèches de disponible dans son carquois.";
            } 
            $target->setlifePoint($this->damage);
            if($target->lifePoint<=0)
            {
                $target->lifepoint=0;
                return "$this->name attaque à la flèche $target->name et $target->name est KO !";
            };
            return "$this->name attaque $target->name et il lui reste $this->lifePoint points de vie";
    
        }
    
    public function daggerAtk($target)
        {
            $rand2 = rand(1.5, 3);
            if ($this->nbArrow = 0 && $this->isAlive()){
                $this->lifePoint = $rand2;
                return;
            }
        }

    public function setHP($damage)
        {
            $this->lifePoint-=$damage;
            if($this->lifePoint==true){
                $this->setHP=0;
                return;
            }

        }
  
    
}