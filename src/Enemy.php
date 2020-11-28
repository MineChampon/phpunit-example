<?php

class Enemy
{
    public $name;
    public $hp;
    public $attackPow;

    public function __construct($name, $hp, $attackPow)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->attackPow = $attackPow;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }
    public function getAttackPow()
    {
        return $this->attackPow;
    }

    public function attackHero($hero)
    {
        $heroHp = $hero->hp - $this->attackPow;
        $hero->hp = $heroHp;
        if($hero->hp < 0) {
            $hero->hp = 0;
        }
    }
}