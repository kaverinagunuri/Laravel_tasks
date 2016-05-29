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
                <a href="#"><b>Admin</b>LTE</a>
            </div>

            @if(isset($message))
            <div class="alert alert-info">{{$message}}</div>
            @endif

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{URL::route('form2')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Full name" id="Full_name" name="Full_name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <span class="error" id="Fullname_error"></span>
                        @if($errors->has('Full_name'))
                        {{ $errors->first('Full_name') }}
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <textarea class="form-control" rows="3" cols="75" placeholder="Address" name="Address" id="Address"></textarea>
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        <span class="error" id="Address_error"></span>
                        @if($errors->has('Address'))
                        {{ $errors->first('Address') }}
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="City" id="City" name="City">
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        <span class="error" id="City_error"></span>
                        @if($errors->has('City'))
                        {{ $errors->first('City') }}
                        @endif
                    </div>
                    <div class='form-group has-feedback'>
                        <select class="form-control" id="state" name="state" >
                            <option value="Select" selected>Select State</option>
                            <option value="Telanagana">Telanagana</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                        </select>
                    </div>

                    <!--      <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email" name="Email" id="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                             <span class="error" id="Email_error"></span>
                          </div>
                          <div class="form-group has-feedback">
                              <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                              <span class="error" id="PasswordError"></span>
                          </div>
                          <div class="form-group has-feedback">
                              <input type="password" class="form-control" placeholder="Retype password" name="ConfirmPassword" id="ConfirmPassword"/>
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                             <span class="error" id="ConfirmPasswordError" ></span>
                          </div>-->
                    <div class="row">
                        <!--        <div class="col-xs-8">
                                 
                                    <label>
                                        <input type="checkbox" required=""> Do u want to continue
                                    </label>
                                 
                                </div>-->
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" id="next" class="btn btn-primary btn-block btn-flat">Next</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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