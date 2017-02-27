@extends('layouts.app')

@section('head')
	<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #FFCC66;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

	
</style>



@endsection

@section('content')
<div align="right">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">เข้าสู่ระบบ</button>
</div>


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
							<p>{{$row->Temp_features}}
						
							</p>
							 
						</div>
					</li>
				@endforeach
				</ul>

				<div class="pagination">
					{{ $temple->links() }}
				</div>
			</div>


			

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="{{ asset('admin/img/loginicon.png') }}" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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



