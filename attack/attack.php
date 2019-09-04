<?php
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

class Player 
{
    public $x,
           $y;

    // プレイヤー数
    public $member_count = 0;
    // ターン数
    public $turn = 1;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        $member_count++;
        echo $member_count;
    }
    // プレイヤーを動かすメソッド
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
    // ターン数を教えるメソッド
    function sayTurn()
    {
        echo ('現在' . $turn . 'ターンです');
    } 
}

function calc() 
{
    return ;
}

// プレイヤーの座標を記録
if (!empty($_POST))
{
    $x1 = h($_POST['x1']);
    $y1 = h($_POST['y1']);

    $p1 = new Player($x1, $y1);
    echo $p1->x;
}
if (!empty($_POST))
{
    $x2 = h($_POST['x2']);
    $y2 = h($_POST['y2']);

    $p2 = new Player($x2, $y2);
    echo $p2->x;
}

// 最初に現在のターンを知らせる
// ターンの偶数奇数でプレイヤーを分ける

// 上左右下に動かすための変数を宣言
if (!empty($_POST['up'])) 
{
    $up = h($_POST['up']);
    var_dump ($up);
}
if (!empty($_POST['left'])) 
{
    $left = h($_POST['left']);
}
if (!empty($_POST['right'])) 
{
    $right = h($_POST['right']);
}
if (!empty($_POST['down'])) 
{
    $down = h($_POST['down']);
}

