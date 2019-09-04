<?php

class Satoshi
{
    public $box =[];

    public function getPokemon($newPokemon)
    {
        $this->box[] = $newPokemon;
    }
    public function showPokemons()
    {
        echo('---ポケモン一覧---' . '<br><br>');
        foreach ($this->box as $pokemon)
        {
            echo($pokemon->name);
            echo(' は鳴いた ');
            $pokemon->cry();
            echo('<br>');
        }
        echo('-----------------------' . '<br>');
    }
    public function orderAttack($num)
    {
        $pokemon = $this->box[$num];
        // var_dump($pokemon);
        echo('サトシは' . $pokemon->name . 'に指示を出した' . '<br>');
        $pokemon->attack();
        echo('<br>');
    }
    public function superAttack()
    {
        $pokemons = $this->box;
        // var_dump($pokemons);
        echo('サトシは全てのポケモンにに指示をだした');
        echo('<br>');
        foreach($pokemons as $pokemon)
        {
            echo($pokemon->name);
            echo('は');
            echo($pokemon->attack());
            echo('<br>');
        }
    }
}