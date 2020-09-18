<?php

namespace App\Http\Controllers;

use App\Logbook;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['waterpump'] = Logbook::all()->where('category', 'High-pressure water pump Units')->sortByDesc('created_at');
        return view('waterpump-log', $data);
    }
    
    public function index1()
    {
        $data['pressurelines'] = Logbook::all()->where('category', 'High-pressure Lines')->sortByDesc('created_at');
        return view('lines-log', $data);
    }

    public function index2()
    {
        $data['gun'] = Logbook::all()->where('category', 'Hand lance Gun')->sortByDesc('created_at');
        return view('gun-log', $data);
    }


    public function index3()
    {
        $data['nozzles'] = Logbook::all()->where('category', 'Rotary Nozzles')->sortByDesc('created_at');
        return view('nozzles-log', $data);
    }


    public function index4()
    {
        $data['maintenance'] = Logbook::all()->whereNotNull('maintenance_carried');
        return view('track-maintenance', $data);
    }

    public function index5()
    {
        $data['inspection'] = Logbook::all()->whereNotNull('inspection_comments');
        return view('track-inspection', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storewater(Request $request)
    {
        $this->validate($request, [
            'category'=>'required',
            'model'=>'required'  
        ]);

        $waterpump = new Logbook([
            'date_recorded' => $request->get('date_recorded'),
            'manufacturer' => $request->get('manufacturer'),
            'category' => $request->get('category'),
            'model' => $request->get('model'),
            'working_pressure' => $request->get('working_pressure'),
            'working_flow' => $request->get('working_flow'),
            'inspection_date' => $request->get('inspection_date'),
            'inspection_comments' => $request->get('inspection_comments'),
            'inspection_by' => $request->get('inspection_by'),
            'maintenance_carried' => $request->get('maintenance_carried'),
            'maintenance_completed_date' => $request->get('maintenance_completed_date'),
            'current_location' => $request->get('current_location'),
            
        ]);

        $waterpump->save();
        return redirect('/high-pressure-water-pump')->with('success', 'Your  High-pressure water pump units details was Successfully Added in the Log Book');

    }

    public function storelines(Request $request)
    {
        $this->validate($request, [
            'category'=>'required',
            'model'=>'required'  
        ]);

        $pressurelines = new Logbook([
            'date_recorded' => $request->get('date_recorded'),
            'manufacturer' => $request->get('manufacturer'),
            'category' => $request->get('category'),
            'model' => $request->get('model'),
            'working_pressure' => $request->get('working_pressure'),            
            'pressure_testing_date' => $request->get('pressure_testing_date'),
            'first_issue_date' => $request->get('first_issue_date'),
            'inspection_date' => $request->get('inspection_date'),
            'inspection_comments' => $request->get('inspection_comments'),
            'assested_visual' => $request->get('assested_visual'),
            'inspection_by' => $request->get('inspection_by'),
            'current_location' => $request->get('current_location'),            
            'location_date' => $request->get('location_date')
            
        ]);

        $pressurelines->save();
        return redirect('/high-pressure-lines')->with('success', 'Your  High-pressure Lines details was Successfully Added in the Log Book');

    }
    public function storegun(Request $request)
    {
        $this->validate($request, [
            'category'=>'required',
            'model'=>'required'  
        ]);

        $gun = new Logbook([
            'date_recorded' => $request->get('date_recorded'),
            'manufacturer' => $request->get('manufacturer'),
            'category' => $request->get('category'),
            'model' => $request->get('model'),
            'working_pressure' => $request->get('working_pressure'),            
            'pressure_testing_date' => $request->get('pressure_testing_date'),
            'unit_type' => $request->get('unit_type'),
            'inspection_date' => $request->get('inspection_date'),
            'inspection_comments' => $request->get('inspection_comments'),
            'assested_visual' => $request->get('assested_visual'),
            'inspection_by' => $request->get('inspection_by'),
            'maintenance_carried' => $request->get('maintenance_carried'),
            'maintenance_completed_date' => $request->get('maintenance_completed_date'),
            'current_location' => $request->get('current_location'),
            
        ]);

        $gun->save();
        return redirect('/hand-lance-gun')->with('success', 'Your  Hand lance Guns details was Successfully Added in the Log Book');

    }

    public function storenozzles(Request $request)
    {
        $this->validate($request, [
            'category'=>'required',
            'model'=>'required'  
        ]);

        $nozzles = new Logbook([
            'date_recorded' => $request->get('date_recorded'),
            'manufacturer' => $request->get('manufacturer'),
            'category' => $request->get('category'),
            'model' => $request->get('model'),
            'max_pressure' => $request->get('max_pressure'),
            'working_pressure' => $request->get('working_pressure'),
            'working_flow' => $request->get('working_flow'),            
            'inspection_date' => $request->get('inspection_date'),
            'inspection_comments' => $request->get('inspection_comments'),
            'assested_visual' => $request->get('assested_visual'),
            'inspection_by' => $request->get('inspection_by'),
            'maintenance_carried' => $request->get('maintenance_carried'),
            'maintenance_completed_date' => $request->get('maintenance_completed_date'),
            'current_location' => $request->get('current_location'),
            
        ]);

        $nozzles->save();
        return redirect('/rotatary-nozzles')->with('success', 'Your  Rotatary Nozzles details was Successfully Added in the Log Book');

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $logbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Logbook $logbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logbook $logbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logbook $logbook)
    {
        //
    }
}
