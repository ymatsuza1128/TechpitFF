<?php
class Enemy
{
    const MAX_HITPOINTS = 50; // 最大HPの定義 定数
    private $name; // 敵の名前
    private $hitPoints = 50; // 現在のHP
    private $attackPoints = 10; // 攻撃力

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function doAttack($human)
    {
        echo "『" .$this->name . "』の攻撃！\n";
        echo "【" . $human->getName() . "】に " . $this->attackPoints . " のダメージ！\n";
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