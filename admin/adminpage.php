<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Admin") {
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/fvlogo.png">
    <link href="css/style.css" rel="stylesheet">
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
<body onload="displayall()">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="../images/fvlogo.png" height="50" width="auto" alt="Logo"> Admin Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users"></i> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-project-diagram"></i> Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-credit-card"></i> Billing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-money-check"></i> Payments
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Admin Dashboard</h1>
                </div>

                <div class="row">
                    <!-- Total Users -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Total Users</h5>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title" id="response"></h3>
                                <p class="card-text">Total registered users on the platform.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Current Projects per User -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Current Projects per User</h5>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">5</h3>
                                <p class="card-text">Average number of projects per user.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Current Open Projects -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Current Open Projects</h5>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">76</h3>
                                <p class="card-text">Total number of projects currently open.</p>
                            </div>
                        </div>
                    </div>

                    <!-- For Billing -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>For Billing</h5>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">$8,200</h3>
                                <p class="card-text">Total amount pending for billing.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Status -->
                    <div class="col-md-12 mb-4">
                        <div class="card border-primary">
                            <div class="card-header">
                                <h5>Payment Status</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Payment ID</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>001</td>
                                                <td>$500</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>2024-07-20</td>
                                            </tr>
                                            <tr>
                                                <td>002</td>
                                                <td>$1,000</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>2024-07-22</td>
                                            </tr>
                                            <tr>
                                                <td>003</td>
                                                <td>$250</td>
                                                <td><span class="badge bg-danger">Failed</span></td>
                                                <td>2024-07-25</td>
                                            </tr>
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
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        });
        function displayall(){    
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("response").innerHTML = this.responseText;
                  new DataTable('#tbl',{
                    scrollCollapse: true,
                    scrollY: '50vh'
                  });
                //alert(this.responseText);
            }
        };
        xhttp.open("GET", "../ajax/displaytotal.php?", true);
        xhttp.send();
        }
    </script>
</body>
</html>
