<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kogunadu college of engineering and tech</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="details.css">
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
                    <li><a href="../../home.html">Home</a></li>
                    <li><a href="../../aboutus.html">About us</a></li>
                    <li><a href="../../department.html">Department</a></li>
                    <li><a href="../../alumni.html">Alumni</a></li>
                    <li><a href="../../contact.html">Contact us</a></li>
                    <button class="login-btn"></button>
                </ul>
    </nav>
    <div class="container">
        <center><h1>Alumni details</h1></center>
        
    </div>
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
    </div>
    <div class="contain">
        <?php
        if ($_POST["submit"]) {
           $register = $_POST["register"];
           $fullname = $_POST["fullname"];
           $phone = $_POST["phone"];
           $email = $_POST["email"];
           $date = $_POST["date"];
           $gender = $_POST["gender"];
           $age = $_POST["age"];
           $status = $_POST["status"];
           
           
           
            
            $query = "INSERT INTO userss VALUES ( '$register','$fullname', '$phone', '$email', '$date', '$gender', '$age','$status')";
            $data = mysqli_query($conn,$query);

            if($data){
                echo "Data Inserted into database";
            }
            else{
                echo "failed";
            }
          

        }
        ?>

    

    <div class="wii">
        <div class="will">
            <form action="index.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="register" placeholder="Register Number:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Full name:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Mobile Number:">
                </div>
                
                <div class="form-group">
                    <input type="emamil" class="form-control" name="email" placeholder="Email ID:">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="date" placeholder="Date Of Birth:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="gender" placeholder="Company Name:">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="age" placeholder="Working:">
    </div>
    <div class="form-group">
                    <input type="text" class="form-control" name="status" placeholder="Status:">
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </div>
            </form>
            <div>
            <div><p>HOME Here<a href="2012.php"> Home</a></p></div>
          </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>


