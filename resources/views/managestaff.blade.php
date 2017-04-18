@extends('layouts.admin')
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
@section('head')
@endsection
@section('content')
	 <div id="page-wrapper">
	 	<div class="row">
	 	<div class="col-lg-12">
	 		<h1 class="page-header">จัดการสิทธิ์ผู้ดูแลวัด</h1>

	 		{!! Form::open(['url'=>'/addtemple','class'=>'pure-form','method' => 'post']) !!}
			    <table class="table table-inverse" style="background-color: #BEBEBE " >
                      
                      <tbody>
                        <tr>
                          <th>หมายเลขบัตรประชาชน</th>
                          <th>ชื่อ</th>
                          <th>นามสกุล</th>
                          <th>ชื่อผู้ใช้</th>
                          <th>รหัสผ่าน</th>
                         
                          <th>สถานะผู้ดูแล</th>
                          <th>ประเภทผู้ดูแล</th>

                          <th colspan="">แก้ไขรายละเอียด</th>

                        </tr>

                        @foreach($staff1 as $staff)
                        <tr {{-- style="color: blue" --}} >
                        
                          <td>{{ $staff->Staff_id }}</td>
                          <td>{{ $staff->Name  }}</td>
                          <td>{{ $staff->Surname }}</td>
                          <td>{{ $staff->Username }}</td>
                          <td>{{ $staff->Password }}</td>
                         
                          <td>{{ $staff->Status }}</td>
                          <td>{{ $staff->Type }}</td>
                          <td>

                          @if(($staff->Status)==0)
                          <a href="{{ url('/managestaff/'.$staff->Staff_id.'/edit')}}">
                            <button type="button" class="btn btn-danger">
                              <span class="fa fa-lock "></span> 
                            </button></a>
                          @else
                          <a href="{{ url('/managestaff/'.$staff->Staff_id.'/edit')}}">
                            <button type="button" class="btn btn-info">
                              <span class="fa fa-unlock "></span> 
                            </button></a>
                          @endif
                          </td>

                        </tr>
                        
                          <div class="pagination">
                            
                          </div>
                        

                        @endforeach
                                   
                       </tr>
                      </tbody>
                      
                    </table>

			{!! Form::close() !!}
{{ $staff1->links() }}
	 	</div>
	 	</div>
	 </div>
@endsection
@section('footer')

@endsection