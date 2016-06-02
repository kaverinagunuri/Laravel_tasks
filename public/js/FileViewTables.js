var Data = $("#files").val();


  
    $('#FileView').DataTable({
        data: Data,
        columns: [
            {title: "Id", data: "Id"},
            {title: "File", data: "File"},
            {title: "Type", data: "Type"},
            {title: "Size", data: "Size"},
        ]

    });
    var table = $('#FileView').DataTable();

