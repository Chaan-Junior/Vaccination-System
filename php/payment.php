<?php

    require("config.php");

    if(isset($_POST['submit']))
    {
        $fullname = $_POST['name'];
        $Email = $_POST['email'];
        $Address = $_POST['address'];
        $zipcode = $_POST['zipcode'];
        $cardname = $_POST['cardname'];
        $cardno = $_POST['cardno'];
        $exmonth = $_POST['expiremonth'];
        $exyear = $_POST['expireyear'];
        $cvv = $_POST['cvv'];

          $query = " INSERT INTO paymentportal(Fullname,email,Useraddress,zipcode,cardname,cardno,expiremonth,expireyear,cvv) 
          values('$fullname','$Email','$Address','$zipcode','$cardname','$cardno','$exmonth','$exyear','$cvv')";

            if($conn->query($query))
            {
               header('location: ../views/index.php');
            }
            else
            {
                echo 'Please Check Your Query ';
            }              
    }
    $conn ->close();
  
?>