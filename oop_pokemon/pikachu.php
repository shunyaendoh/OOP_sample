<?php

require_once('./pokemon.php');

class Pikachu extends Pokemon
{

    // オーバーライド
    public function cry()
    {
        echo('パカ');
        echo('<br>');
    }
    public function attack()
    {
        $this->thunderVolt();
    }

    private function thunderVolt()
    {
        echo('サンダーボルト発動' . '<br>' . 'パリパリ' . '<br>');
    }

}