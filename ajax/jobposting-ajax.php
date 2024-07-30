<?php
$jobTitle=$_GET['jobTitle'];
$jobnature=$_GET['jobnature'];
$jobDescription=$_GET['jobDescription'];
$qualifications=$_GET['qualifications'];
$payment=$_GET['payment'];
$jobterm=$_GET['jobterm'];
include_once '../Class/User.php';
$u= new User();
echo $u->jobpostingc($jobTitle,$jobnature,$jobDescription,$qualifications,$payment,$jobterm);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>