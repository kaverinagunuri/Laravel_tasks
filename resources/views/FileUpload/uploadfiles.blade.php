   
    @extends('layouts.app')
@section('content')    
<!-- 
        <script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>-->

<script>
var Data = <?php echo ($data); ?>;

$(document).ready(function () {
  
    $('#example').DataTable({
        data: Data,
        columns: [
            {title: "Id", data: "Id"},
            {title: "File", data: "File"},
            {title: "Type", data: "Type"},
            {title: "Size", data: "Size"},
        ]

    });
    var table = $('#example').DataTable();

});
        </script>

 
           
                <form class="form-group"  id="UserProfile"  >
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    </table>
                   
                </form>  

   @endsection
