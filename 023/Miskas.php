<?php


class Miskas {

    protected $color = 'Rausvas';

    public function getArea() : string
    {
        return 'Miško dydis yra: '. rand(10,99);
    }
}