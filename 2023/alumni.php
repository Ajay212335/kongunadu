

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
                    <li><a href="../../home.html">Home</a></li>
                    <li><a href="../../aboutus.html">About us</a></li>
                    <li><a href="../../department.html">Department</a></li>
                    <li><a href="../../alumni.html">Alumni</a></li>
                    <li><a href="../../contact.html">Contact us</a></li>
                    <button class="login-btn"></button>
                </ul>
    </nav>

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
    </div>
    <div class="contain">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
               
                
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>

    
<br><br><br><br>
    <div class="wii">
        <div class="will">
            <form action="alumni.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
                </div>
                <div class="form-group">
                    <input type="emamil" class="form-control" name="email" placeholder="Email:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </div>
            </form>
            <div>
            <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
          </div>
        </div>
        </div>
    </div>
    

</div>
</body>
</html>






