<?php


class Krepsys {
    const DYDIS = 500;
    private $svoris = 0;

    public function deti(Grybas $grybas): bool {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->svoris += $grybas->svoris;
            return self::DYDIS >= $this->svoris;
        }
        return true;
    }

}