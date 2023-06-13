<?php


class Pinigine {

private $popieriniaiPinigai = 0, $metaliniaiPinigai = 0;


public function ideti($kiekis): void
{
    if ($kiekis > 2) {
        $this->popieriniaiPinigai += $kiekis;
    } else {
        $this->metaliniaiPinigai += $kiekis;
    }
}


public function skaiciuoti(): void
{
    echo '<h1>Popierius: '.$this->popieriniaiPinigai.' metalas: '.$this->metaliniaiPinigai.'</h1>';
}


}