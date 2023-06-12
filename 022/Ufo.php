<?php
// Petras

class Ufo {

    public $speed;

    private $destination;



    public function __construct($where, $speed = 5)
    {
        $this->destination = $where;
        $this->speed = $speed;
    }

    public function __destruct()
    {
        echo '<h1>UFO GONE</h1>';
    }


    public function __get($prop)
    {
       
        return $this->$prop;
         
        
        // if ($prop == 'bebras') {
        //     return 'Bebro nėra, bet yra Zebras';
        // }

        // if ($prop == 'destination') {
        //     return $this->destination;
        // }
       
        // echo "<h1>$prop</h1>";
    }


    public function __set($prop, $what)
    {
        if (in_array($what, ['Moon', 'Mars', 'Pluto'])) {
            $this->$prop = $what;
        }
        
        
    }


    protected function whatTime() : string
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