@extends('layouts.app')
@section('content')  
<section>
@if(isset($message))
<div class="alert alert-info">{{$message}}</div>
@endif
@if ( session()->has('update') )
<div class="alert alert-info">{{ session()->get('update') }}</div>
@endif

<div class="register-box-body">
    <h2>Update Profile</h2>

    <form action="{{URL::route('onupdate')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        @if(isset($info))
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name" id="Full_name" name="Full_name" value="{{$info['FullName']}}"> 
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
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Credit Card Number" id="credit" name="credit" maxlength="16" value=""  />
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
@endsection 
</section>