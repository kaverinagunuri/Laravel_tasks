   
@extends('layouts.app')
@section('content')    

<form class="form-group"  id="UserProfile"  >
    <table id="ViewTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    </table>
    <input type="hidden" id="view" value="{{$view}}"/>
</form>  

@endsection
@section('script')
       <script type="text/javascript" src="{{asset('/js/DataTable-View.js')}}"></script>
 @endsection