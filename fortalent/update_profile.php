<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
    exit();
}
if ($_SESSION['role'] != "Talent") {
    header('location:../index.php');
    exit();
}

include('Database.php');

// Check if POST data is available
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request method.');
}

// Initialize variables
$id = $_POST['idnumber'] ?? '';
$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';
$gender = $_POST['gender'] ?? '';
$contact = $_POST['contact_'] ?? '';
$address = $_POST['address'] ?? '';
$education = $_POST['education'] ?? '';
$employmentHistory = $_POST['employment_history'] ?? '';
$skills = $_POST['skills'] ?? '';
$availability = $_POST['availability'] ?? '';
$hourlyRate = $_POST['hourly_rate'] ?? '';
$languages = $_POST['languages'] ?? '';
$result = $_POST['result'] ?? '';

// Prepare an SQL statement to update the profile
$sql = "UPDATE tblinfo SET fname = ?, lname = ?, gender = ?, contact_no = ?, address = ?, education = ?, employment_history = ?, skills = ?, availability = ?, hourly_rate = ?, languages = ?, result = ? WHERE idnumber = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters
$stmt->bind_param('ssssssssssss', $fname, $lname, $gender, $contact, $address, $education, $employmentHistory, $skills, $availability, $hourlyRate, $languages, $result, $id);

// Execute statement
if ($stmt->execute()) {
    header('Location: profile_preview.php'); // Redirect to the profile preview page
    exit();
} else {
    echo "Error updating profile: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
