<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temple;
use App\Staff;
use App\Pictures;
use DB;
use File;


class AddtempleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $temple = Temple::all();
        $staff = DB::table('staff')->select('*')->Where('Type','=','1')->get();
        // dd($staff);
        return view('addtemple',['staff'=>$staff]);

      
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
        // dd($request);
        $temple = new Temple();
        $temple->Temp_name = $request->tempname;
        $temple->Temp_address = $request->address;
        $temple->Temp_features  = $request->features;
        $temple->Temp_history  = $request->history;
        $temple->Temp_latitude  = $request->latitude;
        $temple->Temp_longitude  = $request->longitude;
        $temple->Staff_id  = $request->id;


        
        $temple->save();

        

        if($request->hasFile('files')){

            $files = $request->file('files');
            // dd($files);
            $pictemp = Temple::orderBy('Temp_id','desc')->first();
            foreach ($files as $file) {

                $pic =  new Pictures();
                $pic->Temp_id = $pictemp->Temp_id;
            
                $filename = "Pictuers_".str_random(10). '.'.$file->getClientOriginalExtension();
                $file->move(public_path() .'/images/pictemple', $filename);

                $pic->Pic_name=$filename;
                $pic->save();

            }
        }
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
