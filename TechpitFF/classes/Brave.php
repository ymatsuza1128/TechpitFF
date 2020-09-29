<?php

class Brave extends Human
{

    const MAX_HITPOINTS = 120;
    public $hitPoints = self::MAX_HITPOINTS;
    public $attackPoints = 30;
 
    public function doAttack($enemy)
    {
        // 乱数の発生
        if (rand(1, 3) === 1) {
            // スキルの発動
            echo "『" .$this->name . "』のスキルが発動した！\n";
            echo "『ぜんりょくぎり』！！\n";
            echo $enemy->name . " に " . $this->attackPoints * 1.5 . " のダメージ！\n";
            $enemy->takeDamege($this->attackPoints * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }   
}