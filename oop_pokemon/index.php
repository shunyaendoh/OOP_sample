<?php
require_once('./pikachu.php');
require_once('./dengue.php');
// require_once('./pokemon.php');

$pikachu1 = new Pikachu(100, 50);
$pikachu1->cry();
echo ('ピカチュウのHPは' . $pikachu1->hp . '<br>');
$pikachu1->attack();


$denque = new Denque(100, 50);
$denque->cry();
echo ('デングーのHPは' . $denque->hp . '<br>');

?>