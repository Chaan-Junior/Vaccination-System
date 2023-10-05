
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Care Point | Appointment </title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../css/app_style.css">
  <script type="text/javascript" src="../js/appointment.js"></script>
  
 
 <?php
require("header.php");
?>

</head>

<body>
<br>
<script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>

	<div id="container">
    <br>
    <form method="post" action="../php/Appointment.php">
      <div id="body_header">
    
      <h2>Appointment Request Form</h2>
      <p>Make your appointments more easier</p>

    </div>
      <fieldset>
        <legend>Your basic details</legend>
        <label for="name">Full Name*:</label>
        <input type="text" id="name" name="user_name" placeholder="Enter your Full name" required>

        <label for="mail">Email*:</label>
        <input type="email" id="mail" name="user_email" placeholder="abc@xyz.com" required>

        <label for="tel">Contact Num:</label>
        <input type="tel" id="tel" placeholder="Include country code" name="user_num">

         <label for="hospital">Nearest Hospital*:</label>
        <select id="skype_name" name="Hos_name" placeholder="Nearest to your location" required>
          <option value="Nawaloka">NAWALOKA HOSPITAL</option>
          <option value="Asiri">ASIRI MEDICAL HOSPITAL</option>
          <option value="Durdans">DURDANS HOSPITAL</option>
          <option value="Lanka">LANKA HOSPITAL</option>
          <option value="Royal">ROYAL HOSPITAL</option>
          <option value="Ridgeway">LADY RIDGEWAY HOSPITAL</option>
        </select>


      </fieldset>

      <fieldset>
        <legend>Appointment Details</legend>
        <label for="appointment_for">Type of Vaccine*:</label>
        <select id="appointment_for" name="appointment_for" required>
          <option value="Pfizer">Pfizer</option>
          <option value="Sinoform">Influenza</option>
          <option value="Moderna">Polio</option>
          <option value="Moderna">Chickenpox</option>
          <option value="AstraZeneca">Rubella</option>
          <option value="Moderna">Tetanus</option>
          <option value="Moderna">Moderna</option>
          <option value="Moderna">Hepatitis B</option>
          <option value="Moderna">Sinopharm</option>
 
        </select>
        <label for="appointment_description">Appointment Description:</label>
        <textarea id="appointment_description" name="appointment_description" placeholder="Mention here if you have any other diseases"></textarea>
        <label for="date">Date*:</label>
        <input type="date" name="date" value="" required></input>
        <br>
        <label for="time">Time*:</label>
        <input type="time" name="time" value="" required></input>
        <br>
        
      </fieldset>
      <input id="submit" class="submit" type="submit" onclick="showalert();" value="Book the Appointment" name ="submit"><br>
      <button class="submit"><a href="../php/DisplayCrud.php">  Appointment Details </a></button>
      <br>
    </form>
  </div>

	<!-- FOOTER -->

  <?php
require("footer.php");
?>


</body>
</html>