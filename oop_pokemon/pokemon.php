<?php

class Pokemon
{
    public $hp;
    public $pp;
    public $name;

    public function cry()
    {
        echo('ウェーーーーーーン');
        echo('<br>');
    }
    public function __construct($hp, $pp, $name)
    {
        $this->hp = $hp;
        $this->pp = $pp;
        $this->name = $name;
    }
    public function attack()
    {
        $this->noAttack();
    }
    private function noAttack()
    {
        echo('技を覚えてません' . '<br>');
    }

}
