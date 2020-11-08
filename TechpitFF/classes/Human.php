<?php

class Human
{
    // プロパティ
    const MAX_HITPOINTS = 100; // 最大HPの定義 定数
    private $name; // 人間の名前
    private $hitPoints = 100; // 現在のHP
    private $attackPoints = 20; // 攻撃力

    // メソッド
    public function __construct($name, $hitPoints = 100, $attackPoints = 20)
    {
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        $this->attackPoints = $attackPoints;
    }

    public function doAttack($enemy)
    {
        echo "『" .$this->name . "』の攻撃！\n";
        echo "【" . $enemy->getName() . "】に " . $this->attackPoints . " のダメージ！\n";
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

    public function recoveryDamege($heal, $target)
    {
        $this->hitPoints += $heal;
        // 最大値を超えて回復しない
        if ($this->hitPoints > $target::MAX_HITPOINTS) {
            $this->hitPoints = $target::MAX_HITPOINTS;
        }
    }

    public function getName()
    {
        return $this->name;
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