<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Tag;
use App\Models\AuthorTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $authors = Author::all();
        $tags = Tag::all();
        
        return view('authors.index', [
            'authors' => $authors,
            'tags' => $tags
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


    public function addTag(Request $request, Author $author)
    {
        
        $authorId = $author->id;
        $tagId = $request->tag_id ?? null;
        
        
        $validator = Validator::make(
            $request->all(),
            [
            'tag_id' => [
                'required',
                Rule::unique('author_tags')->where(function ($query) use($authorId, $tagId) {
                    return $query->where('author_id', $authorId)
                    ->where('tag_id', $tagId);
                }),
            ],
        ],
        [
            'tag_id.required' => 'Please select tag!',
            'tag_id.unique' => 'Tag already exists!',
        ]
        );
        
        
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        
        
        $authorTag = new AuthorTag;
        $authorTag->author_id = $authorId;
        $authorTag->tag_id = $tagId;
        $authorTag->save();
        return redirect()->back()->with('success', 'Tag has been added!');
    }

    public function removeTag(Author $author, Tag $tag)
    {
        
        $authorTag = AuthorTag::where('author_id', $author->id)
        ->where('tag_id', $tag->id)
        ->first();
        if (!$authorTag) {
            return redirect()->back()->with('info', 'Tag does not exist!');
        }
        $authorTag->delete();
        return redirect()->back()->with('success', 'Tag has been removed!');
    }

    public function createTag(Request $request, Author $author)
    {
        
        $authorId = $author->id;
        $tagName = $request->tag_name ?? null;
        
        
        $validator = Validator::make(
            $request->all(),
            [
            'tag_name' => [
                'required',
                'max:50',
                'min:3',
                'alpha',
            ],
        ],
        [
            'tag_name.required' => 'Please enter tag name!',
            'tag_name.max' => 'Tag name is too long!',
            'tag_name.min' => 'Tag name is too short!',
            'tag_name.alpha' => 'Tag name must contain only letters!',
        ]
        );
        
        
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }

        $tag = Tag::firstOrCreate([
            'name' => $tagName
        ]);
        
        
        $authorTag = new AuthorTag;
        $authorTag->author_id = $authorId;
        $authorTag->tag_id = $tag->id;
        $authorTag->save();
        return redirect()->back()->with('success', 'Tag has been added!');
    }

}
