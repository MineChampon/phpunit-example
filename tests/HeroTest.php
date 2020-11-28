<?php

use PHPUnit\Framework\TestCase;
require_once('src/Hero.php');
require_once('src/Enemy.php');

class HeroTest extends TestCase
{
    public function testReturnHeroStatus()
    {
        $hero = new Hero("masayoshi", 5, 1);  // 第三引数に体力を追加

        $this->assertEquals('masayoshi', $hero->getName());
        $this->assertEquals(5, $hero->getHp());  // 体力追加
        $this->assertEquals(1, $hero->getAttackPow());
    }

    public function testHeroAttackEnemy()
    {
        $hero = new Hero("masayoshi", 20, 10);  // 引数追加
        $enemy = new Enemy("tanaka", 30, 1);  // 引数追加

        $hero->attackEnemy($enemy);

        $this->assertEquals(20, $enemy->getHp());
    }
    
}