<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Portal | Dashboard</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">

        <link rel="stylesheet" href="/plugins/morris/morris.css">

        <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

        <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">

        <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css">

        <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/map.css')}}">
        <link rel="stylesheet" href="{{asset('/css/styles.css')}}">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">


                <a href="#" class="logo">

                    <span class="logo-mini"><b>A</b>LT</span>

                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>

                <nav class="navbar navbar-static-top">

                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">


                            <li class="dropdown messages-menu">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>

                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>

                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                    page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>

                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        >
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">User</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>

                                    </li>

                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{URL::route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="{{URL::route('logout')}}" data-toggle="control-sidebar"><i class="glyphicon glyphicon-log-out"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>



            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>


                <section class="content">

                    @yield('content')

                </section>

            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.3
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>

            <aside class="main-sidebar">

                <section class="sidebar">

                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                   
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                         <li class="treeview active ">
                            <a href="{{URL::route('Dashboard')}}">
                                <i class="glyphicon glyphicon-dashboard"></i>
                                <span>DashBoard</span>
                                
                            </a>
                           
                        </li>

                        <li class="treeview active ">
                            <a href="{{URL::route('UpdateProfile')}}">
                                <i class="glyphicon glyphicon-edit"></i>
                                <span>Update Profile</span>
                              </a>
                          
                        </li>
                        
                        <li class="treeview active" >
                            <a href="{{URL::route('ChangePassword')}}">
                                <i class="glyphicon glyphicon-pencil"></i>
                                <span>Change Password</span>
                            </a>
                           
                        </li>
                        <li class="treeview active">
                            <a href="{{URL::route('viewProfile')}}"><i class="glyphicon glyphicon-eye-open"></i> View Profile</a>
                        </li>
                       
                        <li class="treeview active "><a href="{{URL::route('FileUpload')}}"><i class="glyphicon glyphicon-upload"></i> File Upload</a></li>
                        <li class="treeview active "><a href="{{URL::route('FileDataTables')}}"><i class="glyphicon glyphicon-eye-open"></i> View Files</a></li>
                           
                   
                         <li class="treeview active ">
                            <a href="{{URL::route('timezonetables')}}">
                                <i class="glyphicon glyphicon-time"></i>
                                <span>Time Zone</span>
                               
                            </a>
                           
                        </li>
                        <li class="treeview active ">
                            <a href="#">
                                <i class="glyphicon glyphicon-tags"></i> <span>Export to Excel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::route('excelReg')}}"><i class="fa fa-circle-o"></i> Export Register to Excel</a></li>
                                <li><a href="{{URL::route('excelLogs')}}"><i class="fa fa-circle-o"></i> Export User Logs to Excel</a></li>
                                <li><a href="{{URL::route('excelFile')}}"><i class="fa fa-circle-o"></i> Export File Uploads to Excel</a></li>
                                <li><a href="{{URL::route('excelTimeZone')}}"><i class="fa fa-circle-o"></i> Export Time Zone to Excel</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="glyphicon glyphicon-tags"></i> <span>Export to PDF</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::route('PDFReg')}}"><i class="fa fa-circle-o"></i> Export Register to PDF</a></li>
                                <li><a href="{{URL::route('PDFLogs')}}"><i class="fa fa-circle-o"></i> Export User Logs to PDF</a></li>
                                <li><a href="{{URL::route('PDFFile')}}"><i class="fa fa-circle-o"></i> Export File Uploads to PDF</a></li>
                                <li><a href="{{URL::route('PDFTimeZone')}}"><i class="fa fa-circle-o"></i> Export Time Zone to PDF</a></li>
                            </ul>
                        </li>
                       

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>


            <div class="control-sidebar-bg"></div>
        </div>

        <script src="{{asset('/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
        
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        <script type="text/javascript" src="{{asset('/js/map.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/Validations.js')}}"></script>
        <script src="{{asset('js/progress.js')}}"></script>

        <script src="//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js"></script>
        <script src = "/bootstrap/js/bootstrap.min.js" ></script>
        <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>

        <script src="/plugins/fastclick/fastclick.js"></script>

        <script src="/dist/js/app.min.js"></script>

        <script src="/dist/js/pages/dashboard.js"></script>

        <script src="/dist/js/demo.js"></script>

        <script src="{{ asset ("/js/jquery-2.2.2.min.js") }}"></script>

        <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script> 
        <script src="{{asset('/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
        @yield('script')



    </body>
</html>
