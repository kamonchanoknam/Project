@extends('layouts.admin')
<?php

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>


@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .othertop{margin-top:10px;}
    </style>
</style>
@endsection

@section('content')<br>
     <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <div class="container">
<div class="row">
<div class="col-md-8 "><br><br>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend align="center" style="font-size: 24px">ข้อมูลส่วนตัว</legend>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="id">หมายเลขบัตรประชาชน</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-id-card">
        </i>
       </div>
          <input id="id" name="id" type="text" class="form-control input-md" value="{{ $user[0]->Staff_id}}" readonly>

      </div>

    
  </div>

  
</div>

<!-- File Button --> 
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
  <div class="col-md-4">
    <input id="Upload photo" name="Upload photo" class="input-file" type="file">
  </div>
</div>-->

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="fname">ชื่อ</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-user-circle"></i>
        
       </div>
       <input id="fname" name="fname" type="text" class="form-control input-md" 
       value="{{ $user[0]->Name}}" >
      </div>
  
    
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="lname">นามสกุล</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-user-circle-o"></i>
        
       </div>
       <input id="lname" name="lname" type="text" class="form-control input-md" value="{{ $user[0]->Surname}}" >
      </div>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Address">ที่อยู่</label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
      <i class="fa fa-home" style="font-size: 20px;"></i>
        
       </div>
  <input id="Address" name="Address" type="text"  class="form-control input-md" value="{{ $user[0]->Address}}">

      </div>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">หมายเลขโทรศัพท์</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-phone"></i>
        
       </div>
    <input id="Phone number " name="Phone number " type="text"  class="form-control input-md" value="{{ $user[0]->Phone}}">
    
      </div>  
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email Address">อีเมล</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="Email Address" name="Email Address" type="text"  class="form-control input-md" value="{{ $user[0]->Email}}">
    
      </div>
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Availability time">สถานะผู้ดูแล</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    {{-- <label id="Availability time" name="Availability time" type="text"  class="form-control input-md"></label> --}}
    <input id="status" name="status" type="text"  class="form-control input-md" value="{{ $user[0]->Status}}" readonly>
    
      </div>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Available Service Area">ประเภทผู้ดูแล</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-street-view"></i>
        
       </div>
   {{-- <label id="Available Service Area" name="Available Service Area" type="text"  class="form-control input-md"></label> --}}
   <input id="type" name="type" type="text"  class="form-control input-md" value="{{ $user[0]->Type}}" readonly>
    
      </div>
  
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4" align="center">
  <a href="#" class="btn btn-info" >บันทึก</a>
    
  </div>
</div>

</fieldset>
</form>
</div>
</div>
   </div>
   

                    
                </div>
                <!--End Page Header -->
            </div>
        </div>

           
@endsection

@section('footer')

@endsection






