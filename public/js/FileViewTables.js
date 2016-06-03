

$(document).ready(function () {
     var Data = $("#files").val();
  
    $('#FileView').DataTable({
        data: JSON.parse(Data),
        columns: [
            {title: "Id", data: "Id"},
            {title: "File", data: "File"},
            {title: "Type", data: "Type"},
            {title: "Size", data: "Size"},
        ]

    });
  

   });
       
          