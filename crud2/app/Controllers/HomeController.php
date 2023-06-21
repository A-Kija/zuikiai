<?php
namespace Colors\Controllers;
use Colors\App;

class HomeController
{
    public function index()
    {
        return App::view('home/index', [
            'pageTitle' => 'Home - Colors',
        ]);
    }


}