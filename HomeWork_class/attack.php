<?php
// session_start();

// ゲームが終了したか判断する変数end
// インスタンスの数をカウントする変数count
// ターンをカウントする変数turn
global $end,
       $count,
       $turn;
    
       $end = 0;
       $count = 0;
       $turn = 0;

class Attack_player
{
// プロパティの宣言
// プレイヤーのx座標/y座標
    public $x,
           $y;

// コンストラクタの宣言
// x,y座標をインプット要素から取り出すための準備
// ゲーム進行を促す文字列の表示
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        $count++;
        echo $count;
        echo ('値をセットしました');

        if ($count == 2)
        {
            echo ('ゲームを開始します');
        } elseif ($count == 1)
        {
            echo ('あと一人必要です');
        }
    }

    function moveUp()
    {
        $this->y = $y + 1;
        $turn++;
    }
    function moveLeft()
    {
        $this->x = $x - 1;
        $turn++;
    }
    function moveRight()
    {
        $this->x = $x + 1;
        $turn++;
    }
    function moveDown()
    {
        $this->y = $y - 1;
        $turn++;
    }

    function calc()
    {

    }

}