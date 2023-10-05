<?php
  require("config.php");
?>

<!DOCTYPE html>
<html>
<head>
        <title>Care Point | Login </title>
        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
        <script type="text/javascript" src="../js/login.js"></script>
</head>
<body>
        <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
        <div class="container">
                <section class="login-box">
                <h1>ADMIN LOGIN PANEL</h1>
                <form method="post" action="../admin/adminMain.php">
                        <p>Username</p>
                        <input type="text" placeholder="Enter Username" id="admin_name" name="username">
                        <p>Password</p>
                        <input type="password" placeholder="Enter Password" id="password" name="admin_password"><br>
                        <input type="submit" class="submit" value="Sign In"><br>
                        <br>
                        <a href="RegistrationFinal.php">Create new account</a>
                </form>
                </section>
        </div>

<?php
        if(isset($_POST['Sign In']))
        {
           $query = "SELECT * FROM 'admin_login' WHERE 'admin_name' = '$_POST[Admin_Name]' AND 'admin_password' = '$_POST[Admin_Password]'";
           $mysqli_query($conn,$query);
           if(mysqli_num_row($result)==1)
           {
             session_start();
             $_SESSION['AdminLoginId']= $_POST['Admin_Name'];
             header("location: ../admin/adminMain.php");
           }
           else
           {
                echo "<script> alert('Incorrect Password'); </script>";
           }
        }

?>

</body>
</html>