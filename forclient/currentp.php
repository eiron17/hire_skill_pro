<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Client2") {
    header('location:../index.php');
}
$client_id = $_SESSION['idn'];
$jobid = $_GET['job_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Projects</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/fvlogo.png">
    <style>
        .bg-dark-blue {
            background-color: #003366;
            color: #ffffff;
        }
        .bg-light-blue {
            background-color: #e6f0ff;
        }
        .card-header {
            background-color: #003366;
            color: #ffffff;
        }
        .card-body {
            background-color: #ffffff;
            color: #333333;
        }
        .border-primary {
            border-color: #003366 !important;
        }
    </style>
</head>
<body onload="displayapplicant()">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="../images/fvlogo.png" height="50" width="auto" alt="Logo"> Current Projects
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-5">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Current Projects Content -->
            <main class="col-md-12 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Current Projects</h1>
                    <a href="client.php" class="btn btn-primary">Back</a>
                </div>

                <div class="row">
                    <!-- Placeholder for future content -->
                    <div class="col-12 mb-4">
                        <div class="card border-primary">
                            <div class="card-header bg-dark-blue text-white">
                                <h5 class="mb-0">Applicant</h5>
                                <div class="bg-light p-4 ms-2 table-responsive m-2">
                                    <table class="table table-hover bg-light" id="tbl">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="border">Profile Picture</th>
                                                <th class="border">Name</th>
                                                <th class="border">Talent Information</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once '../Class/User.php';
                                            $u = new User();
                                            $data = $u->getapllicant($client_id, $jobid);
                                            while ($row = $data->fetch_assoc()) {
                                                echo '
                                                    <tr class="text-center">
                                                        <td class="border"><img src="../images/' . $row['pp'] . '" alt="Profile Photo" class="img-fluid rounded-circle mb-3" style="width: 50px;">
                                                        </td>

                                                        <td class="border">' . $row['fn'] . ' ' . $row['ln'] . '</td>
                                                        <td><button onclick="openapplicant(&quot;'.$row['job'].'&quot;,&quot;'.$row['tal'].'&quot;)" class="btn btn-primary">View</button></td>
                                                        <div id="response"></div>
                                                    </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

<script>
function displayapplicant() {
    var gtid = document.getElementById("gtid").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;
            new DataTable('#tbl', {
                scrollCollapse: true,
                scrollY: '50vh'
            });
        }
    };
    xhttp.open("GET", "../ajax/displayapply.php?gtid=" + gtid, true);
    xhttp.send();
}

function openapplicant(jobid, ggtid) {
    window.open("applycantp.php?job_id=" + encodeURIComponent(jobid) + "&ggtid=" + encodeURIComponent(ggtid), "_self");
}

</script>

</html>
