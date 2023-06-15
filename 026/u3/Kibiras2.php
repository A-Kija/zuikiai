<?php


class Kibiras2 {

    static private $akmenuKiekisVisuoseKibiruose = 0;
    private $akmenuKiekis;

    public static function akmenuKiekisVisuoseKibiruose(): void
    {
        echo '<h1>Akmenų visuose kibiruose: '.self::$akmenuKiekisVisuoseKibiruose.'</h1>';
    }

    public function __invoke()
    {
        echo '<h1>Invoke</h1>';
    }

    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }

    public function prideti1Akmeni(): void
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis): void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu(): void
    {
        // return $this->akmenuKiekis; <--- reiktu sita daryt
        echo '<h1>Pririnkta: '.$this->akmenuKiekis.'</h1>';
    }

    






}