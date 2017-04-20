@extends('layouts.admin')
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
@section('head')
@endsection
@section('content')
	 <div id="page-wrapper">
	 	<div class="row">
	 	<div class="col-lg-12">
	 		<h1 class="page-header">กรอกข้อมูลเพื่อเพิ่มผู้ดูแลวัด</h1>

	 		@if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
	 		
	 		{!! Form::open(['url'=>'addstaff','class'=>'pure-form']) !!}
			    <fieldset class="pure-group">
			       <input type="number" class="pure-input-1-2" placeholder="หมายเลขประชาชน" name="id" maxlength="13" required>
			       <input type="text" class="pure-input-1-2" placeholder="ชื่อ" name="name" required>
			       <input type="text" class="pure-input-1-2" placeholder="นามสกุล" name="surname">
			    </fieldset>

			    <fieldset class="pure-group">
			       <input type="text" class="pure-input-1-2" placeholder="ชื่อผู้ใช้" name="username" required>
			       <input type="text" class="pure-input-1-2" placeholder="รหัสผ่าน" name="password" required>
			       <input type="text" class="pure-input-1-2" placeholder="อีเมล์" name="email" required>
			       <input type="text" class="pure-input-1-2" placeholder="ที่อยู่" name="address" required>
			       <input type="text" class="pure-input-1-2" placeholder="โทรศัพท์" name="phone" required>
			    </fieldset>

			    <fieldset class="pure-group">
			       <input type="text" class="pure-input-1-2" placeholder="สถานะผู้ดูแล" name="status" required>
			       <input type="text" class="pure-input-1-2" placeholder="ประเภทผู้ดูแล" name="type" required>
			    
			    </fieldset>

			   
			    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">เพิ่มข้อมูล</button>
			
			{!! Form::close() !!}

	 	</div>
	 	</div>
	 </div>
@endsection
@section('footer')

@endsection