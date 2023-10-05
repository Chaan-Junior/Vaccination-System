
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Care Point | Register </title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../css/RegistrationFinal.css">


<?php
require("header.php");
?>

<br>
  <script>
    function validateForm() {
      let firstName = document.forms["myForm"]["fname"].value;
      let lastName = document.forms["myForm"]["lname"].value;
      let nic = document.forms["myForm"]["nic"].value;
      let dob = document.forms["myForm"]["dob"].value;
      let number = document.forms["myForm"]["number"].value;

      if (firstName == "") {
        alert("*First Name must be filled out");
        return false;
      }

      if (lastName == "") {
        alert("*Last Name must be filled out");
        return false;
      }

      if (nic == "") {
        alert("*NIC must be filled out");
        return false;
      }
      if (!nic = /^\d{10}(V)$/ || !nic = /^\d{12}$/)
      {
        alert("*Invalid NIC Number");
        return false;
      }
      if (dob == "") {
        alert("*Date Of Birth must be filled out");
        return false;
      }
      if (number == "") {
        alert("*Number must be filled out");
        return false;
      }
      if (!number = /^\d{10}$/)
      {
        alert("*Invalid Phone Number");
        return false;
      }

      if (email == "") {
        alert("*Email must be filled out");
        return false;
      }
      if (!email = /^([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9]+)\.([a-zA-Z]{2,10})(\.[a-zA-Z]{2,8})?$/)
      {
        alert("*Invalid Email");
        return false;
      }
    }
    </script>
</head>
<body>
  <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
    
<br>
<form method="post"  onsubmit="return validateForm()" id="myform" action="../php/Registration.php">
<div class="title"> REGISTRATION FORM </div>

<div class="form">
  <div class="input_field">
  <lable> First Name </lable> <input type = "text" class="input" placeholder="First name" name="firstname" required>

  <lable> Last Name </lable> <input type = "text" class="input" placeholder="Last name" name="lastname" required>

  <lable> Gender </lable>
  <div class="custom_select" >
  <select name="gender">
       <option value = "">Select</option>
       <option value = "Male">Male</option>
       <option value = "Female">Female</option>
  </select>

  <lable> Date of Birth </lable> <input type = "date" class="input" name="birthday" required>

  <lable> NIC Number </lable> <input type = "text" class="input" placeholder="NIC" name="NIC" required>

  <lable> Address </lable>
  <textarea class = "textarea" placeholder="Address" name="address" required></textarea>

  <lable> Phone Number </lable>
  <input type = "text" class="input" placeholder="Phone number" name="phonenum" required>

  <lable> Email </lable>
  <input type = "text" class="input" placeholder="Email" name="email" required>

   <br><br>
            Username:<br>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>
            <br><br>
            Password:<br>
            <input type="password" name="pword" id="pwd" placeholder="Enter password" required>
            <br><br>
            Confirm password:<br>
            <input type="password" name="repeat" id="repwd" placeholder="Repeat password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required>
            <br><br>

  <lable> Do you have any other diseases </lable>
  <input type = "radio" name = "choice">YES
  <input type = "radio" name = "choice">NO
  <br>
  <span class = "checkmark"></span>
  <br>
  <lable> If "YES" Please mention </lable>
  <textarea class = "textarea"></textarea>

  <p>I confirm that the above given informations are correct</p> 
  <input type = "checkbox" required>
  <span class = "checkmark"></span>

  <input id="submit" class="submit" type="submit" value="Submit" name = "submit"></br></br>
</div>
</div>
</div>
</form>

<br>

<?php
require("footer.php");
?>


</body>
</html>