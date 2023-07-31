<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SquareController extends Controller
{
    public function hello()
    {
        return Inertia::render('Hello',
        [
            'color' => 'crimson',
            'name' => 'Ricardo'
        ]);

        // return view('Hello', 
        // [
        //     'color' => 'crimson',
        // ]);
    }
}
