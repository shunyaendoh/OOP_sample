<?php
require_once('./pokemon.php');

class Denque extends pokemon
{
    public function cry()
    {
        echo('デング〜');
        echo('<br>');
    }
}