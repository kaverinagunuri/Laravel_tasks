<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="{{URL::route('Onconfirm')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
     
      <div class="form-group has-feedback">
          <label for="fullname">Full-Name</label>  <input type="hidden" name="Full_name" value="{{$Userdata['Full_name']}}"/> {{$Userdata['Full_name']}}
      </div>
        <div class="form-group has-feedback">
             <label for="Address">Address</label>  <input type="hidden" name="Address" value="{{$Userdata['Address']}}"/> {{$Userdata['Address']}}
           </div>
        <div class="form-group has-feedback">
          <label for="City">City</label>  <input type="hidden" name="City" value="{{$Userdata['City']}}"/> {{$Userdata['City']}} 
      </div>
        <div class='form-group has-feedback'>
            <label for="state">state</label>  <input type="hidden" name="state" value="{{$Userdata['state']}}"/> {{$Userdata['state']}}
           </div>
        <div class="form-group has-feedback">
             <label for="Email">Email</label>  <input type="hidden" name="Email" value="{{$Userdata['Email']}}"/> {{$Userdata['Email']}}
             </div>
                    <div class='form-group has-feedback'>
                        <label for="Mobile">Mobile</label>  <input hidden type="tel" name="Mobile" value="{{$Userdata['Mobile']}}"/> {{$Userdata['Mobile']}}
                        </div>

      <div class="row">
<!--        <div class="col-xs-8">
         
            <label>
                <input type="checkbox" required=""> Do u want to continue
            </label>
         
        </div>-->
        <!-- /.col -->
        <div class='col-xs-4'>
            <a href="{{URL::route('back')}}"><input type="button" class="btn btn-primary btn-block btn-flat" value="BACK"></a>
        </div>
        <div class="col-sm-4">
            <button type="submit" id="confirm" class="btn btn-primary btn-block btn-flat">Confirm</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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