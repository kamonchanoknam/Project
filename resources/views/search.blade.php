@extends('layouts.app')

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
		</style>
@endsection

@section('content')
	<h1 align="center">ค้นหาวัด</h1>
			<hr width="50%"><br>
			<form align="center">
			  <input class="textbox" type="text" list="myCompanies" name="company" id="suggest" >
			  <datalist id="myCompanies" >
			  @foreach($temple as $temple)
			  	<option value="{{ $temple->Temp_name}}">
			  @endforeach
			  </datalist>
			  <button class="button" type="submit">ตกลง</button>
			  <button class="button" type="reset">ยกเลิก</button>
			</form><br><br>
@endsection

@section('footer')

@endsection

