<?php
$ttid = $_GET['ttid'];
$tprofile_photo = $_GET['tprofile_photo'];
$tfname = $_GET['tfname'];
$tmname = $_GET['tmname'];
$tlname = $_GET['tlname'];  
$tgender = $_GET['tgender'];
$tcontact_number = $_GET['tcontact_number'];        
$taddress = $_GET['taddress'];
$temployment_history = $_GET['temployment_history'];   
$teducation = $_GET['teducation'];
$tskills = $_GET['tskills'];
$thourly_rate = $_GET['thourly_rate'];  
$tavailability = $_GET['tavailability'];
$tlocation = $_GET['tlocation'];        
$tlanguages = $_GET['tlanguages'];

include_once '../Class/User.php';
$u = new User();
echo $u->setupprot($ttid,$tprofile_photo, $tfname, $tmname, $tlname, $tgender, $tcontact_number, $taddress,$temployment_history,$teducation,$tskills,$thourly_rate,$tavailability,$tlocation,$tlanguages);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible fade-out">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>
