<?php

class Brave extends Human
{
    const MAX_HITPOINTS = 120;
    private $hitPoints = self::MAX_HITPOINTS;
    private $attackPoints = 30;

    public function __construct($name)
    {
        parent::__construct($name, $this->hitPoints, $this->attackPoints);
    }

    public function doAttack($enemies)
    {
        // 自分のHPが0以上か、敵のHPが0以上かなどをチェックするメソッドを用意。
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }
        // ターゲットの決定
        $enemy = $this->selectTarget($enemies);

        // // チェック１：自身のHPが0かどうか
        // if ($this->hitPoints <= 0) {
        //     return false;
        // }

        // $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する
        // $enemy = $enemies[$enemyIndex];

        // 乱数の発生
        if (rand(1, 3) === 1) {
            // スキルの発動
            echo "『" .$this->getName() . "』のスキルが発動した！\n";
            echo "『ぜんりょくぎり』！！\n";
            echo $enemy->getName() . " に " . $this->attackPoints * 1.5 . " のダメージ！\n";
            $enemy->takeDamege($this->attackPoints * 1.5);
        } else {
            parent::doAttack($enemies);
        }
        return true;
    }

    public function getAttackPoints()
    {
        return $this->attackPoints;
    }
}