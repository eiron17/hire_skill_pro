<?php
$cname = $_GET['cname'];
$cemail = $_GET['cemail'];
$cskills = $_GET['cskills'];
$cexperience = $_GET['cexperience'];  // Fixed variable name
$cphone = $_GET['cphone'];
$caddress = $_GET['caddress'];        // Fixed variable name
$ccity = $_GET['ccity'];
$ccountry = $_GET['ccountry'];        // Fixed variable name

include_once '../Class/User.php';
$u = new User();
echo $u->clientpro($cname, $cemail, $cskills, $cexperience, $cphone, $caddress, $ccity, $ccountry);
?>
<div class="row justify-content-center pos">
    <div class="col-md-3 text-center">
        <div class="alert alert-primary alert-dismissible fade-out">
            <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="alert"></button>
            Record Added
        </div>
    </div>
</div>
