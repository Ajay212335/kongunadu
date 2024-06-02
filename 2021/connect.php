<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: details.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kogunadu college of engineering and tech</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="connect.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <div class="navbar">
            
            <a href="#" class="logo">
                <img src="logo_of_kongunadu.png" alt="logo">
                 </a>
                 <div class="can">
                 <h2><center>KONGUNADU COLLEGE OF ENGINEERING AND TECHNOLOGY</center></h2>
                 <h3><center>(Autonomous)</center></h3>
                 <p1><center>Namakkal-trichy state Highway, Tholurpattti Post, Thottiam Taluk Trichy District,TamilNadu 621215,India</center></p1>
                 <p1><center>(Approved by AICTE, New Delhi&Affillated to Anna University,Chennai,Accredited by NBA(CSE,ECE,EEE&MECH),<br>Accredited by Naac, Recognized by UCC with 2(f)&12(B) and ISO 9001:2015 certified Institution)</center></p1>
                </div>
                
            
            </div>
    </header>
    <nav class="const">
        <span class="hamburger-btn material-symbols-rounded">menu</span>
                 
                <ul class="links">
                    <span class="close-btn material-symbols-rounded">close</span>
                    <li><a href="../home.html">Home</a></li>
                    <li><a href="../aboutus.html">About us</a></li>
                    <li><a href="../department.html">Department</a></li>
                    <li><a href="../alumni.html">Alumni</a></li>
                    <li><a href="../contact.html">Contact us</a></li>
                    <button class="login-btn"></button>
                </ul>
                
    </nav>  

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
    </div>
<div class="contain">
    <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: details.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>

    <div class="wii">
        <div class="will">
            <form action="connect.php" method="post">
                <div class="form-group">
                    <input type="email" placeholder="Enter Email:" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Login" name="login" class="btn btn-primary">
                </div>
              </form>
             <div><p>Not registered yet <a href="2012.php">Register Here</a></p></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>






