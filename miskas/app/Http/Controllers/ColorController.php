<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $sortBy = $request->sort_by ?? '';
        $orderBy = $request->order_by ?? '';
        if ($orderBy && !in_array($orderBy, ['asc', 'desc'])) {
            $orderBy = '';
        }
        $filterBy = $request->filter_by ?? '';
        $filterValue = $request->filter_value ?? '0';
        $perPage = (int) $request->per_page ?? 20;
        
        if ($request->s) {

            $colors = Color::where('color', 'like', '%'.$request->s.'%')->paginate(20)->withQueryString();
            // dump(Color::where('color', 'like', '%'.$request->s.'%')->get());
        
        } else {
        
            $colors = Color::select('colors.*');

            //filtravimas
            $colors = match($filterBy) {
                'rate' => $colors->where('rate', '=', $filterValue),
                default => $colors
            };

            //rikiavimas
            $colors = match($sortBy) {
                'color' => $colors->orderBy('color', $orderBy),
                'rate' => $colors->orderBy('rate', $orderBy),
                default => $colors
            };


            $colors = $colors->paginate($perPage)->withQueryString();

        }
        
        return view('colors.index', [
            'colors' => $colors,
            'sortBy' => $sortBy,
            'orderBy' => $orderBy,
            'filterBy' => $filterBy,
            'filterValue' => $filterValue,
            'perPage' => $perPage,
            's' => $request->s ?? ''
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();

        return view('colors.create', [
            'authors' => $authors
        ]);
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

                'author_id' => 'required|integer',

                'color_rate' => 'required|integer|between:1,10',
            ],
            [
                'color.required' => 'Please enter color name!',
                'color.max' => 'Color name is too long!',
                'color.regex' => 'Color name must be in HEX format!',

                'author_id.required' => 'Please select author!',
                'author_id.integer' => 'Rate must be a number!',

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
        $color->author_id = $request->author_id;
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
        $authors = Author::all();
        
        return view('colors.edit', [
            'color' => $color,
            'authors' => $authors
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
                'author_id' => 'required|integer',
                'color_rate' => 'required|integer|between:1,10',
            ],
            [
                'color.required' => 'Please enter color name!',
                'color.max' => 'Color name is too long!',
                'color.regex' => 'Color name must be in HEX format!',
                
                'author_id.required' => 'Please select author!',
                'author_id.integer' => 'Rate must be a number!',

                'color_rate.required' => 'Please enter rate!',
                'color_rate.integer' => 'Rate must be a number!',
                'color_rate.between' => 'Rate must be between 1 and 10!',
            ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        
        
        $color->color = $request->color;
        $color->author_id = $request->author_id;
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
