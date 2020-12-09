<?php

class Brave extends Human
{
    const MAX_HITPOINTS = 120;
    private $hitPoints = self::MAX_HITPOINTS;
    private $attackPoints = 30;

    private static $instance;

    private function __construct($name)
    {
        parent::__construct($name, $this->hitPoints, $this->attackPoints);
    }

    // シングルトンで常にインスタンスは一つしか生成しない
    public static function getInstance($name)
    {
        if (empty(self::$instance)) {
            self::$instance = new Brave($name);
        }

        return self::$instance;
    }

    public function doAttack($enemies)
    {
        // 自分のHPが0以上か、敵のHPが0以上かなどをチェックするメソッドを用意。
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }
        // ターゲットの決定
        $enemy = $this->selectTarget($enemies);

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