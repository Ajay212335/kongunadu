<?php
$con = new mysqli("localhost", "root", "", "user_registration9");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

ob_start();
require("fpdf.php");

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Ln(7);
$pdf->Cell(15);

$pdf->Image('looo.png',5,5,20);
$pdf->Cell(100,5,'KONGUNADU COLLEGE OF ENGINEERING AND TECHNOLOGY',0,1);
$pdf->Cell(75);
$pdf->Cell(100,10,'(AUTONOMOUS)',0,1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(55);
$pdf->Cell(100,5,'Namakkal- trichy main road, thottiam, trichy.',0,1);
$pdf->Cell(48);
$pdf->Cell(100,10,'DEPARTMENT OF INFORMATION TECHNOLOGY',0,1);
$pdf->Cell(57);
$pdf->Cell(100,5,'ALUMNI BATCH (2007-2011) PASSED OUT',0,1);
$pdf->Cell(70);
$pdf->Cell(100,10,'In-Charge : Dr.R.Sathya AP / IT',0,1);
$pdf->Cell(80);
$pdf->Cell(100,5,'ACY:2023-24 Status',0,1);


// Set font
$pdf->SetFont('Arial', 'B', 16);

$pdf->Ln(5);
$pdf->Cell(-5);
// Centered title
$pdf->Cell(200, 10, 'Student Details', 1, 1, 'C');

// Table header
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(-5);
$pdf->Cell(75, 10, 'Student Name', 1, 0, 'C');
$pdf->Cell(85, 10, 'Email', 1, 0, 'C');
$pdf->Cell(40, 10, 'PhoneNumber', 1,1, 'C');




$sql = "SELECT name, email, phone_number, register_number, date, company_name, work, status FROM users";
$res = $con->query($sql);

if ($res->num_rows > 0) {
    $pdf->SetFont('Arial', '', 12);
    $i=0;
    while ($row = $res->fetch_assoc()) {
        $pdf->Cell(-5);
        $pdf->Cell(75, 10, $row["name"], 1, 0);
        $pdf->Cell(85, 10, $row["email"], 1, 0);
        $pdf->Cell(40, 10, $row["phone_number"], 1, 1,);
        
          
    }
} else {
    $pdf->Cell(280, 10, 'No Records', 1, 1, 'C');
}




// Table header
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(5);
$pdf->Cell(-5);
$pdf->Cell(60, 10, 'Register Number', 1, 0, 'C');
$pdf->Cell(55, 10, 'Date Of Birth', 1, 0, 'C');
$pdf->Cell(85, 10, 'Company Name', 1, 1, 'C');


$sql = "SELECT name, email, phone_number, register_number, date, company_name, work, status FROM users";
$res = $con->query($sql);

if ($res->num_rows > 0) {
    $pdf->SetFont('Arial', '', 12);
    $i=0;
    while ($row = $res->fetch_assoc()) {
        $pdf->Cell(-5);
        $pdf->Cell(60, 10, $row["register_number"], 1, 0);
        $pdf->Cell(55, 10, $row["date"], 1, 0);
        $pdf->Cell(85, 10, $row["company_name"], 1, 1);
        
    }
} else {
    $pdf->Cell(280, 10, 'No Records', 1, 1, 'C');
}



// Table header2
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(5);
$pdf->Cell(-5);


$pdf->Cell(105, 10, 'Working', 1, 0, 'C');
$pdf->Cell(95, 10, 'Current Status', 1, 1, 'C');

$sql = "SELECT name, email, phone_number, register_number, date, company_name, work, status FROM users";
$res = $con->query($sql);

if ($res->num_rows > 0) {
    $pdf->SetFont('Arial', '', 12);
    $i=0;
    while ($row = $res->fetch_assoc()) {
        $pdf->Cell(-5);
        
       
        $pdf->Cell(105, 10, $row["work"], 1, 0);
        $pdf->Cell(95, 10, $row["status"], 1, 1);
    }
} else {
    $pdf->Cell(280, 10, 'No Records', 1, 1, 'C');
}



//contant with total number



$pdf->Output();
ob_end_flush();
?>
