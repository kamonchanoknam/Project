<?php

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

// $name = $row['user_name'];
?>

@extends('layouts.admintemp')

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
                     {!!   Form::model($temple[0], array('url' => 'adindexshow/'.$temple[0]->Temp_id, 'method' => 'put')); !!}
                          {!! Form::label('tempname','ชื่อวัด'); !!}
                          {!! Form::text('Temp_name',null); !!}<br>

                          {!! Form::label('tempaddress','ที่อยู่วัด'); !!}
                          {!! Form::text('Temp_address',null);!!}<br>

                          {!! Form::label('tempfeature','ลักษณะเด่นวัด'); !!}
                          {!! Form::text('Temp_features',null); !!}<br>


                          {!! Form::label('temphistory','ประวัติวัด') !!}
                          {!! Form::text('Temp_history',null);!!}<br>

                          {!! Form::label('templat','ละติจู') !!}
                          {!! Form::text('Temp_latitude',null);!!}<br>

                          {!! Form::label('templong','ลองจิจูด') !!}
                          {!! Form::text('Temp_longitude',null); !!}<br>

                          {!! Form::submit('บันทึก'); !!}


                          {!! Form::close(); !!}
                    
                </div>
                  
         
            </div>
        </div>
        </div>
  
              
                


           
@endsection

@section('footer')

@endsection






