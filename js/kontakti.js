function validateFormKontakti() {

    var emri = document.forms["myForm"]["name"].value;
    var mbiemri = document.forms["myForm"]["lastname"].value;
    var emaili = document.forms["myForm"]["email"].value;
    var nrtelefonit = document.forms["myForm"]["number"].value;
    var mesazhi = document.forms["myForm"]["message"].value;

  
   
    
    if (emri == "") {
        alert( "Emri nuk mund të jetë i zbrazët!");
      return false;
    }
    
    if (mbiemri == "") {
        alert( "Mbiemri nuk mund të jetë i zbrazët!");
      return false;
    }
    
    if (emaili == "") {
        alert( "Emaili nuk mund të jetë i zbrazët!");
      return false;
    }
  
    if (nrtelefonit == "") {
        alert( "Numri Telefonit nuk mund të jetë i zbrazët!");
      return false;
    }

    if (mesazhi == "") {
      alert( "Mesazhi nuk mund të jetë i zbrazët!");
    return false;
  }
  
}
