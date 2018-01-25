<?php

class Hello {
    // just says hello
    // cambio da private a protected così la classe pu
    protected $name;
    
    function setName($n){
        $this-> name=$n;
    }    
    
    static function sayHello(){
        echo "hello ";
    }
    function sayHelloToMe(){
        echo "hello".$this->name;
    }
}   



// metodi statici associati alla classe
// metodi di istanza associati ad un'oggetto della classe
