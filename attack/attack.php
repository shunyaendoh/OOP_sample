<?php
require_once('./index.php');

class Attack
{
    public $turn = 1,
           $count_player = 0,
           $player = [];
    
    public function setPlayer($newPlayer)
    {
        $this->player[] = $newPlayer;
        $this->count_player++;
        echo($this->count_player . '人セットされました' . '<br>');
    }
    public function unset()
    {
        unset($_SESSION['x0']);
        unset($_SESSION['y0']);
        unset($_SESSION['x1']);
        unset($_SESSION['y1']);
    }
    public function moveUp($num)
    {
        echo('<br>up');
        $_SESSION['y'][$num]++;
        $this->player[$num]->y = $_SESSION['y'][$num];  

        $p1 = new Player($_SESSION['x'][0],$_SESSION['y'][0],'player1');
        $p2 = new Player($_SESSION['x'][1],$_SESSION['y'][1],'player2');
        
        $this->turn++;
    }
    public function moveLeft($num)
    {   
        echo('<br>left');
        $_SESSION['x'][$num]--;
        $this->player[$num]->x = $_SESSION['x'][$num];

        $p1 = new Player($_SESSION['x'][0],$_SESSION['y'][0],'player1');
        $p2 = new Player($_SESSION['x'][1],$_SESSION['y'][1],'player2');
        
        $this->turn++;
    }
    public function moveRight($num)
    {
        echo('<br>right');
        $_SESSION['x'][$num]++;
        $this->player[$num]->x = $_SESSION['x'][$num];

        $p1 = new Player($_SESSION['x'][0],$_SESSION['y'][0],'player1');
        $p2 = new Player($_SESSION['x'][1],$_SESSION['y'][1],'player2');
        
        $this->turn++;
    }
    public function moveDown($num)
    {
        echo('<br>down');        
        $_SESSION['y'][$num]--;
        $this->player[$num]->y = $_SESSION['y'][$num];
        
        $p1 = new Player($_SESSION['x'][0],$_SESSION['y'][0],'player1');
        $p2 = new Player($_SESSION['x'][1],$_SESSION['y'][1],'player2');

        $this->turn++;
    }
}