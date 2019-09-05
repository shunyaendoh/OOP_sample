<?php
require_once('./index.php');

class Player 
{
    public $x,
           $y,
           $name;

    public function __construct($x, $y, $name)
    {
        $this->x = $x;
        $this->y = $y;
        $this->name = $name;
    }

}
