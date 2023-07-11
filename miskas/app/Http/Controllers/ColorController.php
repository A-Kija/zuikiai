<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $colors = Color::all();
        
        return view('colors.index', [
            'colors' => $colors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'color' => 'required|max:7|regex:/^#[0-9A-F]{6}$/i',
                'color_author' => 'required|max:50|min:3|alpha',
                'color_rate' => 'required|integer|between:1,10',
            ],
            [
                'color.required' => 'Please enter color name!',
                'color.max' => 'Color name is too long!',
                'color.regex' => 'Color name must be in HEX format!',
                'color_author.required' => 'Please enter author name!',
                'color_author.max' => 'Author name is too long!',
                'color_author.min' => 'Author name is too short!',
                'color_author.alpha' => 'Author name must contain only letters!',
                'color_rate.required' => 'Please enter rate!',
                'color_rate.integer' => 'Rate must be a number!',
                'color_rate.between' => 'Rate must be between 1 and 10!',
            ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        
        
        
        
        
        $color = new Color;
        $color->color = $request->color;
        $color->author = $request->color_author ?? 'Anonymous';
        $color->rate = $request->color_rate;
        $color->save();
        return redirect()
        ->route('colors-index')
        ->with('success', 'New color has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('colors.edit', [
            'color' => $color
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'color' => 'required|max:7|regex:/^#[0-9A-F]{6}$/i',
                'color_author' => 'required|max:50|min:3|alpha',
                'color_rate' => 'required|integer|between:1,10',
            ],
            [
                'color.required' => 'Please enter color name!',
                'color.max' => 'Color name is too long!',
                'color.regex' => 'Color name must be in HEX format!',
                'color_author.required' => 'Please enter author name!',
                'color_author.max' => 'Author name is too long!',
                'color_author.min' => 'Author name is too short!',
                'color_author.alpha' => 'Author name must contain only letters!',
                'color_rate.required' => 'Please enter rate!',
                'color_rate.integer' => 'Rate must be a number!',
                'color_rate.between' => 'Rate must be between 1 and 10!',
            ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        
        
        $color->color = $request->color;
        $color->author = $request->color_author ?? 'Anonymous';
        $color->rate = $request->color_rate;
        $color->save();
        return redirect()
        ->route('colors-index')
        ->with('success', 'Color has been updated!');

    }

    public function delete(Color $color)
    {
        return view('colors.delete', [
            'color' => $color
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()
        ->route('colors-index')
        ->with('success', 'Color has been deleted!');
    }
}
