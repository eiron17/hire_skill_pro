<?php
$contactname=$_GET['contactname'];
$contactemail=$_GET['contactemail'];
$contactmessage=$_GET['contactmessage'];
include_once '../Class/User.php';
$u= new User();
echo $u->savecontactus($contactname,$contactemail,$contactmessage);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Message Sent!
        </div>
    </div>
</div>