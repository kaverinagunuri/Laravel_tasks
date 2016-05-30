<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Update Page</title>

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
            @if ( session()->has('update') )
            <div class="alert alert-info">{{ session()->get('update') }}</div>
            @endif

            <div class="register-box-body">
                <p class="login-box-msg">Update Profile</p>

                <form action="{{URL::route('onupdate')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    @if(isset($info))
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Full name" id="Full_name" name="Full_name" value="{{$info['Full_name']}}"> 
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <span class="error" id="Fullname_error"></span>

                    </div>
                    <div class="form-group has-feedback">
                        <textarea class="form-control" rows="3" cols="75" placeholder="Address" name="Address" id="Address"  value="{{$info['Address']}}">{{$info['Address']}}</textarea>
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        <span class="error" id="Address_error"></span>

                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="City" id="City" name="City"  value="{{$info['City']}}">
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        <span class="error" id="City_error"></span>

                    </div>
                    <div class='form-group has-feedback'>
                        <select class="form-control" id="state" name="state" >
                            <option value="{{$info['State']}}" selected="" >{{$info['State']}}</option>
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
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Phone Number" id="Mobile" name="Mobile" size="10" value="{{$info['Mobile']}}">
                        <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                        <span class="error" id="Mobile_error"></span>
                    </div>
                    <div class='form-group has-feedback'>
                        <input type="email" class="form-control" placeholder="Email" id="Email" name="Email" value="{{$info['Email']}}">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span class="error" id="Email_error"></span>
                    </div>

                    @endif
                    @if(isset($credit))
                    <div class="form-group has-feedback">
                        <label for="credit">Credit Card Number</label>{{$credit}}

                    </div>
                    @else
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Credit Card Number" id="credit" name="credit" maxlength="16"  />
                        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                        <span class="error" id="credit_error"></span>
                    </div>
                    @endif

                    <div class="row">
                      
                        <div class="col-xs-4">
                            <button type="submit" id="update" class="btn btn-primary btn-block btn-flat">Update</button>
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