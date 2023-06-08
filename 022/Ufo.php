<?php
// Petras

class Ufo {

    public $speed = 5;


    private function whatTime() : string
    {
        return date('d:s');
    }

    public function turbo() : int
    {
        return $this->speed * 3;
    }

    public function whatTimeBig() : string
    {
        return '<h1>' . $this->whatTime() . '</h1>';
    }
}