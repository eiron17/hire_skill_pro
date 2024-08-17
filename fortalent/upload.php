<?php
session_start();
include_once '../Class/User.php';
if(isset($_POST['submit'])){
    $ttid = $_POST['ttid'];
    $tfname = $_POST['tfname'];
    $tmname = $_POST['tmname'];
    $tlname = $_POST['tlname'];  
    $tgender = $_POST['tgender'];
    $tcontact_number = $_POST['tcontact_number'];        
    $taddress = $_POST['taddress'];
    $temployment_history = $_POST['temployment_history'];   
    $teducation = $_POST['teducation'];
    $tskills = $_POST['tskills'];
    $thourly_rate = $_POST['thourly_rate'];  
    $tavailability = $_POST['tavailability'];
    $tlocation = $_POST['tlocation'];        
    $tlanguages = $_POST['tlanguages'];

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
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $rimg = $fileNameNew;
                $u= new User();
                $u->setupprot($ttid,$rimg, $tfname, $tmname, $tlname, $tgender, $tcontact_number, $taddress,$temployment_history,$teducation,$tskills,$thourly_rate,$tavailability,$tlocation,$tlanguages);
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
