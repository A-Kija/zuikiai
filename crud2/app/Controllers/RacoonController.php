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

    public function edit(int $id)
    {
        $data = new FileWriter('racoon');
        $racoon = $data->show($id);

        return App::view('racoon/edit', [
            'pageTitle' => 'Edit racoon',
            'racoon' => $racoon,
        ]);
    }


}