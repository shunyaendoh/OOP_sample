<?php

// 関数名: sayHello
// 処理: 'Hello'と出力する

function sayHello() {
    print('Hello');
}

sayHello();

function echoHello() {
    echo('Hello');
}

echoHello();



function echoUserName($name) {

    echo ('私は' . $name . 'ではない');
}

echoUserName('yoneda');


class Human {
    public $name;

    function __construct() {
        $this->name ='yuto';
    }

    public function echoUserName() {
        echo ('私は' . $this->name . 'です');
    }
}

$human =new Human();
$human->echoUserName(); 