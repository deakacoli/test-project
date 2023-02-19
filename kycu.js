
let usernameinput = document.getElementById("username");
let passwordinput = document.getElementById("password");

const defaultuser = "deaanda";
const defaultpw = "deaanda12345";

function isEmpty(str) {
     return !str.trim().length;
}

function validateForm(){
    if(isEmpty(usernameinput.value) || isEmpty(passwordinput.value)){
        alert("All fields should have values!");
    }
    else if (usernameinput.value == defaultuser && passwordinput.value == defaultpw){
        alert("Login success");
    }
    else{
        alert("Wrong username or password");    
    }
}