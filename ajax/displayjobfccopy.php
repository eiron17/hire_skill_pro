<div class="bg-light p-4 ms-2  table-responsive">   
<table class="table table-hover bg-light" id="tbl">
        <thead>
        <tr  class="text-center">
            <th class="border">Job Id</th>
            <th class="border">Job Title</th>
            <th class="border">Job Terms</th>
            <th class="border">Project Budget</th>
            <th class="border text-center">Applicant</th>
        </tr>
        </thead>
        <tbody>
        <?php
include_once '../Class/User.php';
$u = new User();
$cid = $_GET['cid'];
$data = $u->displayinprogressjob($cid);

while ($row = $data->fetch_assoc()) {
    $applicant_count = $u->apllicantnotiffcc($row['id']);
    echo '
        <tr class="text-center">
            <td class="border">'.$row['id'].'</td>
            <td class="border ">'.$row['job_title'].'</td>
            <td class="border ">'.$row['job_term'].'</td>
            <td class="border "><span class="fw-bold">Fixed Price:</span> '.$row['fixed_price'].' <span class="fw-bold">Hourly Rate:</span> '.$row['hourly_rate'].'</td>
    
            <td class="border text-center">
                <button type="button" class="btn shadow-none text-dark position-relative m-2" onclick="openapplicant(&quot;'.$row['id'].'&quot;)">
                    <i class="fa-solid fa-user"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    '.$applicant_count.'
                    <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
            </td>
        </tr>
    ';
}
?>

</tbody>

    </table>
</div>