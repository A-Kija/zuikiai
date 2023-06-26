<?php

namespace Colors\Controllers;

use Colors\App;

class ColorController
{
    public function index()
    {
        return App::view('color/index', [
            'pageTitle' => 'Color - Colors',
        ]);
    }

    public function list()
    {
        return json_encode(['html' => 'Hello from list']);
    }

}