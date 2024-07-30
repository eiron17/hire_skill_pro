<?php
$tname = $_GET['tname'];
$temail = $_GET['temail'];
$skills = $_GET['skills'];
$experience = $_GET['experience'];  // Fixed variable name
$phone = $_GET['phone'];
$address = $_GET['address'];        // Fixed variable name
$city = $_GET['city'];
$country = $_GET['country'];        // Fixed variable name

include_once '../Class/User.php';
$u = new User();
echo $u->tprofile($tname, $temail, $skills, $experience, $phone, $address, $city, $country);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>
