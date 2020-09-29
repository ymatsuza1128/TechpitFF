<?php
class Enemy
{
    const MAX_HITPOINTS = 50; // 最大HPの定義 定数
    public $name; // 敵の名前
    public $hitPoints = 50; // 現在のHP
    public $attackPoints = 10; // 攻撃力
    
    public function doAttack($human)
    {
        echo "『" .$this->name . "』の攻撃！\n";
        echo "【" . $human->name . "】に " . $this->attackPoints . " のダメージ！\n";
        $human->takeDamege($this->attackPoints);
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