<?php

namespace Colors\Controllers;

use Colors\App;
use Colors\FileWriter;


class RacoonController
{
    public function index()
    {
        $data = new FileWriter('racoon');
        
        return App::view('racoon/index', [
            'pageTitle' => 'Racoons list',
            'racoons' => $data->showAll(),
        ]);
    }

    public function create()
    {
        return App::view('racoon/create', [
            'pageTitle' => 'Create racoon',
        ]);
    }

    public function store(array $request)
    {
        $data = new FileWriter('racoon');
        $data->create($request);

        header('Location: /racoon');
    }

    public function show(int $id)
    {
        echo '<h1>RacoonController</h1>';
        echo '<h2>show</h2>';
        echo '<p>id: ' . $id . '</p>';
    }
}