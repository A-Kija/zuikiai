<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $tags = Tag::all();
        
        return view('tags.index', [
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create');
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
                'name.required' => 'Please enter tag name!',
                'name.max' => 'Tag name is too long!',
                'name.min' => 'Tag name is too short!',
                'name.alpha' => 'Tag name must contain only letters!',
            ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();
        return redirect()
        ->route('tags-index')
        ->with('success', 'New tag has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit', [
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:50|min:3|alpha',
            ],
            [
                'name.required' => 'Please enter tag name!',
                'name.max' => 'Tag name is too long!',
                'name.min' => 'Tag name is too short!',
                'name.alpha' => 'Tag name must contain only letters!',
            ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        
        
        $tag->name = $request->name;
        $tag->save();
        return redirect()
        ->route('tags-index')
        ->with('success', 'Tag has been updated!');

    }

    public function delete(Tag $tag)
    {
        return view('tags.delete', [
            'tag' => $tag
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()
        ->route('tags-index')
        ->with('success', 'Tag has been deleted!');
    }
}
