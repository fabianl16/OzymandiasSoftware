<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tank;

class TankController extends Controller
{
    public function show()
    {


    }

    public function store(Request $request)
    {
        if($request->isJson()){
            $monitoring = new Tank;
            $monitoring->temperature = $request->temperature;
            $monitoring->ph = $request->ph;
            $monitoring->salinity = $request->salinity;
            $monitoring->save();
            return response()->json(['OK'], 200);
    
            }
            return response()->json(['No autorizado'], 401);

    }

    public function index()
    {

    }
}
