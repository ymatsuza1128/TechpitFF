<?php

class Brave extends Human
{
    const MAX_HITPOINTS = 120;
    // private $name;
    private $hitPoints = self::MAX_HITPOINTS;
    private $attackPoints = 20;

    public function doAttack($enemy)
    {
        // 乱数の発生
        if (rand(1, 3) === 1) {
            // スキルの発動
            echo "『" .$this->getName() . "』のスキルが発動した！\n";
            echo "『ぜんりょくぎり』！！\n";
            echo $enemy->name . " に " . $this->getAttackPoints() * 1.5 . " のダメージ！\n";
            $enemy->takeDamege($this->getAttackPoints() * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}