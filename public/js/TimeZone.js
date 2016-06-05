

$(document).ready(function () {

    $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "sPaginationType": "full_numbers",
        "ajax": "timezone",
     
        "columns": [
            {"title": "Id","data": "Id"},
            {"title": "Name","data": "Name"},
            {"title": "Offset","data": "Offset"},
             {"title": "Time","data": "Time"},
           
            {    "title":"Operation",
                "bSortable": false, "aTargets": [0],
                "targets": -1,
                "data": null,
                "render": function (data, type, full, meta) {
                    return "<a href='/edit/" + data.Id + "'><button class='edit  glyphicon glyphicon-edit'>EDIT</button></a>" + " " +
                            "<a href='/delete/" + data.Id + "'><button class='delete  glyphicon glyphicon-trash' value='" + data.Id + "'>DELETE</button></a>" + " " +
                            "<a href='/view/" + data.Id + "'><button class='view  glyphicon glyphicon-eye-open' value='" + JSON.stringify(data) + "'>VIEW</a></button>"

                }
            }
        ]


    });
    var table = $('#example').DataTable();
    $('#example tbody').on('click', '.edit', function () {
        var data = table.row($(this).parents('tr')).data();

        window.location.href = '/edit/' + data["Id"];
    });
    $('#example tbody').on('click', '.delete', function () {
        var data = table.row($(this).parents('tr')).data();

        window.location.href = '/delete/' + data["Id"];
    });
    $('#example tbody').on('click', '.view', function () {
        var data = table.row($(this).parents('tr')).data();

        window.location.href = '/view/' + data["Id"];
    });


});

