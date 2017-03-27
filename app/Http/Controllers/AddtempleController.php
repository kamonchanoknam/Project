<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temple;
use App\Staff;
use DB;


class AddtempleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temple = Temple::all();
         $staff = Staff::all();
        return view('addtemple',['addtemple'=>$temple,'staff'=>$staff]);

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $temple = new Temple();
        $temple->Temp_name = $request->tempname;
        $temple->Temp_address = $request->address;
        $temple->Temp_features  = $request->features;
        $temple->Temp_history  = $request->history;
        $temple->Temp_latitude  = $request->latitude;
        $temple->Temp_longitude  = $request->longitude;
        $temple->Staff_id  = $request->id;
        
        $temple->save();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}