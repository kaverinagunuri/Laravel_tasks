

$(document).ready(function () {
     var Data = $("#operations").val();
  
    $('#ViewTable').DataTable({
        data: JSON.parse(Data),
        columns: [
            {title: "Id", data: "Id"},
            {title: "Name", data: "Name"},
            {title: "Offset", data: "Offset"},
            {title:"Time",data:"Time"},
            
        ]

    });
  

   });
   
