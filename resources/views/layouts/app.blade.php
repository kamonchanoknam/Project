<!DOCTYPE html>
<html>
<head>
    <title>Website Temple in Chiang Mai City</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <script src="{{ asset('js/jQuery1.js') }}"></script>
    <script src="{{ asset('js/myScript.js') }}"></script>

    {{-- login --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    @yield('head')
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

/*nav login*/
.navbar-default{
  background-color: black;
  border-color: #e7e7e7;

}
.navbar{
  position: relative;
  min-height: 0px;
  margin-bottom: 0px;
  border: 1px solid transparent;
}
@media(min-width: 768px)
.navbar-rigth{
  float: right;
  margin-right: -15px;
}
@media(min-width: 768px)
.navbar-form{
  width: auto;
  padding-top: 0;
  margin: 0;
  border:0;
  box-shadow: none;
}
.navbar-form{
  padding: 1px 2px;
  margin-top: 2px;
  margin-bottom: 4px;
}
@media (min-width: 768px)
.navbar-form .input-group {
    display: inline;
    vertical-align: middle;
}
.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
}
.input-group-addon:first-child {
    border-right: 0;
}
@media (min-width: 768px)
.navbar-form .input-group .form-control {
    width: 25%;
}
@media (min-width: 768px)
.navbar-form .input-group .input-group-addon, .navbar-form .input-group .input-group-btn, .navbar-form .input-group .form-control {
    width: auto;
}
.input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 80%;
    margin-bottom: 0;
}
.input-group-addon:first-child {
    border-right: 50;
}
.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.input-group-addon, .input-group-btn {
    width: 6%;
    white-space: nowrap;
    vertical-align: middle;
}
.input-group-addon, .input-group-btn, .input-group .form-control {
    display: table-cell;
}

.form-control {
    display: block;
    width: 50%;
    height: 20px;
    padding: 4px 8px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
p{
  color: white;
}
button{
  background-color: red;
  color: white;

}
</style>

</head>
<body>

    {{-- nav  login --}}
    <nav class="navbar navbar-default" style="    height: 40px;">
      <form id="signin" class="navbar-form navbar-rigth" role="form">
        <div class="input-group" style="float: right;">

          {{-- <input type="email" name="email" id="email" class="form-control" value placeholder="Email Address"> --}}

      <div class="input-group-addon" ">
        <i class="fa fa-user"></i>  
       </div>

       <input id="email" name="email" type="text" class="form-control input-md" placeholder="Email Address">

       <div class="input-group-addon">
        <i class="fa fa-lock"></i> 
       </div>

       <input id="Date Of Birth" name="Date Of Birth" type="text" class="form-control input-md" placeholder="Password"> 

      </div>
             
      </form>
      
    </nav>
    <!--navigation-->
    <div id="header">
        <div class="area">
            <div id="logo">
                <!--<a href="index.html"><img src="" alt="LOGO" height="86" width="170" /></a>-->
                <h1 style="color: #996600">Temple in Chiang Mai City</h1>
            </div>
            <ul id="navigation">
                <li  {{ Request::is('index') ? ' class=selected ' : null }}>
                    <a href="{{ url('/index') }}">หน้าแรก</a>
                </li>
                <li  {{ Request::is('suggest') ? ' class=selected ' : null }}>
                    <a href="{{ url('/suggest') }}">แนะนำเส้นทาง</a>
                </li>
                <li {{ Request::is('calendar') ? ' class=selected ' : null }}>
                    <a href="{{ url('/calendar') }}">ปฏิทินกิจกรรม</a>
                </li>
                <li  {{ Request::is('search') ? ' class=selected ' : null }}>
                    <a href="{{ url('/search') }}">ค้นหาวัด</a>
                </li>

            </ul>
        </div>
    </div>
    
    
     @yield('content')


    <!--footer-->
    <div id="footer">
        <span class="divider"></span>
        <div class="area">
            <div id="connect">
                <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="mail"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
            </div>
            <!--<p>
                © 2023 AZ Logistics. All Rights Reserved.
            </p>-->
        </div>
    </div>
    @yield('footer')
</body>
</html>