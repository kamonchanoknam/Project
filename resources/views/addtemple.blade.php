@extends('layouts.admin')
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
@section('head')
@endsection
@section('content')
	 <div id="page-wrapper">
	 	<div class="row">
	 	<div class="col-lg-12">
	 		<h1 class="page-header">กรอกข้อมูลเพื่อเพิ่มวัด</h1>

	 		{!! Form::open(['url'=>'/addtemple','class'=>'pure-form','method' => 'post']) !!}
			    <fieldset class="pure-group">
			       <input type="text" class="pure-input-1-2" placeholder="ชื่อวัด" name="tepname">
			       <input type="text" class="pure-input-1-2" placeholder="ที่อยู่วัด" name="address">
			    </fieldset>

			    <fieldset class="pure-group">
			        <textarea class="pure-input-1-2" placeholder="ลักษณะเด่น" name="features" maxlength="300"></textarea>
			        <textarea class="pure-input-1-2" placeholder="ประวัติวัด" name="history"></textarea>
			    </fieldset>

			    <fieldset class="pure-group">
			        <input type="text" class="pure-input-1-2" placeholder="ละติจูด" name="latitude">
			        <input type="text" class="pure-input-1-2" placeholder="ลองติจูด" name="longitude">
			       
			    </fieldset>
			    หมายเลขประชาชนผู้ดูแล :
			    <fieldset>
			    	<select name="id" class="pure-input-1-2">
		                @foreach($staff as $staff)
		                <option value="{{$staff->Staff_id}}">{{$staff->Staff_id}}</option>
		                @endforeach
		            </select>
			    </fieldset>

			    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">เพิ่มข้อมูล</button>
			
			{!! Form::close() !!}

	 	</div>
	 	</div>
	 </div>
@endsection
@section('footer')

@endsection