<?php

class Enemy
{
    public $name;
    public $hp;

    public function __construct($name,$hp)
    {
        $this->name = $name;
        $this->hp = $hp;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }
}