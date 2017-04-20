<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Activity;
use App\Temple;
use Session;

use DB;
class AdcalenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();

        $temple = DB::table('staff')->where('staff.Username','like', $_SESSION['Username'])->get();
        //dd($temple[0]->Staff_id);
        

         // $events = Events::all();
         $events1 = DB::table('events')
         ->select('*')
         ->join('temple','temple.Temp_id','=','events.Temp_id')
         ->join('activity','activity.Act_id','=','events.Act_id')
         ->where('temple.Staff_id','like',$temple[0]->Staff_id)
         ->get();


         

         $temple1 = DB::table('temple')->select('*')->where('temple.Staff_id','like',$temple[0]->Staff_id)->get();
         $act1 = DB::table('activity')->select('*')->get();

         return view('admincalen',['events'=>$events1,'temple'=>$temple1,'activity'=>$act1]);
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
        // $events = new Events();
        // $events->Act_id = $request->Act_id;
        // $events->Temp_id = $request->Temp_id;
        // $events->Event_start = $request->Event_start;
        // $events->Event_end = $request->Event_end;
        // $events->Color = $request->Color;

        // // dd($events);
        // $events->save();


       
        // return redirect('admincalen');
    }

    public function addevent(Request $request)
    {


        $events = new Events();
        $events->Act_id = $request->Act_id;
        $events->Temp_id = $request->Temp_id;
        $events->Event_start = $request->Event_start;
        $events->Event_end = $request->Event_end;
        $events->Color = $request->Color;

        // dd($events);
        $events->save();
         Session::flash('flash_message', 'ข้อมูลถูกเพิ่มแล้ว!');
        return redirect()->back();

    }

    public function addact(Request $request)
    {
        $activity = new Activity();
        $activity->Act_name = $request->actname;
        $activity->Act_detail = $request->detail;

        $activity->save();
         Session::flash('flash_message', 'ข้อมูลถูกเพิ่มแล้ว!');
        return redirect()->back();
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
        
        $events = DB::table('events')->select('*')->join('temple','temple.Temp_id','=','events.Temp_id')->join('activity','activity.Act_id','=','events.Act_id')->where('Event_no' , '=', $id)->get();
        /*dd($temple);*/
        return view('editactivity',['events' => $events]);
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
        $events = Events::findOrFail($id);
        $events->Event_start = $request->Event_start;
        $events->Event_end = $request->Event_end;
        $events->Color = $request->Color;
        
        $events->save();

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
        $events = Events::find($id);
        $events->delete();

        Session::flash('flash_message', 'ข้อมูลกิจกรรมถูกลบแล้ว!');
        return redirect()->back();
    }
}
