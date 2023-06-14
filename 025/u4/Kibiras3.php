<?php


class Kibiras3 {

    protected $akmenuKiekis;


    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }

    public function prideti1Akmeni(): void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis): void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(): void
    {
        // return $this->akmenuKiekis; <--- reiktu sita daryt
        echo '<h1>Pririnkta: '.$this->akmenuKiekis.'</h1>';
    }

}