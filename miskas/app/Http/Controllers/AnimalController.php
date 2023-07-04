<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = [
        [
            'name' => 'Bobikas',
            'type' => 'dog',
            'description' => 'Labai geras suniukas',
            'price' => 500
        ],
        [
            'name' => 'Pukis',
            'type' => 'cat',
            'description' => 'Labai geras katinukas',
            'price' => 300
        ],
        [
            'name' => 'Pypis',
            'type' => 'parrot',
            'description' => 'Labai geras papuga',
            'price' => 100
        ],
        [
            'name' => 'Rainis',
            'type' => 'cat',
            'description' => 'Labai geras katinukas',
            'price' => 800
        ],
    ];
    
    
    public function index(Request $request)
    {
        return view('forest.index',[
            'what' => $request->what ?? 'no no no',
            'who' => 'Doctor Dolittle',
            'yes' => true
        ]);
    }

    public function racoon(string $color = 'black')
    {
        return '<h1 style="color:'.$color.';">Hello Racoon!</h1>';
    }

    public function animals()
    {
        
        $collection = collect($this->animals);


        // $collection = 
        // $collection->map(function ($item) {
        //     $item['price'] = $item['price'] . ' Eur';
        //     return $item;
        // })
        // ->filter(function ($item) {
        //     return $item['type'] != 'dog';
        // })
        // ->sortBy('type');

        $collection = $collection->pluck('type')->unique()->all();
        
        dump($collection);

        return view('forest.animals', [
            'animals' => $collection
        ]);
    }
}
