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
                <div class="comes">
                    <a href="alumni.php">Register</a>
                    
                </div>
    </nav>  

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
    </div>

    
   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$start_date = "2023-12-01";
$end_date = "2024-12-30";

$sql = "SELECT * FROM userss WHERE DATE(created_at) BETWEEN '$start_date' AND '$end_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Register Number</th>
                <th>Date</th>
                <th>Company Name</th>
                <th>Work</th>
                <th>Status</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["register_number"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["company_name"] . "</td>";
        echo "<td>" . $row["work"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users registered.";
}

?>
</table>
<div></div>

 <div></div>
 <form action="pdf.php">
 <div class="connn">
    <a href="pdf.php">Download current st</a>
    </div>
    <div class="connn">
    <a href="registerdisplay.php">Update current Status</a>
    </div>
    
    </form>
    




    <div class="fun">

    <?php
$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work= ?");
$stmt->bind_param("s", $category1);
$category1 = "Competitive Exam Preparation & Business";
$stmt->execute();
$stmt->bind_result($total1);
$stmt->fetch();
echo "Competitive Exam Preparation & Business: " . $total1 . "<br>";

$stmt->close(); 

$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work = ?");
$stmt->bind_param("s", $category2);
$category2 = "Assistant Professor";
$stmt->execute();
$stmt->bind_result($total2);
$stmt->fetch();
echo "Assistant Professor: " . $total2 . "<br>";

$stmt->close(); 

$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work = ?");
$stmt->bind_param("s", $category3);
$category3 = "MNC Employee";
$stmt->execute();
$stmt->bind_result($total3);
$stmt->fetch();
echo "MNC Employee: " . $total3 . "<br>";

$stmt->close(); 
$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work = ?");
$stmt->bind_param("s", $category4);
$category4 = "Private Company Employee";
$stmt->execute();
$stmt->bind_result($total4);
$stmt->fetch();
echo "Private Company Employee: " . $total4 . "<br>";

$stmt->close();


$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work = ?");
$stmt->bind_param("s", $category5);
$category5 = "Non Core Company";
$stmt->execute();
$stmt->bind_result($total5);
$stmt->fetch();
echo "Non Core Company: " . $total5 . "<br>";

$stmt->close();
$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work = ?");
$stmt->bind_param("s", $category6);
$category6 = "Business";
$stmt->execute();
$stmt->bind_result($total6);
$stmt->fetch();
echo "Business: " . $total6 . "<br>";

$stmt->close(); 

$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work = ?");
$stmt->bind_param("s", $category7);
$category7 = "House Wife";
$stmt->execute();
$stmt->bind_result($total7);
$stmt->fetch();
echo "House Wife: " . $total7 . "<br>";

$stmt->close(); 
$stmt = $conn->prepare("SELECT count(work) AS total FROM users WHERE work = ?");
$stmt->bind_param("s", $category8);
$category8 = "Government Employee";
$stmt->execute();
$stmt->bind_result($total8);
$stmt->fetch();
echo "Government Employee: " . $total8 . "<br>";

$stmt->close();

$conn->close();


?>

</div>
<br><br><br><br>

</html>






