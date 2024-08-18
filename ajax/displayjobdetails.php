<?php
include_once '../Class/User.php';
$u = new User();
$clientid = $_GET['clientid'];
$jobid = $_GET['jobid'];
$data = $u->tviewjobdeatils($jobid);
while ($row = $data->fetch_assoc()) {
    echo '
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h5>Job Id</h5>
                        <p class="text-muted">' . $row['id'] . '</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Job Title</h5>
                        <p class="text-muted">' . $row['job_title'] . '</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h5>Job Description</h5>
                        <p class="text-muted">' . $row['job_description'] . '</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Qualifications</h5>
                        <p class="text-muted">' . $row['qualifications'] . '</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Job Nature</h5>
                        <p class="text-muted">' . $row['job_nature'] . '</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Job Terms</h5>
                        <p class="text-muted">' . $row['job_term'] . '</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Hourly Rate</h5>
                        <p class="text-muted">$' . $row['hourly_rate'] . '/hour</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Fixed Price</h5>
                        <p class="text-muted">$' . $row['fixed_price'] . '</p>
                    </div>
                </div>';
}
?>
