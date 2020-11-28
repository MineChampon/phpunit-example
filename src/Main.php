<?php

require_once('Hero.php');
require_once('Enemy.php');
require_once('Battle.php');
// 勇者クラス
$hero = new Hero("masanori", 10, 5);
// 敵クラス
$enemy = new Enemy("tanaka", 3, 3);

$battle = new Battle();
$result = $battle->battleStart($hero, $enemy);
if($result == "lose"){
    print("GAME OVER");
    return;
}

// 標準入力(1行)
// $command = trim(fgets(STDIN));
// if($command == "1") {
//     print $command;
// } else {
//     print "else : ".$command;
// }



