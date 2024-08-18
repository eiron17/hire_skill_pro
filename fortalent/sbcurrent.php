<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
    exit;
}
if ($_SESSION['role'] != "Talent") {
    header('location:../index.php');
    exit;
}

$tidd = $_SESSION['idn'];
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
<body onload="displayjobsfccopy1()">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="talent.php">Talent Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="client.php"><i class="fas fa-arrow-left"></i> Back</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="row m-5" id="response"></div>
<input type="hidden" id="tid" value="<?= htmlspecialchars($tidd); ?>">


    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        });

        function openapplicant(jobid){
            window.open("currentp.php?job_id=" + jobid, "_self");
        }
        

        function displayjobsfccopy1() { 
            var tid = document.getElementById("tid").value;   
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
            xhttp.open("GET", "../ajax/displayjobtalentc.php?tid=" + tid, true);
            xhttp.send();
        }

        function chat(uid){
            window.open("chat.php?reciever=" + uid,"_self");
        }
    </script>
</body>
</html>
s