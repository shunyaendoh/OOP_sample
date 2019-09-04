<?php

class Kan 
{
    public $hp;
    public $kp;

    public function __construct($hp, $mp) 
    {
        echo('完が生まれた');
        echo('<br>');

        $this->hp = $hp;
        $this->mp = $mp;
    }

    function kankeri ()
    {
        echo ('完蹴りを発動した。みたいなっ' . '<br>');
    }

    function typing () 
    {
        echo ('今日のE-typingの結果はC+。みたいなっ' . '<br>');
    }
}

?>