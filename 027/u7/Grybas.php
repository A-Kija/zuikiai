<?php

class Grybas {
    private $valgomas, $sukirmijes, $svoris;

    public function __construct() {
        $this->valgomas = !rand(0, 1);
        $this->sukirmijes = !rand(0, 1);
        $this->svoris = rand(5, 45);
    }

    public function __get($prop) {
        return $this->$prop;
    }
}