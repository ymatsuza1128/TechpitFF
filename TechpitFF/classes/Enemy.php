<?php
// class Enemy
class Enemy extends Lives
{
    const MAX_HITPOINTS = 50; // 最大HPの定義 定数

    public function __construct($name, $attackPoints)
    {
        $hitPoints = 50;
        $intelligence = 0;
        parent::__construct($name, $hitPoints, $attackPoints, $intelligence);
    }

}