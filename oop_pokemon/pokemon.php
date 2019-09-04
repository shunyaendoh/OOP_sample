<?php

class Pokemon
{
    public $hp;
    public $pp;

    public function cry()
    {
        echo('ウェーーーーーーン');
        echo('<br>');
    }
    public function __construct($hp, $pp)
    {
        $this->hp = $hp;
        $this->pp = $pp;
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
