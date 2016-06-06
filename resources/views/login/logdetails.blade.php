@extends('layouts.app')
@section('content')  
<div class="box box-success">
    <div class="box-header">
        <i class="glyphicon glyphicon-home"></i>

        <h3 class="box-title">Address</h3>
    </div>
    <div class="box-body chat" id="chat-box">

        <button class="btn btn-info btn-sm" onclick="getLocation()">User Location</button>

        <p id="demo"></p>
        <div class="box-body">
            <div id="googleMap" style="height:380px;"></div>
        </div>
  
        <div class="box-footer">
        </div>
    </div>
</div>
<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-comments-o"></i>
        <h3 class="box-title">Log Details</h3>
    </div>
    <table id="logtable" class="table table-striped table-bordered" cellspacing="0">
    </table>
    <input type="hidden" id="logs" value="{{$logs}}"/>
</div>
@stop
@section('script')
<script type="text/javascript" src="{{asset('/js/logs.js')}}"></script>
@endsection