@extends('layouts.app')
@section('content') 
<section>
@if ( session()->has('delete') )
<div class="alert alert-info">{{ session()->get('delete') }}</div>
@endif
@if ( session()->has('edit') )
<div class="alert alert-info">{{ session()->get('edit') }}</div>
@endif

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
</table>  

@endsection
@section('script')
<script src="{{asset('js/TimeZone.js')}}"></script>
@endsection
</section>