<?php
include_once '../Class/User.php';
$u = new User();
$data = $u->displayjob();
while ($row = $data->fetch_assoc()) {
    echo '
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">'.$row['job_title'].'</h4>
            <p>'.$row['job_description'].'</p>
            <div class="d-flex flex-wrap mb-3">
                <span class="badge bg-light text-dark me-2 mb-2">Skills: '.$row['skills'].'</span>
                <span class="badge bg-light text-dark me-2 mb-2">Job Term: '.$row['job_term'].'</span>
                <span class="badge bg-light text-dark me-2 mb-2">Job Nature: '.$row['job_nature'].'</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="mb-1"><strong>Fixed Price:</strong> '.$row['fixed_price'].'</p>
                    <p class="mb-1"><strong>Hourly Rate:</strong> '.$row['hourly_rate'].'</p>
                </div>
                <div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-end w-100">
                    <button type="button" onclick="showdetails(&quot;'.$row['id'].'&quot;,&quot;'.$row['client_idnumber'].'&quot;)" 
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profileModal">
                        Apply
                    </button>
                </div>
            </div>
        
        </div>
    </div>';
}
?>
