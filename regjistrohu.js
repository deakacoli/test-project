var nameRegex=/^[A_Z][a-z]{2,10}/;
var surnameRegex=/^[A_Z][a-z]{2,10}/;
var emailRegex=/^w+[._-]?\w+@[a-z]\.[a-z]{2,3}/;
var passwordRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

var registerButton=document.getElementById("register");
var nameMsg = document.getElementById("namemessge");
var surnameMsg = document.getElementById("surnamemessge");
var emailMsg = document.getElementById("emailmessge");
var passwordMsg = document.getElementById("passwordmessge");

registerButton.addEventListener("click" function(event){
  var name=document.getElementById("name").value;
  var surname=document.getElementById("surname").value;
  var email=document.getElementById("email").value;
  var password=document.getElementById("password").value;

  if(name==""){
    nameMsg.innerText="Plotesoni Emrin!";
    event.preventDefault();
  }else{
    if(nameRegex.test(name)){
      alert("Emri"+ name)
    }else{
      nameMsg.innerText="Emri jovalid!"
      event.preventDefault();
    }
  }
  if(surname==""){
    nameMsg.innerText="Plotesoni Mbiemrin!";
    event.preventDefault();
  }else{
    if(surnameRegex.test(surname)){
      alert("Mbiemri"+ surname)
    }else{
      nameMsg.innerText="Mbiemri jovalid!"
      event.preventDefault();
    }
  }
  if(surname==""){
    surnameMsg.innerText="Plotesoni Mbiemrin!";
    event.preventDefault();
  }else{
    if(surnameRegex.test(surname)){
      alert("Mbiemri"+ surname)
    }else{
      surnameMsg.innerText="Mbiemri jovalid!"
      event.preventDefault();
    }
  }
  if(password==""){
    surnameMsg.innerText="Caktoni nje Password!";
    event.preventDefault();
  }else{
    if(passwordRegex.test(password)){
      alert("Passwordi"+ password)
    }else{
      surnameMsg.innerText="Fjalekalimi jovalid!"
      event.preventDefault();
    }
  }


}
)

