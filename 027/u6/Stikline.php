<?php


class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct($turis) 
    {
        $this->turis = $turis;
    }

    public function ipilti(int $kiekis): self
    {
        $this->kiekis = min($this->turis, $this->kiekis + $kiekis);
        return $this;
    }

    public function ispilti(): int
    {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }

    public function getKiekis(): int 
    {
        return $this->kiekis;
    }

    public function getTuris(): int 
    {
        return $this->turis;
    }
}