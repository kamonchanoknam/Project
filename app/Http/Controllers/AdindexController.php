<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temple;
use DB;

class AdindexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        session_start();
        $temple = DB::table('temple')->select('*')->join('staff','staff.Staff_id','=','temple.Staff_id')->where('staff.Username','like', $_SESSION['Username'])->get();
        // dd($temple);
        
        return view('adminindex',['templeuser'=>$temple]);
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
        $temple = Temple::where('Temp_id' , '=',$id)->get();
        /*dd($temple);*/
        return view('edittemple',['temple' => $temple]);
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


        $temple = Temple::findOrFail($id);
    
        $temple->Temp_name = $request->Temp_name;
        $temple->Temp_address = $request->Temp_address;
        $temple->Temp_features = $request->Temp_features;
        $temple->Temp_history = $request->Temp_history;
        $temple->Temp_latitude = $request->Temp_latitude;
        $temple->Temp_longitude = $request->Temp_longitude;

        $temple->save();
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

    public function login(Request $req)
    {

        $username = $req->input('username');
        $password = $req->input('password');

        $checkLogin = DB::table('staff')->where(['Username'=>$username,'Password'=>$password])->get();

        // dd($checkLogin);
        if(count($checkLogin) >0)
        {
            if($checkLogin[0]->Type==1){
            session_start();
            $_SESSION['Username'] = $username;
            
            
           return redirect()->action('AdindexController@index');
            }
            else{
                session_start();
            $_SESSION['Username'] = $username;
            
            
           return redirect()->action('AddtempleController@index');
            }
        }
        else
        {
            echo "Login Failed";
        }
    }
}
