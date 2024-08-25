<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
    exit;
}
if ($_SESSION['role'] != "Client2") {
    header('location:../index.php');
    exit;
}

$cidd = $_SESSION['idn'];
include('Database.php'); // Ensure this file connects to your database

// Get the job_id from query parameter (if available)
$job_id = isset($_GET['job_id']) ? $_GET['job_id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
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
        .sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                height: auto;
            }
            .sidebar .nav {
                display: none;
            }
            .sidebar.collapsed .nav {
                display: block;
            }
        }
        .sidebar-toggle-icon {
            font-size: 1.5rem;
            color: #003366;
            cursor: pointer;
        }
    </style>
</head>
<body onload="displayjobsfc()">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="../images/fvlogo.png" height="50" width="auto" alt="Logo"> Client Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-5">
                        <a class="btn btn-primary" href="../logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light-blue sidebar">
                <div class="position-sticky">
                    <h1><i class="fa-solid fa-arrow-right sidebar-toggle-icon d-md-none" id="sidebarToggle"></i></h1>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="client.php">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="update.php">
                                <i class="fas fa-user-cog"></i> Profile Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clientinprogress.php">
                                <i class="fas fa-project-diagram"></i> Projects In-Progress
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jobposting.php">
                                <i class="fas fa-plus-circle"></i> Posting Jobs
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Client Dashboard</h1>
                    <a href="jobposting.php" class="btn btn-primary">Post a New Job</a>
                </div>
             
                <input type="hidden" id="cid" value="<?= htmlspecialchars($cidd); ?>">
                <div class="container">
                    <div class="row"><h1>Projects</h1></div>
                    <div class="row" id="response"></div>
                </div>
            </main>
        </div>
    </div>

    <!-- Large Modal -->
    <div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Large Modal Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal Body Content -->
                    <p>Your content goes here. You can add text, images, forms, and more.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        });

        function openapplicant(jobid){
            window.open("currentp.php?job_id=" + jobid, "_self");
        }
        

        function displayjobsfc() { 
            var cid = document.getElementById("cid").value;   
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
            xhttp.open("GET", "../ajax/displayjobfc.php?cid=" + cid, true);
            xhttp.send();
        }
    </script>
</body>
</html>
