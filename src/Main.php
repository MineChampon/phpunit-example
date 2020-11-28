<?php

require_once('Hero.php');
require_once('Enemy.php');
require_once('Battle.php');
// 勇者クラス
$hero = new Hero("masanori", 1);
// 敵クラス
$enemy = new Enemy("tanaka", 3);

$battle = new Battle();
$battle->battleStart($hero, $enemy);

// 標準入力(1行)
$command = trim(fgets(STDIN));
if($command == "1") {
    print $command;
} else {
    print "else : ".$command;
}



