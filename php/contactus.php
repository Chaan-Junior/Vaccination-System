
<?php

    require("config.php");

    
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $question = $_POST['question'];

            $query = " INSERT INTO contact_us(fullname,email,phone,question) values('$fullname','$email','$phone','$question')";

            if($conn->query($query))
            {
              echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
        
    
    

if ( isset ( $_POST['submit'])){


echo "Full name :". $_POST['fullname']."<br>";

echo "E-mail :". $_POST['email']."<br>";

echo "Phone no :". $_POST['phone']."<br>";

echo "Question :". $_POST['question']. "<br>";
}
    $conn ->close();
  
?>


















