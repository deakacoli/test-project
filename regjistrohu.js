 function validateForm() {
   
        var emri = document.forms["form"]["emri"].value;
        var mbiemri = document.forms["form"]["mbiemri"].value;
        var email = document.forms["form"]["email"].value;
        var fjalkalimi = document.forms["form"]["fjalkalimi"].value;

                    
            if (emri === "" || mbiemri === "" || email === "" || fjalkalimi === "") {
                alert("Please fill all fields!");
                return false;
            }
                  
            if (emri == "") {
                 alert( "Please enter a valid name!");
                    return false;
            }
                     
             if (mbiemri == "") {
                alert( "Please enter a valid surname!");
                    return false;
            }
                     
            if (email == "") {
                alert( "Please enter a valid email!");
                    return false;
            }
                   
            if (fjalkalimi == "") {
                 alert( "Please enter a valid password!");
                       return false;
            }
        
        return true;
}             

     