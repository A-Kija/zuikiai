<?php


class TV {

    static public $price = '458eur';
    
    public $maker = 'Samsung';


    static public function discount(): void
    {
        $this->maker = 'Tauras';
        self::$price = rand(50, 200) . 'eur';
    }


    public function whatPrice(): void
    {
        echo '<h1>'. self::$price .'</h1>';
    }

    public function changePrice(): void
    {
        self::$price = rand(300, 800) . 'eur';
    }

}