<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin for Temple</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('admin/plugins/bootstrap/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/pace/pace-theme-big-counter.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/main-style.css') }}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{ asset('admin/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
     <script src="{{ asset('admin/plugins/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('admin/plugins/pace/pace.js') }}"></script>
    <script src="{{ asset('admin/scripts/siminta.js') }}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{ asset('admin/plugins/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/morris/morris.js') }}"></script>
    <script src="{{ asset('admin/scripts/dashboard-demo.js') }}"></script>
    
    
  
    <!--<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
    <script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>-->
   </head>
   @yield('head')
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                <h2 style="font-weight: bold; color: red">&nbsp;Welcome Admin</h2>
                    <!--<img src="assets/img/logo.png" alt="" />-->
               
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                {{-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger" ></span><i class="fa fa-pencil-square-o fa-3x"></i>
                    </a>
                </li> --}}

                {{-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success"></span>  <i class="fa fa-calendar fa-3x"></i>
                    </a>
                </li> --}}


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ url('/userpro')}}"><i class="fa fa-user fa-fw"></i>ข้อมูลส่วนตัว</a>
                        </li>
                        <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>-->
                        <li class="divider"></li>
                        <li><a href="{{ url('index') }}"><i class="fa fa-sign-out fa-fw"></i>ออกจากระบบ</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="{{ asset('admin/img/adicon.png') }}" alt="">
                            </div>
                            <div class="user-info">
                                <div>Nam<strong> Kamon</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                    <?php if(Request::is('adindex')){ ?> 
                    <li class='selected'> 
                    <?php }else{ ?> 
                    <li> 
                    <?php } ?>
                        <a href="{{ url('/adindex') }}"><i class="fa fa-pencil-square-o fa-fw"></i>ข้อมูลวัด</a>
                    </li>
                   
                     <?php if(Request::is('adcalen')){ ?> 
                        <li class='selected'> 
                        <?php }else{ ?> 
                        <li> 
                        <?php } ?>
                        <a href="{{ url('/adcalen') }}"><i class="fa fa-calendar fa-fw"></i>ปฏิทินกิจกรรม</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        @yield('content')
        

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   
@yield('footer')
</body>

</html>
