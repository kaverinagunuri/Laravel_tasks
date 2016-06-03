

$(document).ready(function () {
     var Data = $("#view").val();
  
    $('#ViewTable').DataTable({
        data: JSON.parse(Data),
        columns: [
            {title: "Id", data: "Id"},
            {title: "Name", data: "Name"},
            {title: "Offset", data: "Offset"},
            
        ]

    });
  

   });
       
          /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


