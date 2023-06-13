<?php

class Paukstis extends Miskas {


    public $name, $age;
    
    public function __construct(string $name, int $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function fly() : void
    {
        echo '<h1>'.$this->name.' Skrenda skrenda '.$this->color.'</h1>';
    }

    public function getArea() : string
    {
        return 'Aš karvelis gyvenu mieste';
    }

}