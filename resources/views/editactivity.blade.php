<?php

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

// $name = $row['user_name'];
?>

@extends('layouts.admintemp')
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    .othertop{margin-top:10px;}
    
    .table-inverse{
        background: #BEBEBE;
        color: black;

    }
</style>
@endsection

@section('content')
     <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">แก้ไขปฏิทินกิจกรรม</h1>
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                    @endif
                    
                     {!!   Form::model($events[0], array('url' => 'adcalen/'.$events[0]->Event_no, 'method' => 'put','class'=>'pure-form')); !!}
                          {!! Form::label('actname','ชื่อกิจกรรม :'); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::text('Act_name',null,array('class' => 'pure-input-1-2','readonly'=>'true')); !!}<br><br>
                           

                          {!! Form::label('datetimestart','วันเวลาเริ่มกิจกรรม :'); !!}
                          &nbsp;&nbsp;&nbsp;
                          {!! Form::text('Event_start',null,array('class' => 'pure-input-1-2'));!!}<br><br>

                          {!! Form::label('datetimeend','วันเวลาสิ้นสุดกิจกรรม :'); !!}

                          {!! Form::text('Event_end',null,array('class' => 'pure-input-1-2')); !!}<br><br>


                          {!! Form::label('color','สี :') !!}
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::text('Color',null,array('class' => 'pure-input-1-2' ,'readonly'=>'true'));!!}<br><br>
                         


                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::submit('บันทึก',array('class' => 'btn btn-default')); !!}


                          {!! Form::close(); !!}
                    
                </div>
                  
         
            </div>
        </div>
        
  
              
                         
@endsection

@section('footer')

@endsection






