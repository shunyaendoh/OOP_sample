<?php
session_start();
require_once('./Attack.php');
require_once('./Player.php');

if (isset($_POST['x0']))
{
$_SESSION['x'][0] = $_POST['x0'];
}
if (isset($_POST['y0']))
{
$_SESSION['y'][0] = $_POST['y0'];
}
if (isset($_POST['x1']))
{
$_SESSION['x'][1] = $_POST['x1'];
}
if (isset($_POST['y1']))
{
$_SESSION['y'][1] = $_POST['y1'];
}
if (isset($_POST['unset']))
{
    $attack->unset();
}
$p1 = new Player($_SESSION['x'][0],$_SESSION['y'][0],'player1');
$p2 = new Player($_SESSION['x'][1],$_SESSION['y'][1],'player2');
echo($p1->x . '/' . $p1->y . 'です' .'<br>');
echo($p2->x . '/' . $p2->y . 'です' .'<br>');

$attack = new Attack();
$attack->setPlayer($p1);
$attack->setPlayer($p2);
var_dump($attack);
echo('<br>');

if ($attack->turn % 2 != 0) // プレイヤー１のターン
{   
    echo('プレイヤー１のターンです');
    if (isset($_POST['up']))
    {
    $attack->moveUp(0);
    }
    if (isset($_POST['left']))
    {
    $attack->moveLeft(0);
    }
    if (isset($_POST['right']))
    {
    $attack->moveRight(0);
    }
    if (isset($_POST['down']))
    {
    $attack->moveDown(0);
    }
} else                      // プレイヤー２のターン
{
    echo('プレイヤー２のターンです');
    echo('<br>');
    if (isset($_POST['up']))
    {
    $attack->moveUp(1);
    }
    if (isset($_POST['left']))
    {
    $attack->moveLeft(1);
    }
    if (isset($_POST['right']))
    {
    $attack->moveRight(1);
    }
    if (isset($_POST['down']))
    {
    $attack->moveDown(1);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method='post'>
            <p>player1: x , y</p>
            <input type="text" name='x0'>
            <input type="text" name='y0'>
            <br>
            <p>player2: x , y</p>
            <input type="text" name='x1'>
            <input type="text" name='y1'>

            <input type="submit" value="submit">
        <hr>
        <br>
        <input type="submit" value='up' name='up'>
        <br>
        <input type="submit" value='left' name='left'>
        <input type="submit" value='right' name='right'>
        <br>
        <input type="submit" value='down' name='down'>
        <hr>
        <input type="submit" value="unset">
        </form>

    </div>
</body>
</html>