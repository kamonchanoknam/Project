<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Staff;

class AdmintempleprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        session_start();


        $profile = DB::table('staff')->select('*')->where('Username','like', $_SESSION['Username'])->get();
       
        // dd($profile);
        return view('admintempleprofile',['user'=>$profile]);
        
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
    public function store(Request $request)
    {
        //
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
        session_start();
        $staff = Staff::where('Staff_id' , '=', $id)->get();
        

        // dd($staff);
        return view('profileadmintemp',['user1' => $staff]);
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
        $staff = Staff::findOrFail($id);

        $staff->Staff_id = $request->Staff_id;
        $staff->Name = $request->Name;
        $staff->Surname = $request->Surname;
        $staff->Username = $request->Username;
        $staff->Password = $request->Password;
        $staff->Address = $request->Address;
        $staff->Phone = $request->Phone;
        $staff->Email = $request->Email;
        $staff->Status = $request->Status;
        $staff->Type = $request->Type;

        
        $staff->save();
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
