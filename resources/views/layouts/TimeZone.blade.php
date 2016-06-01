@extends('layouts.app')
@section('content')

        <script>
 var Data = <?php echo ($data); ?>;

$(document).ready(function () {
   

    $('#example').DataTable({
        data: Data,
        columns: [
            {title: "Id", data: "Id"},
            {title: "Name", data: "Name"},
            { title:"Offset",data: "Offset"},
              
            {title:"Edit/Delete",
                    data: null,
                    className: "center",
                    defaultContent: '<a  class="edit">Edit</a> / <a class="delete">Delete</a>'},


        ]

    });
     var table=$('#example').DataTable();
     $('#example tbody').on( 'click', '.edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
 
      window.location.href = '/edit/' + data["Id"];
    } );
     $('#example tbody').on( 'click', '.delete', function () {
        var data = table.row( $(this).parents('tr') ).data();
    
      window.location.href = '/delete/' + data["Id"];
    } );
     $('#example tbody').on( 'click', '.view', function () {
        var data = table.row( $(this).parents('tr') ).data();
    
      window.location.href = '/view/' + data["Id"];
    } );

    
  });

</script>

<table id="timeZone" class="table table-striped table-bordered" cellspacing="0" width="100%">


</table>

@endsection























