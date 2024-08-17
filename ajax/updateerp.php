<?php
$erp=$_GET['erp'];


include_once '../Class/User.php';
$u= new User();
echo $u->updateerp($erp);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Role Updated!
        </div>
    </div>
</div>