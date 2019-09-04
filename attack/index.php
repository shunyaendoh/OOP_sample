<?php
require_once('./attack.php');

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
            <input type="text" name='x1'>
            <input type="text" name='y1'>
            <br>
            <p>player2: x , y</p>
            <input type="text" name='x2'>
            <input type="text" name='y2'>

            <input type="submit" value="submit">
        <hr>
        <br>
        <input type="submit" value='up' name='up'>
        <br>
        <input type="submit" value='left' name='left'>
        <input type="submit" value='right' name='right'>
        <br>
        <input type="submit" value='down' name='down'>
        </form>

    </div>
</body>
</html>