
var error = document.getElementById("error"); 
var passwordRegex = "^(?=.*[0-9])"+"(?=.*[a-z])(?=.*[A-Z])"+ "(?=.*[@#$%^&+=])"+ "(?=\\S+$).{8,20}$";
 var emailRegex = "^(?=.{1,64}@)[A-Za-z0-9_-]+(\\.[A-Za-z0-9_-]+)*@" + "[^-][A-Za-z0-9-]+(\\.[A-Za-z0-9-]+)*(\\.[A-Za-z]{2,})$";


if (emailVal.match(emailRegex)){
        error.style.display='none';
    }
    if(passwordVal.match(passwordRegex)){
        error.style.display='none';
    }
    if(emailVal !== emailConfirmationVal){
        error.textContent = "Email-at nuk perputhen";
        error.style.display = 'block';
    } else if(!emailVal.match(emailRegex)){    
        error.textContent = "Email jo-valid!";
        error.style.display = 'block';
    }else if(passwordVal !== passwordConfirmationVal){
        error.textContent = "Password-at nuk perputhen";
        error.style.display='block';    
    } else if(!passwordVal.match(passwordRegex)){
        error.textContent = "Password duhet te permbaje se paku 1 lowercase,uppercase,numerik,special karakter dhe duhet te jete i gjate 8-20 karaktera";
        error.style.display = 'block';
    }