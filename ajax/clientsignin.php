<?php
$cfname=$_GET['cfname'];
$clname=$_GET['clname'];
$csemail=$_GET['csemail'];
$cpass=$_GET['cpass'];
include_once '../Class/User.php';
$u= new User();
echo $u->clientsn($cfname,$clname,$csemail,$cpass);
?>
<div class="row justify-content-center pos">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible position-absolute">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>