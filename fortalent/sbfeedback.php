<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Talent") {
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Dashboard</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">Job Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link me-5" href="talent.php"><i class="fas fa-arrow-left"></i> Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Talent Dashboard</h2>
        <div class="row">
            <!-- Feedback -->
            <div class="col-12 mb-4">
                <div class="card border-primary" style="min-height: 500px;">
                    <div class="card-header bg-primary text-white">
                        <h5>Feedback</h5>
                    </div>
                    <div class="card-body bg-white text-dark">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Job ID</th>
                                    <th>Job Title</th>
                                    <th>Client's Name</th>
                                    <th>Client Feedback</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Data -->
                                <tr>
                                    <td>001</td>
                                    <td>Software Developer</td>
                                    <td>Jane Doe</td>
                                    <td>Great job! Very satisfied with the results.</td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Graphic Designer</td>
                                    <td>John Smith</td>
                                    <td>Good design, but there were some delays.</td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Project Manager</td>
                                    <td>Emily Johnson</td>
                                    <td>Professional and efficient, but the communication could be improved.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
