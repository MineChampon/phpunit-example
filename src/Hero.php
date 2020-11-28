<?php

class Hero
{
    public $name;
    public $attackPow;

    public function __construct($name, $attackPow)
    {
        $this->name = $name;
        $this->attackPow = $attackPow;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAttackPow()
    {
        return $this->attackPow;
    }

    public function attackEnemy($enemy)  // 役割微妙
    {
        $enemyHp = $enemy->hp - $this->attackPow;
        $enemy->hp = $enemyHp;
    }
}