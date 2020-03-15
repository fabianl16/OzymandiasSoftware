<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tank;
use App\Parameter;
use Carbon\Carbon;

class TankController extends Controller
{
    public function show()
    {


    }

    public function store(Request $request)
    {
        if($request->isJson()){
            $monitoring = new Parameter;
            $monitoring->temperature = $request->temperature;
            $monitoring->salinity = $request->salinity;
            $monitoring->PH = $request->ph;
            $monitoring->Code_tank= $request->code_tank;
            $monitoring->save();
            return response()->json(['OK'], 200);
    
            }
            return response()->json(['No autorizado'], 401);

    }

    public function index()
    {

    }
    public function welcome()
    {
        $testMonitor= Tank::latest()->take(1)->get();
        
    	return view('welcome', compact('testMonitor'));
    }
}
