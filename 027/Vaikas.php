<?php


class Vaikas extends Tevas {

    use Kleopatra, Ieva {
        // Ieva::fun insteadof Kleopatra;
        Kleopatra::fun as funK;
        Ieva::fun as funI;
    }

    public $dog='Rex';
    
    public function fun()
    {
        echo '<h1>I like Tik-Tok (14+)</h1>';
    }
}