<?php
session_start();
require_once('attack.php');

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  
}


if (!empty($_POST))
{
    $_SESSION['player1_x'] = h($_POST['player1_x']);
    $_SESSION['player1_y'] = h($_POST['player1_y']);
    $_SESSION['player2_x'] = h($_POST['player2_x']);
    $_SESSION['player2_y'] = h($_POST['player2_y']);

    $player1 = new Attack_player($_SESSION['player1_x'], $_SESSION['player1_y']);
    $player2 = new Attack_player($_SESSION['player2_x'], $_SESSION['player2_y']);

    $up = h($_POST['up']);
    $left = h($_POST['left']);
    $right = h($_POST['right']);
    $down = h($_POST['down']);
}

if ($end == 0)
{
    // ターンの処理
    // 座標の変化の処理
    if ($turn % 2 != 0)
    {
        echo ('player1のターン');
        if (isset($up))
        {
            $player1->moveUp();
            unset($up);
            $up = h($_POST['up']);

        }
        if (isset($left))
        {
            $player1->moveLeft();
            unset($left);
            $left = h($_POST['left']);
        }
        if (isset($right))
        {
            $player1->moveRight();
            unset($right);
            $right = h($_POST['right']);
        }
        if (isset($down))
        {
            $player1->moveDown();
            unset($down);
            $down = h($_POST['down']);
        }
    } else 
    {
        echo ('player2のターン');
        if (isset($up))
        {
            $player1->moveUp();
            unset($up);
            $up = h($_POST['up']);
        }
        if (isset($left))
        {
            $player1->moveLeft();
            unset($left);
            $left = h($_POST['left']);
        }
        if (isset($right))
        {
            $player1->moveRight();
            unset($right);
            $right = h($_POST['right']);
        }
        if (isset($down))
        {
            $player1->moveDown();
            unset($down);
            $down = h($_POST['down']);
        }
    }

}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attack!</title>
</head>
<body>
    <div>
        <form action="" method='post'>
            <p>player1: x , y</p>
            <input type="text" name='player1_x'>
            <input type="text" name='player1_y'>
            <br>
            <p>player2: x , y</p>
            <input type="text" name='player2_x'>
            <input type="text" name='player2_y'>

            <input type="submit" value="submit">
        </form>
        <hr>
        <br>
        <input type="button" value='up' name='up'>
        <br>
        <input type="button" value='left' name='left'>
        <input type="button" value='right' name='right'>
        <br>
        <input type="button" value='down' name='down'>
    </div>
</body>
</html>