<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Waterpump;

class WaterpumpController extends Controller
{
    public function index(Request $request)
    {        
        // Fetch all records 
        $model = $request->input('model');      
        $data['water'] = Waterpump::all()->where('model', $model);        
        // Fetch edit record
        return view('waterpump-log', $data);        
    }   
}
