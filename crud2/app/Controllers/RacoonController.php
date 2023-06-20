<?php

namespace Colors\Controllers;

class RacoonController
{
    public function index()
    {
        echo '<h1>RacoonController</h1>';
    }

    public function show(int $id)
    {
        echo '<h1>RacoonController</h1>';
        echo '<h2>show</h2>';
        echo '<p>id: ' . $id . '</p>';
    }
}