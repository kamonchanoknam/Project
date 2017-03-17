@extends('layouts.user')

@section('head')
	<style>
		
	
	</style>



@endsection

@section('content')


<h1 align="center">วัดในอำเภอเมืองเชียงใหม่</h1>

<hr width="50%"><br>
	<div id="blog" class="area">
			<div class="main">
				<ul class="list" style="background: #CCFFFF"> 
				@foreach($temple as $row)
					<li>
						<img src="images/boss.png" alt="Img" height="130" width="130" />
						<div>

							<h3></a>{{$row->Temp_name}}</h3>
							<p style="color:black;">{{$row->Temp_features}}</p>
							 
						</div>
						
					</li>
				@endforeach
				</ul>
				<div align="center">
					<div class="pagination">
						{{ $temple->links() }}
					</div>
				</div>
			</div>
	</div>
		


@endsection

@section('footer')

@endsection



