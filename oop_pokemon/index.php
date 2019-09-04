<?php
require_once('./pikachu.php');
require_once('./dengue.php');
require_once('./satoshi.php');
// require_once('./pokemon.php');

$pikachu1 = new Pikachu(100, 50, 'パカチュー');
$pikachu1->cry();
echo ($pikachu1->name . 'のHPは' . $pikachu1->hp . '<br>');
$pikachu1->attack();


$denque = new Denque(100, 50, 'デングー');
$denque->cry();
echo ($denque->name . 'のHPは' . $denque->hp . '<br>');

$satoshi = new Satoshi();
var_dump($satoshi->box);
echo('<br>');

$satoshi->getPokemon($pikachu1);
var_dump($satoshi->box);
echo('<br>');
echo('サトシは' . count($satoshi->box) . '匹持っています' . '<br>');
echo('<br>');

$satoshi->getPokemon($denque);
var_dump($satoshi->box);
echo('<br>');
echo('サトシは' . count($satoshi->box) . '匹持っています' . '<br>');
echo('<br>');

$pikachu2 = new Pikachu(120, 20, 'ポコチュー');
$satoshi->getPokemon($pikachu2);
var_dump($satoshi->box);
echo('<br>');
echo('サトシは' . count($satoshi->box) . '匹持っています' . '<br>');
echo('<br>');

$satoshi->showPokemons();

$satoshi->orderAttack(0);

$satoshi->superAttack();
?>