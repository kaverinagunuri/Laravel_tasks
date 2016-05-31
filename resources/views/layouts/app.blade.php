<!DOCTYPE html>
<html>
   @include('layouts.head')
    <body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @include('layouts.header')

    <!-- Sidebar -->
    @include('layouts.slider')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

 
</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<!--<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js") }}"></script>-->
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
 <script src="//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js"></script>
   <script src="{{asset('js/progress.js')}}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->

</body>
</html>


