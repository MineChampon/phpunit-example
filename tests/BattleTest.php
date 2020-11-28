<?php

use PHPUnit\Framework\TestCase;
require_once('src/Battle.php');
require_once('src/Hero.php');
require_once('src/Enemy.php');

class BattleTest extends TestCase
{
    public function testBattle()
    {
        $battle = new Battle();
        $this->assertInstanceOf("Battle", $battle);
    }

    public function testBattleStart()
    {
        $battle = new Battle();
        $hero = new Hero("masayoshi", 5);
        $enemy = new Enemy("tanaka", 10);
        $result = $battle->battleStart($hero, $enemy);
        $this->assertEquals("win", $result);
    }
}