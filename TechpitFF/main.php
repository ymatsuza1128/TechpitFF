<?php
// ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

// インスタンス化
$tiida = new Brave("ティーダ");
$goblin = new Enemy("ゴブリン");

// $tiida->name = "ティーダ";
// $goblin->name = "ゴブリン";

$turn = 1;

while ($tiida->getHitPoints() > 0 && $goblin->getHitPoints() > 0) {
    echo "*** $turn ターン目 ***\n\n";

     // 現在のHPの表示
    echo $tiida->getName() . "　：　" . $tiida->getHitPoints() . "/" . $tiida::MAX_HITPOINTS . "\n";
    echo $goblin->getName() . "　：　" . $goblin->getHitPoints() . "/" . $goblin::MAX_HITPOINTS . "\n";
    echo "\n";

    // 攻撃
    $tiida->doAttack($goblin);
    echo "\n";
    $goblin->doAttack($tiida);
    echo "\n";

    $turn++; // ここを追加

}
echo "★★★ 戦闘終了 ★★★\n\n";
echo $tiida->getName() . "　：　" . $tiida->getHitPoints() . "/" . $tiida::MAX_HITPOINTS . "\n";
echo $goblin->getName() . "　：　" . $goblin->getHitPoints() . "/" . $goblin::MAX_HITPOINTS . "\n\n";