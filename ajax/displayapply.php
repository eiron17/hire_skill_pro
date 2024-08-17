<?php
include_once '../Class/User.php';
$u = new User();
$gtid = $_GET['gtid']; // Get the gtid from the query parameters
$data = $u->displayapplicant($gtid);
while ($row = $data->fetch_assoc()) {
    echo '
        <h2>'.$row['total_users'].'</h2>
        <div class="row">
            <div class="col-md-12">
                <h5>'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5>'.$row['gender'].'</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5>'.$row['contact_number'].'</h5>
            </div>
        </div>
    ';
}
?>
