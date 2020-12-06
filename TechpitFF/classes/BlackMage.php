<?php

class BlackMage extends Human
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

    public function doAttack($enemies)
    {
        // 自分のHPが0以上か、敵のHPが0以上かなどをチェックするメソッドを用意。
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }
        // ターゲットの決定
        $enemy = $this->selectTarget($enemies);

        if (rand(1, 2) === 1) {
            echo "『" .$this->getName() . "』のスキルが発動した！\n";
            echo "『ファイア』！！\n";
            echo $enemy->getName() . " に " . $this->intelligence * 1.5 . " のダメージ！\n";
            $enemy->takeDamege($this->intelligence * 1.5);
        } else {
            parent::doAttack($enemies);
        }
        return true;
    }
}
