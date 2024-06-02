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
include("database.php");
error_reporting(0);

$query = "SELECT * FROM usersss";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

// echo $total;

if($total != 0)
{
    ?>
    <div class="tab">
    <table border="3">
        <tr>
            <th>FullName</th>
            <th>Email</th>
            <th>Register Number</th>
            <th>Phone Number</th>
            <th>Date Of Birth</th> 
            <th>Company Name</th>
            <th>Working</th> 
            <th>status</th>
            <th>Edit</th>
</div>
</tr>

    <?php
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['full_name']."</td>
                <td>".$result['email']."</td>
                <td>".$result['address']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['date']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['age']."</td> 
                <td>".$result['status']."</td>
                <td><a href='edit.php?id=<?php echo $row[id];?>'>Edit</a></td>
            </tr> 
            ";
    }
}
else{
    echo "no records found";
}
?>

 </table> 

 <div></div>
 <form action="pdf.php">
 <div class="connn">
    <a href="pdf.php">Download</a>
    </div>
    </form>
    




</body>
</html>






