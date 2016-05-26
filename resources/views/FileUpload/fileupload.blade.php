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
   
  <div class="login-box-body">
    <p class="login-box-msg">File Upload</p>

    <form action="{{URL::route('upload')}}" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          
    <div>
        <label>Upload Image File:</label>
        <input name="userImage" id="userImage" type="file" class="demoInputBox" />
    </div>
    <div><input type="submit" id="btnSubmit" value="Submit" class="btnSubmit" /></div>
    <div id="progress-div"><div id="progress-bar"></div></div>
    <div id="targetLayer"></div>
</form>
<div id="loader-icon" style="display:none;"><img src="LoaderIcon.gif" /></div>

    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>

</body>
<script>
    $(document).ready(function() { 
    $('#uploadForm').submit(function(e) {	
        if($('#userImage').val()) {
            e.preventDefault();
            $('#loader-icon').show();
            $(this).ajaxSubmit({ 
                target:   '#targetLayer', 
                beforeSubmit: function() {
                    $("#progress-bar").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){	
                    $("#progress-bar").width(percentComplete + '%');
                    $("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
                },
                success:function (){
                    $('#loader-icon').hide();
                },
                resetForm: true 
            }); 
            return false; 
        }
    });
});

    
    </script>
    
</html>
