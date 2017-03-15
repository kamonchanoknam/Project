<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

// $name = $row['user_name'];
?>

@extends('layouts.admin')

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
                    
                    <table class="table table-inverse">
                      
                      <tbody>
                        <tr>
                          <th>ชื่อวัด</th>
                          <td>แสดงขื่อวัด</td>
                        </tr>
                        <tr>
                          <th>ที่อยู่วัด</th>
                          <td>แสดงที่อยู่วัด</td>
                        </tr>
                        <tr>
                          <th>ลักษณเด่น</th>
                          <td>แสดงลักษณเด่น</td>
                        </tr>
                        <tr>
                          <th>ประวัติ</th>
                          <td>แสดงประวัติ</td>
                        </tr>
                        <tr>
                          <th>ละติจูด</th>
                          <td>แสดงละติจูด</td>
                        </tr>
                        <tr>
                          <th>ลองติจูด</th>
                          <td>แสดงลองติจูด</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <!--End Page Header -->
            </div>
        </div>

           
@endsection

@section('footer')

@endsection






