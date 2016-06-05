

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-edit"></i>
                    <span>Update Profile</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::route('UpdateProfile')}}"><i class="fa fa-circle-o"></i> Update Profile</a></li>
                </ul>
            </li>

            <li class="treeview" active>
                <a href="#">
                    <i class="glyphicon glyphicon-edit"></i>
                    <span>Change Password</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::route('ChangePassword')}}"><i class="fa fa-circle-o"></i> Change Password</a></li>
                </ul>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>File Uploads</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::route('FileUpload')}}"><i class="fa fa-circle-o"></i> File Upload</a></li>
                    <li><a href="{{URL::route('json')}}"><i class="fa fa-circle-o"></i> View Files</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Export to Excel</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::route('excelReg')}}"><i class="fa fa-circle-o"></i> Export Register to Excel</a></li>
                    <li><a href="{{URL::route('excelLogs')}}"><i class="fa fa-circle-o"></i> Export User Logs to Excel</a></li>
                    <li><a href="{{URL::route('excelFile')}}"><i class="fa fa-circle-o"></i> Export File Uploads to Excel</a></li>
                    <li><a href="{{URL::route('excelTimeZone')}}"><i class="fa fa-circle-o"></i> Export Time Zone to Excel</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Export to PDF</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::route('PDFReg')}}"><i class="fa fa-circle-o"></i> Export Register to PDF</a></li>
                    <li><a href="{{URL::route('PDFLogs')}}"><i class="fa fa-circle-o"></i> Export User Logs to PDF</a></li>
                    <li><a href="{{URL::route('PDFFile')}}"><i class="fa fa-circle-o"></i> Export File Uploads to PDF</a></li>
                    <li><a href="{{URL::route('PDFTimeZone')}}"><i class="fa fa-circle-o"></i> Export Time Zone to PDF</a></li>
                </ul>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-time"></i>
                    <span>Time Zone</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::route('timezone')}}"><i class="fa fa-circle-o"></i> Time Zone</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
