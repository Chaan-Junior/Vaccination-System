
function validate(){
  var name = document.getElementById("fullname").value;
  var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
  var message = document.getElementById("question").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Name should be valid and more than 5 letters";
    error_message.innerHTML = text;
    return false;
  }
   if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }

  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
 
  if(message.length <= 70){
    text = "Please Enter More Than 70 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}