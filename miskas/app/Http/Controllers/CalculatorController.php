<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculator()
    {
        $result = session()->get('result', null);
        // $result = session()->pull('result', null);
        // session()->forget('result');
        
        return view('calculator', [
            'result' => $result
        ]);
    }

    public function doCalculator(Request $request)
    {
        $result = $request->x + $request->y;

        // session()->flash('result', $result);
        // session()->put('result', $result);
        $request->flash();

        return redirect()->route('calculator')->with('result', $result);
    }
}
