<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brother;

class BrotherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brothers = Brother::all();
        return $brothers;
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
        $brother = new Brother();
        $brother->first_name = $request->first_name;
        $brother->last_name = $request->last_name;
        $brother->phone = $request->phone;
        $brother->email = $request->email;
        $brother->password = $request->password;
        $brother->save();

        return $brother;

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
        $brother = Brother::find($id);
        return $brother;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $brother_id)
    {
        //
        $brother = Brother::findOrFail($request->brother_id);
        $brother->first_name = $request->first_name;
        $brother->last_name = $request->last_name;
        $brother->phone = $request->phone;
        $brother->email = $request->email;
        $brother->password = $request->password;
        $brother->save();

        return $brother;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($brother_id)
    {
        //
        $brother = Brother::destroy($brother_id);
        return $brother;
    }
}
