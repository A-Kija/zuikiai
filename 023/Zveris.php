<?php

class Zveris extends Miskas {


    public $name, $age;
    
    public function __construct(string $name, int $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function run() : void
    {
        echo '<h1>'.$this->name.' Bėga bėga '.$this->color.'</h1>';
    }






}