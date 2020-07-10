<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tank;
use App\Parameter;
use App\Ammonia;
use Carbon\Carbon;
use DB;
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
        //$testMonitor= Tank::latest()->take(1)->get();

        //$testMonitor= DB::table('parameters')
        //->join('tanks', 'parameters.code_Tank','tanks.Tank_code')
        //->select('code_Tank', 'salinity', 'PH', 'temperature', DB::raw('MAX(parameters.created_at) as created_at'))
        //->groupBy('code_Tank')->get();

        $testMonitor= DB::table('parameters')->whereIn('id', function($query){
            $query->select(DB::raw('MAX(id)'))
                      ->from('parameters')
                      ->groupBy('code_Tank');
        })->orderby('code_Tank', 'asc')
        ->select('code_Tank', 'salinity', 'PH', 'temperature', 
            DB::raw('parameters.created_at AS created_at'))
        ->get();
        
    	return view('welcome', compact('testMonitor'));
    }


    public function jsonLastRegistry($id){

        $tanke = Tank::where('Tank_code',$id)->first();
        //if tank
        $parameter = $tanke->getLastParameter();

        return response()->json([
            'ph' => $parameter->PH,
            'salinity' => $parameter->salinity,
            'temperature' => $parameter->temperature,
            'date_time'=> $parameter->created_at,
            'id'=> $parameter->id,
        ]);
    }

    public function sendCalculate(Request $request){
        $calculate = new Ammonia;
        $calculate->ammonia = $request->ammonia;
        $calculate->TAN = $request->TAN;
        $calculate->parameter_id = $request->parameter_id;
        $calculate->save();

    }

}
