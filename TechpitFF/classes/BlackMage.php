<?php
class BlackMage extends Human
{
    // プロパティ
    const MAX_HITPOINTS = 80;
    private $hitPoints = 80;
    private $attackPoints = 10;
    private $intelligence = 30; // 魔法攻撃力

    public function doAttack($enemy)
    {
        if (rand(1, 2) === 1) {
            echo "『" .$this->getName() . "』のスキルが発動した！\n";
            echo "『ファイア』！！\n";
            echo $enemy->getName() . " に " . $this->intelligence * 1.5 . " のダメージ！\n";
            $enemy->takeDamege($this->intelligence * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}
