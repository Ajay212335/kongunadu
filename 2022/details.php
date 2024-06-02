
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kogunadu college of engineering and tech</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="alumni.css">
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
        

        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration12";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $register_number = $_POST['register_number'];
    
    $date = $_POST['date'];
    $company_name = $_POST['company_name'];
    $work = $_POST['work'];
    $status = $_POST['status'];

    $sql1 = "INSERT INTO userss (name, email, phone_number, register_number,date ,company_name, work ,status) VALUES ('$name', '$email', '$phone_number', '$register_number', '$date', '$company_name', '$work', '$status')";

    if ($conn->query($sql1) === TRUE) {
        echo "success";
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $register_number = $_POST['register_number'];
    
    $date = $_POST['date'];
    $company_name = $_POST['company_name'];
    $work = $_POST['work'];
    $status = $_POST['status'];

    $sql2 = "INSERT INTO users (name, email, phone_number, register_number,date ,company_name, work ,status) VALUES ('$name', '$email', '$phone_number', '$register_number', '$date', '$company_name', '$work', '$status')";

    if ($conn->query($sql2) === TRUE) {
        echo "fully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
}
$conn->close();
?>


    

    <div class="wii">
        <div class="will">
            <form action="details.php" method="post">
            <div class="form-group">
             <input type="text" name="name" placeholder="Name:">
            </div>    
            <div class="form-group">
            <input type="text" name="email" placeholder="Email: ">
            </div>
            <div class="form-group">
            <input type="text" name="phone_number" placeholder="Phone Number: ">
            </div>
            <div class="form-group">
            <input type="text" name="register_number" placeholder="Register Number: ">
            </div>
            <div class="form-group">
            <input type="date" name="date" placeholder="Date Of Birth: ">
            </div>
            <div class="form-group">
            <input type="text" name="company_name" placeholder="Company Name: ">
            </div>
            <div class="form-group">
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
            </div>
            
            <div class="form-group">
            <input type="text" name="status" placeholder="Stattus">
            </div>
            <br>
            <input type="submit" value="Register">
                
            </form>
            <div>
            
            <a href="logout.php" class="btn btn-warning">Logout</a>
          </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>






