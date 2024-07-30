<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Client") {
    header('location:../index.php');
}
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
<body>
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
                            <a class="nav-link active" href="#">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-project-diagram"></i> Current Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-credit-card"></i> For Payment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profilem.php">
                                <i class="fas fa-user-cog"></i> Profile Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jobposting.php">
                                <i class="fas fa-plus-circle"></i> Posting Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-search"></i> Finding Talent
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
                      <!-- Dashboard Content -->
                      <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Client Dashboard</h1>
                </div>

                <div class="row">
                    <!-- Current Projects -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Current Projects</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Project A <span class="badge bg-success float-end">Active</span></li>
                                    <li class="list-group-item">Project B <span class="badge bg-warning float-end">Pending</span></li>
                                    <li class="list-group-item">Project C <span class="badge bg-danger float-end">Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- For Payment -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>For Payment</h5>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">$1,200</h3>
                                <p class="card-text">Total amount pending for payment.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Management -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Profile Management</h5>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="profilem.php">Edit Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Posting Jobs -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Posting Jobs</h5>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="jobposting.php">Create New Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Finding Talent -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Finding Talent</h5>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="#">Search for Freelancers</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add Feedback -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Add Feedback</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="feedback-text" class="form-label">Feedback</label>
                                        <textarea class="form-control" id="feedback-text" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    

    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        });
    </script>
</body>
</html>
