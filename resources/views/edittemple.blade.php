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
                    <h1 class="page-header">แก้ไขข้อมูลวัด</h1>
                     {!!   Form::model($temple[0], array('url' => 'adindexshow/'.$temple[0]->Temp_id, 'method' => 'put','class'=>'pure-form')); !!}
                          {!! Form::label('tempname','ชื่อวัด :'); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::text('Temp_name',null,array('class' => 'pure-input-1-2')); !!}<br><br>
                           

                          {!! Form::label('tempaddress','ที่อยู่วัด :'); !!}
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::text('Temp_address',null,array('class' => 'pure-input-1-2'));!!}<br><br>

                          {!! Form::label('tempfeature','ลักษณะเด่นวัด'); !!}

                          {!! Form::textarea('Temp_features',null,array('class' => 'pure-input-1-2')); !!}<br><br>


                          {!! Form::label('temphistory','ประวัติวัด') !!}
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::textarea('Temp_history',null,array('class' => 'pure-input-1-2'));!!}<br><br>

                          {!! Form::label('templat','ละติจูด') !!}
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::text('Temp_latitude',null,array('class' => 'pure-input-1-2'));!!}<br><br>

                          {!! Form::label('templong','ลองจิจูด') !!}
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::text('Temp_longitude',null,array('class' => 'pure-input-1-2')); !!}<br><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {!! Form::submit('บันทึก',array('class' => 'btn btn-default')); !!}


                          {!! Form::close(); !!}
                    
                </div>
                  
         
            </div>
        </div>
        
  
              
                         
@endsection

@section('footer')

@endsection






