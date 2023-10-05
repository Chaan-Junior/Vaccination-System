<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Care Point | FAQ </title>
    <!-- fontawasome cdn -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/faq.css">
   <link rel="stylesheet" href="../css/indexstyle.css">

    <!-- HEADER -->

<div id="header">
        <img id="logoid"src="../images/logo-image.PNG" alt="Webiste logo" height="110px" width="110px">
        <img id="logonameid" src="../images/logo-name.PNG" alt="Webiste logo Name" height="125px"> </a>

        <img id="user" src="../images/profile-new.PNG" alt="User Login Icon" height="80px" width="120px"></a><a href="#home">

        <a href="login.php"> <input id="login"  class="button1" type="button" name="login" value="USER LOGIN"> </a> 
        <a href="../admin/adminlogin.php"> <input id="signup" class="button2"type="button" name="ad_login" value="ADMIN LOGIN"> </a>

        <div id="search">
        <input type="search" name="search" value="search"> <input type="button" name="btn" value="SEARCH">
        </div>
    </div>

<!-- NAVIGATION -->

<div class="nav">
        <a href="index.php"> HOME </a>
        <a href="aboutUs.php"> ABOUT US </a>
        <a href="registrationFinal.php"> REGISTER </a>
        <div class="dropdown">
    <button class="dropbtn"><b>APPOINTMENT</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="vaccines.php">Vaccination Details </a>
      <a href="Hospital.php">Hospital Details </a>
      <a href="appointment.php">Book Appointment</a>
      <a href="PaymentPortal.php">Payment</a>
    </div>
   </div> 
        <a href="contactUs.php"> CONTACT US </a>
        <a  class="active" href="Faq.php"> FAQ </a>
        <a href="../php/display.php"> User </a>
    </div>

</head>
<body>

    <div id="faqname1">
        <img src="../images/faq-f.PNG" height="280px">
        <img id="faqname2" src="../images/faq-a.PNG" height="280px">
        <img id="faqname3" src="../images/faq-q.PNG" height="280px">
    </div>

    <div id="faqimg">
        <img src="../images/faq-image.PNG" height="30%" width="60%">
    </div>

<section>
    <h1 class="title">FAQ's</h1>

    <div class="questions-container">
        <div class="question">
            <button>
                <span>Are there side effects from vaccines?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Like any medicine, vaccines can cause mild side effects, such as a low-grade fever, or pain or redness at the injection site. Mild reactions go away within a few days on their own.Severe or long-lasting side effects are extremely rare. Vaccines are continually monitored for safety, to detect rare adverse events.</p>
        </div>

        <div class="question">
            <button>
                <span>Can a child be given more than one vaccine at a time?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Scientific evidence shows that giving several vaccines at the same time has no negative effect. Children are exposed to several hundred foreign substances that trigger an immune response every day. The simple act of eating food introduces new germs into the body, and numerous bacteria live in the mouth and nose.
            When a combined vaccination is possible (e.g. for diphtheria, pertussis and tetanus), this means fewer injections and reduces discomfort for the child.</p>
        </div>

        <div class="question">
            <button>
                <span>Is there a link between vaccines and autism?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>There is  no evidence of any link between vaccines and autism or autistic disorders. This has been demonstrated in many studies, conducted across very large populations.The 1998 study which raised concerns about a possible link between measles-mumps-rubella (MMR) vaccine and autism was later found to be seriously flawed and fraudulent. </p>
        </div>

        
    </div>
</section>

<!-- FOOTER -->

    <div id="footer">   
        <img class="image1" src="../images/footer-img-1.PNG" alt="Webiste logo Name" height="125px">
        <img class="image2" src="../images/footer-img-2.PNG" alt="Webiste logo Name" height="125px">
        
        <a href="https://www.facebook.com/" target="blank"> <img class="sm1" src="../images/facebook.PNG"> </a>
        <a href="https://www.gmail.com/" target="blank"> <img class="sm2" src="../images/gmail.PNG"> </a>
        <a href="https://twitter.com/" target="blank"> <img class="sm3" src="../images/twitter.PNG"> </a>
        <a href="https://www.youtube.com/" target="blank"> <img class="sm4" src="../images/youtube.PNG"> </a>
        <a href="https://lk.linkedin.com/" target="blank"> <img class="sm5" src="../images/linkedin.PNG"> </a>

        <h4> © ALL RIGHTS RESERVED BY CARE POINT - 2022</h4>
    </div>


<!-- external js-->
<script src="../js/main.js"></script>
</body>
</html>