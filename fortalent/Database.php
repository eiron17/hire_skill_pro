<?php
$servername = "localhost"; // Change if necessary
$username = "u320585682_hireskillpro"; // Change if necessary
$password = "Mydatabase17"; // Change if necessary
$database = "u320585682_hireskillpro"; // Make sure this matches the database name
 // Make sure this matches the database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
