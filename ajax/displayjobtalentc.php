<div class="bg-light p-4 ms-2  table-responsive">   
<table class="table table-hover bg-light" id="tbl">
        <thead>
        <tr  class="text-center">
            <th class="border">Job Id</th>
            <th class="border">Job Title</th>
            <th class="border">Job Terms</th>
            <th class="border">Project Budget</th>
            <th class="border">Project Status</th>
            <th class="border">Employer</th>
            <th class="border text-center">Chat</th>
       
        </tr>
        </thead>
        <tbody>
        <?php
include_once '../Class/User.php';
$u = new User();
$tid = $_GET['tid'];
$data = $u->displayinprogressjobintalent($tid);

while ($row = $data->fetch_assoc()) {
    echo '
        <tr class="text-center">
            <td class="border">'.$row['id'].'</td>
            <td class="border ">'.$row['job_title'].'</td>
            <td class="border ">'.$row['job_term'].'</td>
            <td class="border "><span class="fw-bold">Fixed Price:</span> '.$row['fixed_price'].' <span class="fw-bold">Hourly Rate:</span> '.$row['hourly_rate'].'</td>
            <td class="border ">'.$row['status'].'</td>
            <td class="border ">'.$row['client_fname'].' '.$row['client_lname'].'</td>
            <td class="border text-center">
                <button type="button" onclick="chat(&quot;'.$row['clientid'].'&quot;)" class="btn shadow-none text-dark position-relative m-2">
                <i class="fa-solid fa-comments"></i>
                </button>
            </td>
      
        </tr>
    ';
}
?>

</tbody>

    </table>
</div>