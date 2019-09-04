<?php
require_once('Pikachu.php');

$pikachu1 = new Pikachu();

$pikachu1->hp = 100;
$pikachu1->mp = 50;

echo 'ピカチュウのHPは' . $pikachu1->hp . '<br>';
echo 'ピカチュウのMPは' . $pikachu1->mp . '<br>';

$pikachu1->thunderVolt();
$pikachu1->ironTail();
$pikachu1->thunderVolt();
$pikachu1->ironTail();
$pikachu1->thunderVolt();
$pikachu1->ironTail();

echo '<br>';

$pikachu2 = new Pikachu();

$pikachu2->hp = 500;
$pikachu2->mp = 240;

echo 'ピカチュウのHPは' . $pikachu2->hp . '<br>';
echo 'ピカチュウのMPは' . $pikachu2->mp . '<br>';

$pikachu2->thunderVolt();
$pikachu2->ironTail();