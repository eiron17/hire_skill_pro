<section id="browse-jobs" class="py-5 bg-white">
    <div class="container pt-5">
        <h2 class="text-center mb-4">Browse Jobs</h2>
        <div class="row">
            <?php
            include_once '../Class/User.php';
            $u = new User();
            $data = $u->displayjob();

            while ($row = $data->fetch_assoc()) {
                echo '
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">' . $row['job_title'] . '</h5>
                            <p class="text-muted"><i class="fa-solid fa-business-time"></i> ' . $row['job_nature'] . '</p>
                            <p class="card-text mb-4">' . substr($row['job_description'], 0, 100) . '...</p>
                            <form method="POST">
                                <button type="button" class="btn btn-primary mt-auto" onclick="displayjobdetails(&quot;' . $row['id'] . '&quot;,&quot;' . $row['client_idnumber'] . '&quot;)" 
                                data-bs-toggle="modal" data-bs-target="#profileModal">Apply Now</button>
                            </form>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>
