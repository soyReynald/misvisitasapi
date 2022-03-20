<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Assistance;
use Illuminate\Http\Request;

class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assistances = Assistance::all();
        return $assistances;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $assistance = new assistance();
        $assistance->visit_id = $request->visit_id;
        $assistance->secretary_id = $request->secretary_id;
        $assistance->day_id = $request->day_id;
        $assistance->save();

        return $assistance;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($assistance_id)
    {
        //
        $assistance = Assistance::find($assistance_id);
        return $assistance;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $assistance_id)
    {
        //
        $assistance = Assistance::findOrFail($request->assistance_id);
        $assistance->visit_id = $request->visit_id;
        $assistance->secretary_id = $request->secretary_id;
        $assistance->day_id = $request->day_id;
        $assistance->save();

        return $assistance;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($assistance_id)
    {
        //
        $assistance = Assistance::destroy($assistance_id);
        return $assistance;
    }
}
