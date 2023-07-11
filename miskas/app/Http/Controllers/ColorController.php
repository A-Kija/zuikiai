<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;


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
