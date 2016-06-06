@extends('layouts.app')
@section('content')  
<section>
    <div>
        @if ( session()->has('password') )
        <div class="alert alert-info">{{ session()->get('password') }}</div>
        @endif
    </div>
    <h2>Change Password</h2>
    <form action="{{URL::route('password')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$Email['Email']}}" readonly="">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="Password" id="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span class="error" id="PasswordError"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Confirm Password"  id="Confirm"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span class="error" id="confirmError"></span>
        </div>
        <div class="row">

            <div class="col-xs-4">
                <button type="submit" name="change" id="change" class="btn btn-primary btn-block btn-flat">Change</button>
            </div>
        </div>
    </form>
    @endsection
</section>  

