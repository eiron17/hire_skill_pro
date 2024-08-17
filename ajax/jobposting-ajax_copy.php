<?php
$ccid=$_GET['ccid'];
$jobTitle=$_GET['jobTitle'];
$skills=$_GET['skills'];
$jobnature=$_GET['jobnature'];
$jobterm=$_GET['jobterm'];
$paymentHourly=$_GET['paymentHourly'];
$hourlyRateAmount=$_GET['hourlyRateAmount'];
$fixedPriceAmount=$_GET['fixedPriceAmount'];
$jobDescription=$_GET['jobDescription'];
$qualifications=$_GET['qualifications'];

include_once '../Class/User.php';
$u= new User();
$skills=$_GET['skills'];
echo $u->jobpostingc1($jobTitle,$ccid,$skills,$jobnature,$jobterm,$paymentHourly,$hourlyRateAmount,$fixedPriceAmount,$jobDescription,$qualifications);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>