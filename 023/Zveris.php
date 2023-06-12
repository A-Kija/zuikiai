<?php

class Zveris {


    public $name, $age;
    
    public function __construct(string $name, int $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function run() : void
    {
        echo '<h1>'.$this->name.' Bėga bėga</h1>';
    }


    public function getArea() : string
    {
        return 'Miško dydis yra: '. rand(10,99);
    }



}