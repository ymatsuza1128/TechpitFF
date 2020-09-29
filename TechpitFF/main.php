<?php

// echo "処理のはじまりはじまり～！\n\n";
// ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

// インスタンス化
$tiida = new Brave();
$goblin = new Enemy();

$tiida->name = "ティーダ";
$goblin->name = "ゴブリン";

$turn = 1; // ここを追加

while ($tiida->hitPoints > 0 && $goblin->hitPoints > 0) {
    echo "*** $turn ターン目 ***\n\n"; // ここを追加

     // 現在のHPの表示
    echo $tiida->name . "　：　" . $tiida->hitPoints . "/" . $tiida::MAX_HITPOINTS . "\n";
    echo $goblin->name . "　：　" . $goblin->hitPoints . "/" . $goblin::MAX_HITPOINTS . "\n";
    echo "\n";

    // 攻撃
    $tiida->doAttack($goblin);
    echo "\n";
    $goblin->doAttack($tiida);
    echo "\n";
    
    $turn++; // ここを追加

}
echo "★★★ 戦闘終了 ★★★\n\n";
echo $tiida->name . "　：　" . $tiida->hitPoints . "/" . $tiida::MAX_HITPOINTS . "\n";
echo $goblin->name . "　：　" . $goblin->hitPoints . "/" . $goblin::MAX_HITPOINTS . "\n\n";