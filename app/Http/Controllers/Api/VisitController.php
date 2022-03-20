<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visits = Visit::all();
        return $visits;
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
        $visit = new Visit();
        $visit->first_name = $request->first_name;
        $visit->last_name = $request->last_name;
        $visit->address = $request->address;
        $visit->phone = $request->phone;
        $visit->email = $request->email;
        $visit->brother_id = $request->brother_id;
        $visit->save();

        return $visit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $visit = Visit::find($id);
        return $visit;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $visit_id)
    {
        //
        $visit = Visit::findOrFail($request->visit_id);
        $visit->first_name = $request->first_name;
        $visit->last_name = $request->last_name;
        $visit->address = $request->address;
        $visit->phone = $request->phone;
        $visit->email = $request->email;
        $visit->brother_id = $request->brother_id;
        $visit->save();

        return $visit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($visit_id)
    {
        //
        $visit = Visit::destroy($visit_id);
        return $visit;
    }
}
