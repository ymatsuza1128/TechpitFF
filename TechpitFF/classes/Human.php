<?php

class Human
{
    // プロパティ
    const MAX_HITPOINTS = 100; // 最大HPの定義 定数
    public $name; // 人間の名前
    public $hitPoints = 100; // 現在のHP
    public $attackPoints = 20; // 攻撃力
    
    // メソッド
    public function doAttack($enemy)
    {
        echo "『" .$this->name . "』の攻撃！\n";
        echo "【" . $enemy->name . "】に " . $this->attackPoints . " のダメージ！\n";
        $enemy->takeDamege($this->attackPoints);
    }
    
    public function takeDamege($damege)
    {
        $this->hitPoints -= $damege;
        // HPが0未満にならないための処理
        if ($this->hitPoints < 0) {
            $this->hitPoints = 0;
        }
    }
}