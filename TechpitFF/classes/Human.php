<?php

// class Human
class Human extends Lives
{
    // プロパティ
    const MAX_HITPOINTS = 100; // 最大HPの定義 定数

    // メソッド
    public function __construct($name, $hitPoints = 100, $attackPoints = 20, $intelligence = 0)
    {
        parent::__construct($name, $hitPoints, $attackPoints, $intelligence);
    }

}