<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../Class/User.php';

if (isset($_POST['submit'])) {
    $cidn = $_POST['erp'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $contactNumber = $_POST['contact_number'];
    $address = $_POST['address'];
    $languages = $_POST['languages'];

    $file = $_FILES['file'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) { // 1MB limit
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../images/' . $fileNameNew;
                
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    $rimg = $fileNameNew;
                    $u = new User();
                    if ($u->setupprotc($cidn, $rimg, $fname, $mname, $lname, $contactNumber, $address, $languages)) {
                        echo "<div class='content'><h2>Success!</h2><p><a href='../login.php'>Go to Login Page</a></p></div>";
                    } else {
                        echo "Error inserting data into the database.";
                    }
                } else {
                    echo "Failed to move uploaded file.";
                }
            } else {
                echo "The file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}
?>
