   
@extends('layouts.app')
@section('content')    
<section>
<form class="form-group"  id="UserProfile"  >
    <table id="FileView" class="table table-striped table-bordered" cellspacing="0" width="100%">
    </table>
    <input type="hidden" id="files" value="{{$data}}"/>
</form>  

@endsection
@section('script')
<script type="text/javascript" src="{{asset('/js/FileViewTables.js')}}"></script>
@endsection
</section>