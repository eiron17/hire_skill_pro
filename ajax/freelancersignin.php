<?php
$sfname=$_GET['sfname'];
$slname=$_GET['slname'];
$fsemail=$_GET['fsemail'];
$spass=$_GET['spass'];
include_once '../Class/User.php';
$u= new User();
echo $u->freelancersn($sfname,$slname,$fsemail,$spass);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>