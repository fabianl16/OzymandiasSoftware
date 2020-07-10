<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tank;
class CalculationController extends Controller
{
    //
    public function welcome()
    {
        $tanks = Tank::all();
       // dd($tanks->getLastParameter());
           	return view('monitoring.calculations', compact('tanks'));
    }
}
