<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use DB;
use Session;
class AdminprofileController extends Controller
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
        /*dd($profile);*/
        return view('adminprofile',['user'=>$profile]);
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
        /*dd($temple);*/
        return view('adminprofile',['user' => $staff]);
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
        $admin = Staff::findOrFail($id);
    
        $admin->Staff_id = $request->Staff_id;
        $admin->Name = $request->Name;
        $admin->Surname = $request->Surname;
        $admin->Username = $request->Username;
        $admin->Password = $request->Password;
        $admin->Address = $request->Address;
        $admin->Phone = $request->Phone;
        $admin->Email = $request->Email;
        $admin->Status = $request->Status;
        $admin->Type = $request->Type;

        $admin->save();

        Session::flash('flash_message', 'ข้อมูลถูกแก้ไขเแล้ว!');
        return redirect()->back();
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
