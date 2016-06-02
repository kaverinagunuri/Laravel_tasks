   
    @extends('layouts.app')
@section('content')    
<!-- 
        <script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>-->

<script>

        </script>

 
           
                <form class="form-group"  id="UserProfile"  >
                    <table id="FileView" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    </table>
                    <input type="hidden" id="files" value="{{$data}}"/>
                </form>  

   @endsection
