@extends('layouts.app')
@section('content')

        <script>
 
</script>
<input type="hidden" id="timeData" value="{{$data}}"/>
<table id="timeZone" class="table table-striped table-bordered" cellspacing="0" width="100%">
    

</table>

@endsection

@section('script')
<script type="text/javascript" src="{{asset('/js/TimeZone.js')}}"></script>
@endsection





















