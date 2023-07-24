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
     * Display tags list.
     */
    public function list()
    {
        $tags = Tag::orderBy('id', 'desc')->get();
        $html = view('tags.list')->with(['tags' => $tags])->render();
        return response()->json([
            'html' => $html,
            'status' => 'success'
        ]);
    }

    /**
     * Display tags list count.
     */
    public function count()
    {
        $count = Tag::count();
        $html = view('tags.count')->with(['count' => $count])->render();
        return response()->json([
            'html' => $html,
            'status' => 'success'
        ]);
    }

    /**
     * Show the form for creating a new resource.
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
            return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()->toArray()
            ]);
        }

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();
        return response()->json([
            'status' => 'success'
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        $html = view('tags.edit')->with(['tag' => $tag])->render();
        return response()->json([
            'html' => $html,
            'status' => 'success'
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
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->toArray()
            ]);
        }
        
        $tag->name = $request->name;
        $tag->save();
        return response()->json([
            'status' => 'success'
        ]);

    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Tag $tag)
    {
        $html = view('tags.delete')->with(['tag' => $tag])->render();
        return response()->json([
            'html' => $html,
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
