<?php

class Battle
{
    public function __construct()
    {
       
    }

    public function battleStart($hero, $enemy)  // クラス名とメソッド名が同じなためコンストラクタ扱い、即ちnewした瞬間バトルする
    {
        while($enemy->hp > 0){            
            $hero->attackEnemy($enemy);
            print("\r\n");
            print($hero->name."は".$enemy->name."に攻撃した。残りhp：".$enemy->hp);
        }
        print("\r\n");
        print("戦闘終了\r\n");
        return "win";
    }   
}