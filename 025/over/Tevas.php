<?php


class Tevas {

    static public $social = 'FB';

    public function __construct()
    {
        echo '<h1>Tėvas</h1>';
    }
    
    static public function what()
    {
        echo static::$social;
    }

}