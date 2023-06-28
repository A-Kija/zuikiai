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

        $colors = App::get('colors')->showAll();

        $html = App::render('color/list', [
            'colors' => $colors,
        ]);

        return App::json([
            'html' => $html,
            'success' => true
        ]);
        
        
    }

    public function store($data)
    {
        App::get('colors')->create($data);

        return App::json([
            'success' => true
        ]);
    }

    public function destroy(int $id)
    {
        App::get('colors')->delete($id);

        return App::json([
            'success' => true
        ]);
    }

    public function edit(int $id)
    {
        $color = App::get('colors')->show($id);
        
        $html = App::render('color/edit', [
            'color' => $color,
        ]);

        return App::json([
            'html' => $html,
            'success' => true
        ]);
    }

    public function update(int $id, $data)
    {
        App::get('colors')->update($id, $data);

        return App::json([
            'success' => true
        ]);
    }

}