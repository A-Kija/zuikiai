<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $authors = Author::all();
        
        return view('authors.index', [
            'authors' => $authors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:50|min:3|alpha',
            ],
            [
                'name.required' => 'Please enter author name!',
                'name.max' => 'Author name is too long!',
                'name.min' => 'Author name is too short!',
                'name.alpha' => 'Author name must contain only letters!',
            ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }

        $author = new Author;
        $author->name = $request->name;
        $author->save();
        return redirect()
        ->route('authors-index')
        ->with('success', 'New author has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', [
            'author' => $author
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:50|min:3|alpha',
            ],
            [
                'name.required' => 'Please enter author name!',
                'name.max' => 'Author name is too long!',
                'name.min' => 'Author name is too short!',
                'name.alpha' => 'Author name must contain only letters!',
            ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        
        
        $author->name = $request->name;
        $author->save();
        return redirect()
        ->route('authors-index')
        ->with('success', 'Author has been updated!');

    }

    public function delete(Author $author)
    {
        if ($author->colors()->count()) {
            return redirect()->back()->with('info', 'Can not delete author, because it has colors!');
        }
        
        return view('authors.delete', [
            'author' => $author
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()
        ->route('authors-index')
        ->with('success', 'Author has been deleted!');
    }
}
