@extends('layouts.user')

@section('head')
	<style>
		
	
	</style>



@endsection

@section('content')


<h1 align="center">ข้อมูลวัดในอำเภอเมืองเชียงใหม่</h1>

<hr width="50%"><br>
	<div id="blog" class="area">
			<div class="main">
				<ul class="list" style="background: #CCFFFF"> 
				@foreach($pictemp as $row)
					<li>
						<img src="{{ ('images/pictemple/'.$row->Pic_name) }}" alt="Img" height="130" width="130" />
						<div>
							
							<h3></a>{{$row->Temp_name}}</h3>
							<p style="color:black;">{{$row->Temp_features}}</p>
							 
						</div>
						
					</li>
				@endforeach
				</ul>
				<div>
					<div class="pagination">
						{{ $temple->links() }}
					</div>
				</div>
			</div>
	</div>
		


@endsection

@section('footer')

@endsection



