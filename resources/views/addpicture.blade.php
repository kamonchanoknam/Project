<?php

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}


?>

@extends('layouts.admintemp')
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



   
@endsection

@section('content')
    <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">เพิ่มรูปภาพ</h1>

                
                      <form action="upload.php" method="post" >
      
                          <input type="file" name="fileToUpload" id="fileToUpload">
                          <br>
                          <input type="submit" value="อัพโหลดรูปภาพ" name="submit">
                      </form>

                </div>
            </div>
    </div>
                    
              
                         
@endsection

@section('footer')

@endsection






