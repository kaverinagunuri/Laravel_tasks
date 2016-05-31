 @extends('layouts.app')
@section('content')  
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
@endsection
   
  
