

$(document).ready(function () {

    var Data = $("#timeData").val();
    $('#timeZone').DataTable({
        data: JSON.parse(Data),
        columns: [
            {title: "Id", data: "Id"},
            {title: "Name", data: "Name"},
            {title: "Offset", data: "Offset"},
            {title: "Operations",
                data: null,
                className: "center",
                defaultContent: '<button  class="view glyphicon glyphicon-eye-open"></button> /<button  class="edit glyphicon glyphicon-edit"></button> / <button class="delete glyphicon glyphicon-trash"></button>'},
        ]

    });
    var table = $('#timeZone').DataTable();
    $('#timeZone tbody').on('click', '.edit', function () {
        var data = table.row($(this).parents('tr')).data();

        window.location.href = '/edit/' + data["Id"];
    });
    $('#timeZone tbody').on('click', '.delete', function () {
        var data = table.row($(this).parents('tr')).data();

        window.location.href = '/delete/' + data["Id"];
    });
    $('#timeZone tbody').on('click', '.view', function () {
        var data = table.row($(this).parents('tr')).data();

        window.location.href = '/view/' + data["Id"];
    });


});

