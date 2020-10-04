<?php

class Human
{
    // プロパティ
    const MAX_HITPOINTS = 100; // 最大HPの定義 定数
    private $name; // 人間の名前
    private $hitPoints = 100; // 現在のHP
    private $attackPoints = 20; // 攻撃力

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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    public function getAttackPoints()
    {
        return $this->attackPoints;
    }
}