<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('/plugins/iCheck/square/blue.css')}}">
 <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
   
    <script>
            var Data = <?php echo ($data); ?>;
     
            $(document).ready(function () {
                $('#example').DataTable({
                    data: Data,
                    columns: [
                        {title: "Id",data:"Id"},
                        {title: "File",data:"File"},
                        {title: "Type",data:"Type"},
                        {title: "Size",data:"Size"},
                    
                        
                    ]

                });
                var table = $('#example').DataTable();
               
            });
        </script>


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
   
  </div>
   
  <div class="login-box-body">
    <p class="login-box-msg">Files Uploaded</p>

     <form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            </table>
        </form>   
         
     
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->

</body>
</html>