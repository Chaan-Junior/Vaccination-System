<?php

    require("config.php");

    if(isset($_POST['submit']))
    {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            $NIC = $_POST['NIC'];
            $address = $_POST['address'];
            $phonenum = $_POST['phonenum'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $pword = $_POST['pword'];

            $query = " INSERT INTO  login (username,password) values('$username','$pword')";
            
            if($conn->query($query))
            {
               header('location: ../views/index.php');
            }
            else
            {
                echo 'Please Check Your Query ';
            }

            $query = " INSERT INTO user (First_name,Last_name,Gender,DOB,NIC,address,PhoneNo,Email) VALUES
                ('$firstname','$lastname','$gender','$birthday','$NIC','$address','$phonenum','$email')";
            if($conn->query($query))
            {
                echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
            
    }
    $conn -> close();
  
?>