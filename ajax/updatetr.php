<?php
$tttid=$_GET['tttid'];


include_once '../Class/User.php';
$u= new User();
echo $u->updatetr($tttid);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Role Updated!
        </div>
    </div>
</div>