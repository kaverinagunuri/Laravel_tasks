$(document).ready(function () {
     var Data = $("#logs").val();
           $('#logtable').DataTable({
           
            
           data: JSON.parse(Data),
               columns: [
                   {title: "UserAgent", data: "UserAgent"},
                   {title: "IpAddress", data: "IpAddress"},
                   {title: "BrowserName", data: "BrowserName"},
                   {title: "Version", data: "Version"},
                   {title: "Platform", data: "Platform"},
                   {title: "Last-Logged In", data: "updated_at"}
               ]

           });
              });
     
//         


