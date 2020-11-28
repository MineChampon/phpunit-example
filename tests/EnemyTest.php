<?php

use PHPUnit\Framework\TestCase;
require_once('src/Enemy.php');

class EnemyTest extends TestCase
{
    public function testReturnEnemyStatus()
    {
        $enemy = new Enemy("tanaka",3);

        $this->assertEquals('tanaka', $enemy->getName());
        $this->assertEquals(3, $enemy->getHp());
    }
}