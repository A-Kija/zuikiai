<?php


class Pinigine {

private $popieriniaiPinigai = [], $metaliniaiPinigai = [];


public function ideti($kiekis): void
{
    if ($kiekis > 2) {
        $this->popieriniaiPinigai[] = $kiekis;
    } else {
        $this->metaliniaiPinigai[] = $kiekis;
    }
}


public function skaiciuoti(): void
{
    echo '<h1>Viso:<h1><h2>Popierius: '.array_sum($this->popieriniaiPinigai).' metalas: '.array_sum($this->metaliniaiPinigai).'</h2>';
    echo '<h1>Kiekis:<h1><h2>Popierius: '.count($this->popieriniaiPinigai).' metalas: '.count($this->metaliniaiPinigai).'</h2>';
}


}