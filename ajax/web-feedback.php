<?php
$feedbackbox=$_GET['feedbackbox'];
include_once '../Class/User.php';
$u= new User();
echo $u->webfeedback($feedbackbox);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Feedback Sent!
        </div>
    </div>
</div>
