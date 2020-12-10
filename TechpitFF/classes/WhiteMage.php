<?php

class WhiteMage extends Human
{
    // プロパティ
    const MAX_HITPOINT = 80;
    private $hitPoint = 80;
    private $attackPoints = 10;
    private $intelligence = 30; // 魔法攻撃力

    public function __construct($name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoints, $this->intelligence);
    }

    public function doAttackWhiteMage($enemies, $members)
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
            echo $member->getName() . " のHPを " . $this->intelligence * 1.5 . " 回復！\n";
            $member->recoveryDamege($this->intelligence * 1.5, $member);
        } else {
            // ターゲットの決定
            $enemy = $this->selectTarget($enemies);
            parent::doAttack($enemies);
        }
        return true;
    }
}