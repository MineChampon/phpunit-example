<?php

class Battle
{
    public function __construct()
    {
       
    }

    public function battleStart($hero, $enemy)
    {
        while(true){            
            $hero->attackEnemy($enemy);
            print("\r\n");
            print($hero->name."は".$enemy->name."に攻撃した。残りhp：".$enemy->hp);
            if($enemy->hp == 0){
            break;
            }

            $enemy->attackHero($hero);
            print("\r\n");
            print($enemy->name."は".$hero->name."に攻撃した。残りhp：".$hero->hp);
            if($hero->hp == 0){
            break;
            }
        }
        print("\r\n");
        print("戦闘終了\r\n");
        //勝ち負けのやつ
        if($enemy->hp <= 0){
            print($hero->name."は勝利した");
            return "win";
        }
        print($hero->name."は敗北した");
        return "lose";
    }   
}