<?php

use PHPUnit\Framework\TestCase;
require_once('src/Battle.php');
require_once('src/Hero.php');
require_once('src/Enemy.php');

class BattleTest extends TestCase
{
    public function testBattleEnemyCount()
    {   
        $battle = new Battle();
        $this->assertGreaterThanOrEqual(1, $battle->enemyCount);
        $this->assertLessThanOrEqual(4, $battle->enemyCount);
        foreach($battle->enemies as $enemy){
            $this->assertInstanceOf("Enemy", $enemy);
        }
    }

    public function testBattleStartWin()
    {
        $battle = new Battle();
        $hero = new Hero("masayoshi", 13, 5);
        $result = $battle->battleStart($hero);
        $this->assertEquals("win", $result);
    }

    public function testBattleStartLose()
    {
        $battle = new Battle();
        $hero = new Hero("masayoshi", 13, 5);
        $result = $battle->battleStart($hero);
        $this->assertEquals("lose", $result);
    }
}