<!DOCTYPE html>
<html>
<head>
    <title>Website Temple in Chiang Mai City</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />
    <meta charset="UTF-8">
    <script src="{{ asset('js/jQuery1.js') }}"></script>
    <script src="{{ asset('js/myScript.js') }}"></script>
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
</style>

</head>
<body>
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