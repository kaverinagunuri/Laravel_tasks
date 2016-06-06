<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Registration Page</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
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
            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="{{URL::route('submitform')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Phone Number" id="Mobile" name="Mobile" size="10">
                        <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                        <span class="error" id="Mobile_error"></span>
                    </div>
                    <div class='form-group has-feedback'>
                        <input type="email" class="form-control" placeholder="Email" id="Email" name="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span class="error" id="Email_error"></span>
                    </div>
                    <div class="row">
                        <div class='col-xs-4'>
                            <a href="{{URL::route('LteRegister')}}"><input type="button" class="btn btn-primary btn-block btn-flat" value="BACK"></a>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat float" id="form2">NEXT</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
