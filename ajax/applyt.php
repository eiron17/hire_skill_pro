<?php
$jobid = $_GET['jobid'];
$clientid = $_GET['clientid'];
$uidd = $_GET['uidd'];      
include_once '../Class/User.php';
$u = new User();
echo $u->addapply($jobid, $clientid, $uidd);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible fade-out">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>
