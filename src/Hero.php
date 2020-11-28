<?php

class Hero
{
    public $name;
    public $hp;  // 体力追加
    public $attackPow;

    public function __construct($name, $hp, $attackPow)  // 引数追加
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->attackPow = $attackPow;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()  // 体力追加
    {
        return $this->hp;
    }

    public function getAttackPow()
    {
        return $this->attackPow;
    }

    public function attackEnemy($enemy)
    {
        $enemyHp = $enemy->hp - $this->attackPow;
        $enemy->hp = $enemyHp;
        if($enemy->hp < 0) {
            $enemy->hp = 0;
        }
    }
}