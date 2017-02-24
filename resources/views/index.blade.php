@extends('layouts.app')

@section('head')
		
@endsection

@section('content')
	<div id="blog" class="area">
			<div class="main">
				<ul class="list">
				@foreach($temple as $row)
					<li>
						<img src="images/boss.png" alt="Img" height="130" width="130" />
						<div>

							<h3>s</a>{{$row->Temp_name}}</h3>
							<p>{{$row->Temp_features}}
						
							</p>
							<span class="views">000 views</span> <span class="time">Sep 18 by Admin</span>
						</div>
					</li>
				@endforeach
				</ul>
				<div class="pagination">
					<ul>
						<li>
							<a href="blog.html">First</a>
						</li>
						<li class="selected">
							<a href="blog.html">1</a>
						</li>
						<li>
							<a href="blog.html">2</a>
						</li>
						<li>
							<a href="blog.html">3</a>
						</li>
						<li>
							<a href="blog.html">4</a>
						</li>
						<li>
							<a href="blog.html">5</a>
						</li>
						<li>
							<a href="blog.html">6</a>
						</li>
						<li>
							<a href="blog.html">7</a>
						</li>
						<li>
							<a href="blog.html">8</a>
						</li>
						<li>
							<a href="blog.html">9</a>
						</li>
						<li>
							<a href="blog.html">10</a>
						</li>
						<li class="last">
							<a href="blog.html">Last</a>
						</li>
					</ul>
				</div>
			</div>
			<!--<div class="sidebar">
				<h2 class="heading1" >ค้นหาจากตำบล</h2>
				<div class="box2">
					<div>
						<ul class="archives">
							<li class="selected">
								<span>2023</span>
								<ul>
									<li>
										<a href="blog.html">December</a>
									</li>
									<li>
										<a href="blog.html">November</a>
									</li>
									<li>
										<a href="blog.html">October</a>
									</li>
									<li>
										<a href="blog.html">September</a>
									</li>
									<li>
										<a href="blog.html">August</a>
									</li>
									<li>
										<a href="blog.html">July</a>
									</li>
									<li>
										<a href="blog.html">June</a>
									</li>
									<li>
										<a href="blog.html">May</a>
									</li>
									<li>
										<a href="blog.html">April</a>
									</li>
									<li>
										<a href="blog.html">March</a>
									</li>
									<li>
										<a href="blog.html">Febuary</a>
									</li>
									<li>
										<a href="blog.html">Janruary</a>
									</li>
								</ul>
							</li>
							<li>
								<span>2023</span>
							</li>
							<li>
								<span>2023</span>
							</li>
							<li>
								<span>2023</span>
							</li>
						</ul>
					</div>
				</div>
			</div>-->
		</div>
@endsection

@section('footer')

@endsection



