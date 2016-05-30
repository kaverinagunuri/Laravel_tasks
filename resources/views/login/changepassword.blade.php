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
  <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
  <script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
  <script src="{{asset('/js/Validations.js')}}"></script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
   
  </div>
  <!-- /.login-logo -->
  @if ( session()->has('password') )
    <div class="alert alert-info">{{ session()->get('password') }}</div>
@endif
  <div class="login-box-body">
    <p class="login-box-msg">Change password</p>

    <form action="{{URL::route('password')}}" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
     
      <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="Password" id="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         <span class="error" id="PasswordError"></span>
      </div>
      <div class="row">
          
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="change" id="change" class="btn btn-primary btn-block btn-flat">Change</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="{{asset('/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
