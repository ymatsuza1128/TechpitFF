<?php

// class Human
class Human extends Lives
{
    // プロパティ
    const MAX_HITPOINT = 100; // 最大HPの定義 定数

    // メソッド
    public function __construct($name, $hitPoint = 100, $attackPoints = 20, $intelligence = 0)
    {
        parent::__construct($name, $hitPoint, $attackPoints, $intelligence);
    }

}