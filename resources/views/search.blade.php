@extends('layouts.user')

@section('head')
		<style>
		.button {
		  padding: 5px 15px;
		  font-size: 18px;
		  text-align: center;
		  cursor: pointer;
		  outline: none;
		  color: #fff;
		  background-color: #66CDAA;
		  border: none;
		  border-radius: 15px;
		  box-shadow: 0 9px #999;
		}

		.button:hover {background-color: #3e8e41}

		.button:active {
		  background-color: #3e8e41;
		  box-shadow: 0 5px #666;
		  transform: translateY(4px);
		}
		.textbox {
		    background: #333;
		    color: #ccc;
		    width: 200px;
		    padding: 6px 15px 6px 35px;
		    border-radius: 20px;
		    box-shadow: 0 1px 0 #ccc inset;
		    transition: 500ms all ease;
		    outline: 0;
		}
		 .textbox:hover {
		    width: 270px;
		}
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 75%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
		img{
			padding: 20px;
			width: 220px;
			height: 220px;
			
    		

		}
		</style>
@endsection

@section('content')
	<h1 align="center">ค้นหาวัด</h1>
			<hr width="50%"><br>
			

			{!! Form::open(['url' => 'search']) !!}
			<div align="center">
   			  <input class="textbox" type="text" list="myCompanies" name="templeName" id="suggest" >
			  <datalist id="myCompanies" >

			  @foreach($temple as $temple)
			  	<option value="{{ $temple->Temp_name}}">
			  @endforeach
			  </datalist>
			  <button class="button" type="submit">ตกลง</button>
			  <button class="button" type="reset">ยกเลิก</button>
			  </div>
			{!! Form::close() !!} 
			<br>


			
			@if(!empty($temple1))
			
				<table align="center">
			  <tr>
			    <th>ชื่อวัด</th>
			    <td>{{$temple1[0]->Temp_name}}</td>
			  </tr>
			  <tr>
			    <th>ที่อยู่วัด</th>
			    <td>{{$temple1[0]->Temp_address}}</td>
			    
			  </tr>
			  <tr>
			    <th>ลักษณะเด่น</th>
			    <td>{{$temple1[0]->Temp_features}}</td>
			  </tr>
			  <tr>
			     <th>ประวัติ</th>
			    <td>{{$temple1[0]->Temp_history}}</td>
			  </tr>
			  <tr>
			    <th>ละติจูด</th>
			    <td>{{$temple1[0]->Temp_latitude}}</td>
			  </tr>
			  <tr>
			    <th>ลองติจูด</th>
			    <td>{{$temple1[0]->Temp_longitude}}</td>
			  </tr>
			</table><br>

			@foreach ($temple1 as $temple)
			<img src="{{ asset('images/pictemple/'.$temple->Pic_name) }}">
			@endforeach
			@endif<br>





			


@endsection

@section('footer')

@endsection

