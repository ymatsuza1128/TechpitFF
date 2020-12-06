<?php

class WhiteMage extends Human
{
    // プロパティ
    const MAX_HITPOINTS = 80;
    private $hitPoints = 80;
    private $attackPoints = 10;
    private $intelligence = 30; // 魔法攻撃力

    public function __construct($name)
    {
        parent::__construct($name, $this->hitPoints, $this->attackPoints, $this->intelligence);
    }

    public function doAttackWhiteMage($enemies, $humans)
    {
        // 自分のHPが0以上か、敵のHPが0以上かなどをチェックするメソッドを用意。
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }

        if (rand(1, 2) === 1) {
            // ターゲットの決定
            $member = $this->selectTarget($members);

            echo "『" .$this->getName() . "』のスキルが発動した！\n";
            echo "『ケアル』！！\n";
            echo $human->getName() . " のHPを " . $this->intelligence * 1.5 . " 回復！\n";
            $human->recoveryDamege($this->intelligence * 1.5, $human);
        } else {
            // ターゲットの決定
            $enemy = $this->selectTarget($enemies);
            parent::doAttack($enemies);
        }
        return true;
    }
}