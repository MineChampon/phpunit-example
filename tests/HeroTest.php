<?php

use PHPUnit\Framework\TestCase;
require_once('src/Hero.php');
require_once('src/Enemy.php');

class HeroTest extends TestCase
{
    public function testReturnHeroStatus()  // メソッド名変更 or テスト分離
    {
        $hero = new Hero("masayoshi",1);

        $this->assertEquals('masayoshi', $hero->getName());
        $this->assertEquals(1, $hero->getAttackPow());
    }

    public function testHeroAttackEnemy()
    {
        $hero = new Hero("masayoshi", 10);
        $enemy = new Enemy("tanaka", 30);

        $hero->attackEnemy($enemy);

        $this->assertEquals(20, $enemy->getHp());
    }
    
}