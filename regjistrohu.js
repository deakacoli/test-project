function validate(){
  var emri = document.getElementById('name').value;
  var mbiemri = document.getElementById('mbiemri').value;
  var email=document.getElementById("email").value;
  var password=document.getElementById("password").value;
  var passwordREGEX=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

  var emailREGEX=/^w+[._-]?w+@[a-z]\.[a-z]{2,3}/;
  var emriREGEX = /^[A-Z][a-z]{3,10}/;
  var mbiemriREGEX = /^[A-Z][a-z]{3,10}/;
  var emriResult = emriREGEX.test(emri);
  var mbiemriResult = mbiemriREGEX.test(mbiemri);
  var emailResult=emailREGEX.test(email);
  var passwordResult=passwordREGEX.test(password);

  if(emriResult == false)
  {
    alert('Please enter a valid name');
    return false;
  }

  if( mbiemriResult == false)
  {
    alert('Please enter a valid surname');
    return false;
  }
  if(emailResult == false)
  {
    alert('Please enter a valid email');
    return false;
  }
  if(passwordResult == false)
  {
    alert('Please enter a valid password');
    return false;
  }


  return true;
}

