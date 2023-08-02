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
        
        // FAKE Validation
        $valid = false;
        if ($request->age < 30 && $request->social == 'tt') {
            $valid = true;
        }
        else if ($request->age < 60 && $request->social == 'ig') {
            $valid = true;
        }
        else if ($request->age >= 60 && $request->social == 'fb') {
            $valid = true;
        }

        if (!$valid) {
            return response()->json(
                [
                    'message' => 'Invalid social network',
                ],
                422
            );
        }

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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $social->update($request->all());
        return response()->json(
            [
                'message' => 'Social updated',
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        $social->delete();
        return response()->json(
            [
                'message' => 'Social deleted',
            ],
            200
        );
    }
}
