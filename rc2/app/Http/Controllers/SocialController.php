<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Social',
        [
            'storeUrl' => route('social-store'),
            'listUrl' => route('social-list'),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        sleep(2);
        $social = Social::create($request->all());
        return response()->json(
            [
                'message' => 'Social created',
                'id' => $social->id,
            ],
            201
        );
    }


    public function list()
    {
        $socials = Social::all();
        return response()->json(
            [
                'message' => 'Persons listed',
                'socials' => $socials,
            ],
            200
        );
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(lRequest $request, Social $social)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        //
    }
}
