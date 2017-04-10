@extends('layouts.user')

@section('head')
 <style >
 .list {
	list-style: none;
	margin: 10px 20px;
	padding: 150px ;
}
.list li {

}
.list li img {
	float: left;
	margin: 20px 20px 0 10px;
}
.list li div {
	padding-left: 130px;
}
/** Blog Page **/
#blog {
	margin-bottom: 60px;
}
#blog .main {
	background: url(../images/dash.png) repeat-y right top;
	min-height: 500px;
	width: 598px;
	margin: 0;
	padding: 20px 20px 40px 40px;
}
#blog .list li {
	background-position: left bottom;
	height: 194px;
	width: 540px;
	margin: 10px 10px 18px;
	padding: 20px 40px 10px 20px;
}


#blog .list li img {
	margin: 0 20px 0 0;
}
#blog .list li div {
	padding-left: 150px;
}
#blog .list li div p {
	letter-spacing: 1px;
	padding-bottom: 6px;
	border-bottom: 1px solid #e5e5e5;
}
#blog .list li div > span {
	color: #9b8d84;
	font: 12px/42px Arial, Helvetica, sans-serif;
}
#blog .list li div > span.views {
	float: right;
}
#blog .sidebar {
	float: right;
	width: 240px;
	padding: 0 40px 0 18px;
}

 </style>


@endsection

@section('content')


<h1 align="center" style="color: white;  ">ข้อมูลวัดในอำเภอเมืองเชียงใหม่</h1>

<hr width="50%"><br>
	<div id="blog" class="area">
			<div style="float: right; width: 1000px; margin: 20px 30px 20px 10px;">
				<ul class="list" style="background: currentColor ; padding-top: 10px;padding-bottom: 10px;padding-right: 10px;" > 
				@foreach($temple as $row)
				<?php  

				$pic = DB::table('temple')->select('*')->where("picture.Temp_id",'=',$row->Temp_id)->join('picture','picture.Temp_id','=','temple.Temp_id')->get();

				?>
					<li>

				<?php 
					if(count($pic)>0){
							$i=0;
						foreach ($pic as $rowpic) {
							$i++;
							if ($i==2) {
								break;
							}
							?>
							<img src="{{ ('images/pictemple/'.$rowpic->Pic_name) }}" alt='Img' height='130' width='130' />
							<?php
						}
						
							

						
					}
				?>
						
						<div>
							
							<h3 style="color: #DAA520"></a>{{$row->Temp_name}}</h3>
							<p style="color:#8B4513; font-weight: bold;">{{$row->Temp_features}}</p>
							 
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



