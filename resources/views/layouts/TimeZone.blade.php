<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('/plugins/iCheck/square/blue.css')}}">
        <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

        <script>
var Data = <?php echo ($data); ?>;

$(document).ready(function () {

    $('#example').DataTable({
        data: Data,
        columns: [
            {title: "Id", data: "Id"},
            {title: "Name", data: "Name"},
            {title: "Offset", data: "Offset"}



        ]

    });
    var table = $('#example').DataTable();
    //                editor = new $.fn.dataTable.Editor( {
    //      data:Data,
    //        "table": "#example",
    //        "fields": [ {
    //                "label": "Id:",
    //                "name": "Id"
    //            }, {
    //                "label": "Name:",
    //                "name": "Name"
    //            }, {
    //                "label": "Offset:",
    //                "name": "Offset"
    //            }
    //        ]
    //    } );
    // 
    //               // var table = $('#example').DataTable();
    //                $('#example').on('click', 'a.editor_edit', function (e) {
    //        e.preventDefault();
    // 
    //        editor.edit( $(this).closest('tr'), {
    //            title: 'Edit record',
    //            buttons: 'Update'
    //        } );
    //    } );
    //$('#example').on('click', 'a.editor_remove', function (e) {
    //        e.preventDefault();
    // 
    //        editor.remove( $(this).closest('tr'), {
    //            title: 'Delete record',
    //            message: 'Are you sure you wish to remove this record?',
    //            buttons: 'Delete'
    //        } );
    //    } );
    //$('#example').DataTable( {
    //       data:Data,
    //        columns: [
    //            { data: null, render: function ( data, type, row ) {
    //                // Combine the first and last names into a single table field
    //                return data.first_name+' '+data.last_name;
    //            } },
    //            { data: "Id" },
    //            { data: "Name" },
    //           
    //            { data: "Offset", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) },
    //            {
    //                data: null,
    //                className: "center",
    //                defaultContent: '<a href="" class="editor_edit">Edit</a> / <a href="" class="editor_remove">Delete</a>'
    //            }
    //        ]
    //    } );
});


        </script>


    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Admin</b>LTE</a>

            </div>

            <div class="login-box-body">
                <p class="login-box-msg">Files Uploaded</p>

                <form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <!--             <tr>
                        
                        <th>Id.</th>
                        <th>Name</th>
                        <th>Offset</th>
                        <th>Edit / Delete</th>
                    </tr>-->
                    </table>
                    <div class='col-xs-4'>
                        <a href="{{URL::route('loggedin')}}"><input type="button" class="btn btn-primary btn-block btn-flat" value="BACK"></a>
                    </div>
                </form>   


                <!-- /.social-auth-links -->

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.0 -->

    </body>
</html>