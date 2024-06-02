<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kogunadu college of engineering and tech</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="2011.css">
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

    
<br><br>

<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "user_registration11";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $register_number = $_POST["register_number"];

    $date = $_POST['date'];
    $company_name = $_POST['company_name'];
    $work = $_POST['work'];
    $status = $_POST['status'];

    $sql = "UPDATE users SET name='$name', email='$email', phone_number='$phone_number', register_number='$register_number' ,date= '$date',company_name= '$company_name', work='$work',status= '$status' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: registerdisplay.php");
        die();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

$conn->close();
?>


<div class="wii">
    <div class="will">
        <h2>Update User Information</h2>
        <br>
        <form method="post" action="update.php">
         <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            Name:<br>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <br>
        Email:<br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
         <br>
        Phone Number:<br>
        <input type="text" name="phone_number" value="<?php echo $user['phone_number']; ?>" required>
        <br>
        Register Number:<br>
        <input type="text" name="register_number" value="<?php echo $user['register_number']; ?>" required>
        <br>

        Date:<br>
        <input type="date" name="date" value="<?php echo $user['date']; ?>" required>
        <br>
        company:<br>
        <input type="text" name="company_name" value="<?php echo $user['company_name']; ?>" required>
        <br>
        work:<br>
        <select type="text" class="form-control"   name="work" placeholder="Working:">
                        <option>--------------------------------------Select--------------------------------------</option>
                        <option>Competitive Exam Preparation & Business</option>
                        <option>Assistant Professor</option>
                        <option>MNC Employee</option>
                        <option>Private Company Employee </option>
                        <option>Non Core Company</option>
                        <option>Business</option>
                        <option>House Wife</option>
                        <option>Government Employee</option>
            
        <br><br> <br><br>
        status:<br>
        <input type="text" name="status" value="<?php echo $user['status']; ?>" required>
        <br><br>
        <input type="submit" value="Update">
        </form>
    </div>
</div>

</body>
</html>
