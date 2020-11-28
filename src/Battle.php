<?php

class Battle
{
    public $enemyCount;
    public $enemies;
    
    public function __construct()
    {
        $this->enemyCount = mt_rand(1, 4);
        $this->enemies = array();
        $this->enemies=[];
        for($i = 0; $i < $this->enemyCount; $i++){ 
            // $hp = 10 + mt_rand(-3, 3);
            // $attack = 10 + mt_rand(-3, 3);
            $this->enemies[]=new Enemy("tanaka".$i, 10, 10);
        }
        
    }
        
    public function battleStart($hero)
    {
        // 現れた
        if($this->enemyCount > 1){
            print($this->enemies[0]->name."たちが現れた。敵の数：".$this->enemyCount);
            print("\r\n");
        }else if ($this->enemyCount = 1) {
            print($this->enemies[0]->name."が現れた。");
            print("\r\n");
        }
        
        
        while(true){
            // 攻撃先の敵を選ぶ乱数
            $target = mt_rand(0, count($this->enemies));
            $hero->attackEnemy($this->enemies[$target]);
            print("\r\n");
            print($hero->name."は".$this->enemies[$target]->name."に攻撃した。残りhp：".$this->enemies[$target]->hp);
            if($this->enemies[$target]->hp == 0){
                print($this->enemies[$target]->name."を倒した。");
                break;
            }


            for($i = 0; $i < count($this->enemies); $i++){
                if($this->enemies[$i]->hp != 0){
                    print("攻撃");
                }
                    
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