function validateForm() {
   
    var email = document.forms["form"]["email"].value;
    var fjalkalimi = document.forms["form"]["fjalkalimi"].value;
    
   
    
     if (email == "") {
         alert( "Please enter a valid email address!");
       return false;
     }
   
     if (fjalkalimi == "") {
         alert( "Please enter a valid password!");
       return false;
     }
    }