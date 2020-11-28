<?php

use PHPUnit\Framework\TestCase;
require_once('src/Enemy.php');

class EnemyTest extends TestCase
{
    public function testReturnEnemyStatus()
    {
        $enemy = new Enemy("tanaka", 3, 2);  // 第三引数 : 敵の攻撃力を追加

        $this->assertEquals('tanaka', $enemy->getName());
        $this->assertEquals(3, $enemy->getHp());
        $this->assertEquals(2, $enemy->getAttackPow());
    }

    public function testEnemyAttackHero(){
        $hero = new Hero("masayoshi", 20, 10);  // 引数追加
        $enemy = new Enemy("tanaka", 30, 1);  // 引数追加

        $enemy->attackHero($hero);

        $this->assertEquals(19, $hero->getHp());
        
    }
}