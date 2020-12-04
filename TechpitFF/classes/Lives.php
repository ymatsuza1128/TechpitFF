<?php

class Lives
{
    // プロパティ
    private $name;
    private $hitPoints;
    private $attackPoints;
    private $intelligence;

    // メソッド
    public function __construct($name, $hitPoints = 50, $attackPoints = 10, $intelligence = 0)
    {
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        $this->attackPoints = $attackPoints;
        $this->intelligence = $intelligence;
    }

    // 名前を取得するメソッド（ゲッター）
    public function getName()
    {
        return $this->name;
    }

    // 現在HPを取得するメソッド（ゲッター）
    public function getHitPoints()
    {
        $result = $this->hitPoints;
        if ($result < 0) {
            $result = 0;
        }
        return $result;
    }

    // 現在HPを設定するメソッド（セッター）
    public function takeDamege($damege)
    {
        $this->hitPoints -= $damege;
        // HPが0未満にならないための処理
        if ($this->hitPoints < 0) {
            $this->hitPoints = 0;
        }
    }

    // 現在HPを設定するメソッド（セッター）
    public function recoveryDamege($heal, Object $target)
    {
        $this->hitPoints += $heal;
        // 最大値を超えて回復しない
        if ($this->hitPoints > $target::MAX_HITPOINTS) {
            $this->hitPoints = $target::MAX_HITPOINTS;
        }
    }

    //  攻撃するメソッド
    public function doAttack($targets)
    {
        if (!$this->isEnableAttack($targets)) {
            return false;
        }
        // ターゲットの決定
        $target = $this->selectTarget($targets);

        echo "『" .$this->name . "』の攻撃！\n";
        echo "【" . $target->getName() . "】に " . $this->attackPoints . " のダメージ！\n";
        $target->takeDamege($this->attackPoints);
        return true;
    }

    //  攻撃ができるかどうかチェック
    public function isEnableAttack($targets)
    {
        // チェック１：自信のHPが0以上かどうか
        if ($this->hitPoints <= 0) {
            return false;
        }
        // チェック２：敵が全員HP0以下かどうか
        $isAllDie = true;
        foreach ($targets as $target) {
            if ($target->getHitPoints() > 0) {
                $isAllDie = false;
            }
        }
        if ($isAllDie) {
            return false;
        }

        // チェックを抜けた場合、攻撃可能
        return true;
    }

    // ターゲットを決めるメソッド
    public function selectTarget($targets)
    {
        $target = $targets[rand(0, count($targets) -1)];
        // 敵のHPが0以下の場合再度ターゲットを決める
        while ($target->getHitPoints() <= 0) {
            $target = $targets[rand(0, count($targets) -1)];
        }
        return $target;
    }

}

