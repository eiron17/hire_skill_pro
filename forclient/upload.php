<?php
session_start();
include_once '../Class copy/User.php';
if(isset($_POST['submit'])){
    $cidn = $_POST['erp'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $contactNumber = $_POST['contact_number'];
    $address = $_POST['address'];
    $languages = $_POST['languages'];

    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
 
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if($fileSize < 10000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $rimg = $fileNameNew;
                $u= new User();
                $u->setupprotc($cidn,$rimg, $fname, $mname, $lname, $contactNumber, $address, $languages);
            }else{
                echo "The File is too Big!";
            }
        }else{
            echo "There was an Error Uploading Your File!";
        }
    }else{
        echo "You cannot Uplaod Files of this Type!";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .content {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .content a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2>Success!</h2>
        <p><a href="../login.php">Go to Login Page</a></p>
    </div>
</body>
</html>
