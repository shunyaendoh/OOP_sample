<?php

// クラスの作成
class Pikachu 
{
    // プロパティ (変数)
        // HP/MP
    public $hp;
    public $mp;

    // メソッド (関数)
        // サンダーボルト/アイアインテール

    function thunderVolt() 
    {
        if ($this->mp > 20)
        {
            echo ('サンダーボルトを発動した');
            echo ('<br>');
            $this->mp -= 20;
        } else 
        {
            echo ('MPが足りない' . '<br>' . '現在のMP: ' . $this->mp . '<br>');
        }

    }
    function ironTail() 
    {
        if ($this->mp > 10)
        {
            echo ('アイアンテールを発動した');
            echo ('<br>');
            $this->mp -= 10;
        } else
        {
            echo ('MPが足りない' . '<br>' . '現在のMP: ' . $this->mp . '<br>');
        }

    }


}
?>