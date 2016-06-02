 var Data = $("#logs").val();
console.log(Data);
$(document).ready(function () {
    alert("hai");
           $('#logtable').DataTable({
           
            
               data: Data,
               columns: [
                   {title: "UserAgent", data: "UserAgent"},
                   {title: "IpAddress", data: "IpAddress"},
                   {title: "BrowserName", data: "BrowserName"},
                   {title: "Version", data: "Version"},
                   {title: "Platform", data: "Platform"},
                   {title: "Last-Logged In", data: "updated_at"},
               ]

           });
              });
     
         


