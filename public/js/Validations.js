/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#Full_name").keyup(function () {

        var first = $("#Full_name").val();

        if (first.length == 0)
            $("#Fullname_error").html("Name should not be null");
        else if ($.isNumeric(first))
            $("#Fullname_error").html("Name should not be Characters");
        else if (first.length < 5)
            $("#Fullname_error").html("Name should not be less than 5 characters");
        else
            $("#Fullname_error").html("");

    });
    $("#Email").keyup(function () {
        var mailid = $("#Email").val();
        if (mailid == "")
        {
            $("#Email_error").html("enter email address");
        }
        var atpos = mailid.indexOf("@");
        var dotpos = mailid.lastIndexOf(".");
        if (atpos < 1 || atpos < 5 || dotpos < 1 || atpos + 3 > dotpos || atpos > dotpos || dotpos + 3 > mailid.length)
        {
            $("#Email_error").html("enter valid email eg:abcd@hjk.in");
            return false;
        } else
        {
            $("#Email_error").html("");
        }
    });
    $("#Mobile").keyup(function () {
       var Number = $("#Mobile").val();
       if (Number === "")
       {
           $("#Mobile_error").html("enter mobile number");
       } else if (!$.isNumeric(Number))
       {
           $("#Mobile_error").html("enter only numbers");
       } else if (Number.length < 10)
       {
           $("#Mobile_error").html("enter 10 digits");
       } else
       {
           $("#Mobile_error").html("");
       }

   });
   
   $("#Address").keyup(function () {

        var first = $("#Address").val();
        if (first === "")
        {
            $("#Address_error").html("Address field should not be empty");
            return false;
        }
        else if(first.length<30)
        {
             $("#Address_error").html("Address should be atleast 30 characters");
            return false;
        }else{
          $("#Address_error").html("");
    }
   });
//    $("#next").click(function () {
//        var fullname = ValidateFullName();
////        var Email = ValidateEmail();
////        var password = ValidatePassword();
////        var ConfirmPassword = ValidateConfirmPassword();
//        var City=ValidateCity();
//        var address=ValidateAddress();
//    });

   $("#next").click(function(event){
      
       var fullname = ValidateFullName();
        var City=ValidateCity();
       var address=ValidateAddress();
       
   if(fullname==false || City==false || address==false)
   {
       event.preventDefault();
   }
   
   });
   $("#form2").click(function(event){
      
       var Email = ValidateEmail();
        var Mobile=ValidateMobile();
     
       
   if(Email==false || Mobile==false)
   {
       event.preventDefault();
   }
   
   });
   $("#confirm").click(function(event){
       var fullname = ValidateFullName();
        var City=ValidateCity();
       var address=ValidateAddress();
       var Email = ValidateEmail();
        var Mobile=ValidateMobile();
     
       
   if(Email==false || Mobile==false || fullname==false || City==false || address==false)
   {
       event.preventDefault();
   }
   
   });
   
   
});
function ValidateFullName(){
     var first = $("#Full_name").val();

        if (first.length == 0)
        {
            $("#Fullname_error").html("Name should not be null");
             return false;
         }
        else if ($.isNumeric(first)){
            $("#Fullname_error").html("Name should not be Characters");
             return false;
         }
        else if (first.length < 5){
            $("#Fullname_error").html("Name should not be less than 5 characters");
             return false;
         }
        else{
            $("#Fullname_error").html("");
             return true;
         }
}
function ValidateEmail(){
   var mailid = $("#Email").val();
        if (mailid == "")
        {
            $("#Email_error").html("enter email address");
        }
        var atpos = mailid.indexOf("@");
        var dotpos = mailid.lastIndexOf(".");
        if (atpos < 1 || atpos < 5 || dotpos < 1 || atpos + 3 > dotpos || atpos > dotpos || dotpos + 3 > mailid.length)
        {
            $("#Email_error").html("enter valid email eg:abcd@hjk.in");
            return false;
        } else
        {
            $("#Email_error").html("");
             return true;
        }  
        
}
function ValidateMobile(){
    var Number = $("#Mobile").val();
       if (Number === "")
       {
           $("#Mobile_error").html("enter mobile number");
           return false;
       } else if (!$.isNumeric(Number))
       {
           $("#Mobile_error").html("enter only numbers");
           return false;
       } else if (Number.length < 10)
       {
           $("#Mobile_error").html("enter 10 digits");
           return false;
       } else
       {
           $("#Mobile_error").html("");
           return true;
       }
}

function ValidateCity(){
   
        var first = $("#City").val();
        if (first === "")
        {
            $("#City_error").html("city field should not be empty");
            return false;
        }
        else if($.isNumeric(first))
        {
             $("#City_error").html("city field should not be numbers");
            return false;
        }else{
          $("#City_error").html(""); 
           return true;
}
}
function ValidateAddress(){
     var first = $("#Address").val();
        if (first === "")
        {
            $("#Address_error").html("Address field should not be empty");
            return false;
        }
        else if(first.length<30)
        {
             $("#Address_error").html("Address should be atleast 30 characters");
            return false;
        }else{
          $("#Address_error").html("");
    }
}
//function submit(event){
//    alert("cdff");
//   var first = $("#Address").val();
//   if(first=="")
//   {
//       event.preventDefault();
//   }
//}
//
