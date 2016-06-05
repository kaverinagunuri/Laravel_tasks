@extends('layouts.app')
@section('content')


<div class="register-box-body">
    <p class="login-box-msg">view profile</p>
    <form  method="post" action=''>
        <div class="form-group has-feedback">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <label>FullName </label>
            <input type="text"  class="form-control" name="FullName" disabled="" value='{{$temp['FullName']}}' id="fullname">

        </div>
        <div class="form-group has-feedback">
            <label>Address</label>
            <textarea  class="form-control "name="Address" disabled="" value="" >{{$temp['Address']}}</textarea>
        </div>
        <div class="form-group has-feedback">
            <label>City</label>
            <input type="text"  class="form-control" disabled="" name="City" value='{{$temp['City']}}' id="city">
        </div>
        <div class="form-group has-feedback">
            <label>State</label>
            <input type="text" class="form-control"
                   value='{{$temp['State']}}' disabled="" name="State"selected >

        </div>
        <div class="form-group has-feedback">
            <label>PhoneNumber</label>
            <input type="tel"  name="Phonenumber" disabled="" class="form-control" value='{{$temp['Mobile']}}'>
        </div>
        <div class="form-group has-feedback">
            <label>Email</label>
            <input type="email" name="Email" disabled="" value='{{$temp['Email']}}' class="form-control" >
        </div>
        <div class="form-group has-feedback">
            <label>CreditCardNumber</label>
            <input type="text" name="CreditCard" disabled  value="{{$results}}" class="form-control" >
        </div>

    </form>





    @endsection   
