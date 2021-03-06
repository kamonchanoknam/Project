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
                    <h1 class="page-header">ข้อมูลวัด</h1>
                    
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                    <table class="table table-inverse">
                      
                      <tbody>
                        <tr>
                          <th>ชื่อวัด</th>
                          <td>{{ $templeuser[0]->Temp_name}}</td>
                        </tr>
                        <tr>
                          <th>ที่อยู่วัด</th>
                          <td>{{ $templeuser[0]->Temp_address}}</td>
                        </tr>
                        <tr>
                          <th>ลักษณเด่น</th>
                          <td>{{ $templeuser[0]->Temp_features}}</td>
                        </tr>
                        <tr>
                          <th>ประวัติ</th>
                          <td>{{ $templeuser[0]->Temp_history}}</td>
                        </tr>
                        <tr>
                          <th>ละติจูด</th>
                          <td>{{ $templeuser[0]->Temp_latitude}}</td>
                        </tr>
                        <tr>
                          <th>ลองติจูด</th>
                          <td>{{ $templeuser[0]->Temp_longitude}}</td>
                        </tr>
                        <tr>
                          <td>
                            <a href="{{ url('/adindexshow/'.$templeuser[0]->Temp_id.'/edit')}}">
                            <button type="button" class="btn btn-default">
                              <span class="fa fa-edit "></span> แก้ไขข้อมูล
                            </button></a>

                            {{-- <a href="#"><span class=" glyphicon glyphicon-edit"></span></a> --}}
                          
                          </td> 
                          <td>
                          <a href="{{ url('/adindexshow/create/')}}">
                            <button type="button" class="btn btn-default">
                              <span class="fa fa-cloud-upload "></span> เพิ่มรูปภาพ
                            </button></a>
                            
                            {{-- <a href="#"><span class=" glyphicon glyphicon-edit"></span></a> --}}
                          
                          </td> 
                        </tr>
                      </tbody>
                    </table>
                </div>

               
                <!--End Page Header -->
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">รูปภาพวัด</h1>
                    
                    <div class="container">
                  {{--   @foreach($picture as $pic) --}}
                      <table class="table table-inverse">
                        
                        
                        <tbody>
                        
                          <tr style="font-weight: bolder;">
                            <td >รหัสรูปภาพ</td>
                            <td>แก้ไขรายละเอียด</td>
                          
                          </tr> 

                          @if($getpic != NULL)
                          @foreach($templeuser as $pic) 
                          
                            <tr>
                              <td><img src="{{ 'images/pictemple/'.$pic->Pic_name }}" style="width: 200px;height: 150px;"></td>
                              <td>

                            
                             {!! Form::open(['url'=>'adindexshow/'.$pic->Pic_id,'method'=>'DELETE','class'=>'form-horizontal',
                                  'role'=>'form','onsubmit' => 'return confirm("คุณต้องการลบรูปภาพหรือไม่ ?")'])!!}

                              <button  type="submit" class="btn btn-default"  style="width: 50px; height: 50px;">
                                <span class="fa fa-trash-o"></span> 
                              </button>
                              
                              {!! Form::close() !!}
                             
                              </td>
                              

                            </tr>
                             
                          
                          @endforeach
                          @endif
                        </tbody>
                      </table>
                    
                    </div>
                    </div>
                  </div>
         
            </div>
        </div>
  
                <!-- Page Header -->
                


           
@endsection

@section('footer')

@endsection