<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temple;
use App\Pictures;
use DB;
use File;


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
        $temple = DB::table('temple')->select('*')->join('staff','staff.Staff_id','=','temple.Staff_id')->join('picture','picture.Temp_id','=','temple.Temp_id')->where('staff.Username','like', $_SESSION['Username'])->get();
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
  
        session_start();
        $temple = DB::table('temple')->select('*')->join('staff','staff.Staff_id','=','temple.Staff_id')->join('picture','picture.Temp_id','=','temple.Temp_id')->where('staff.Username','like', $_SESSION['Username'])->get();
        //dd($temple);
        return view('addpicture',['templeuser'=>$temple]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        
        if($request->hasFile('files')){
            $files = $request->file('files');
            foreach ($files as $file) {

                $pic =  new Pictures();
                $pic->Temp_id = $request->id;
            
                $filename = "Pictuers_".str_random(10). '.'.$file->getClientOriginalExtension();
                $file->move(public_path() .'/images/pictemple', $filename);

                $pic->Pic_name=$filename;
                $pic->save();

            }
        }
        echo "<script type='text/javascript'>alert('เพิ่มรูปภาพเรียบร้อย');</script>";
        return redirect()->action('AdindexController@index');

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

        echo "<script type='text/javascript'>alert('แก้ไขเรียบร้อย');</script>";
        return redirect()->action('AdindexController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pic = Pictures::find($id);

        if($pic->Pic_name != 'nopic.jpg'){
            File::delete(public_path() . '\\images\\' .$pic->Pic_name);
        }
        $pic->delete();



    }

    public function login(Request $req)
    {

        $username = $req->input('username');
        $password = $req->input('password');

        $checkLogin = DB::table('staff')->where(['Username'=>$username,'Password'=>$password])->get();

        
        if(count($checkLogin) >0)
        {

            if($checkLogin[0]->Type==1){
                if($checkLogin[0]->Status==1){
                    session_start();
                    $_SESSION['Username'] = $username;
            
            
                    return redirect()->action('AdindexController@index');
                    }
                else{

                    return redirect()->action('SiteController@index');

                }
            }
            else{

                session_start();
                $_SESSION['Username'] = $username;
            
            
           return redirect()->action('AddtempleController@index');
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');</script>";
            // return redirect()->action('SiteController@index');
        }
    }
}
