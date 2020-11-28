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

    public function testBattleStartWin()
    {
        $battle = new Battle();
        $hero = new Hero("masayoshi", 13, 5);
        $enemy = new Enemy("tanaka", 10, 5);
        $result = $battle->battleStart($hero, $enemy);
        $this->assertEquals("win", $result);
    }

    public function testBattleStartLose()
    {
        $battle = new Battle();
        $hero = new Hero("masayoshi", 13, 5);
        $enemy = new Enemy("tanaka", 100, 5);
        $result = $battle->battleStart($hero, $enemy);
        $this->assertEquals("lose", $result);
    }
}