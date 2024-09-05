<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
    exit();
}
if ($_SESSION['role'] != "Admin") {
    header('location:../index.php');
    exit();
}

// Include your database connection
require_once '../Class/Databases.php';

// Create an instance of your database class
$db = new Database();

// SQL query to count the total number of projects with status 'inprogress'
$query_inprogress = "SELECT COUNT(*) AS total_inprogress_projects FROM tblposting WHERE status = 'inprogress'";
$result_inprogress = $db->conn->query($query_inprogress);

// Fetch the result for inprogress projects
$total_inprogress_projects = 0;
if ($result_inprogress->num_rows > 0) {
    $row_inprogress = $result_inprogress->fetch_assoc();
    $total_inprogress_projects = $row_inprogress['total_inprogress_projects'];
}

// SQL query to count the total number of projects with status 'open'
$query_open = "SELECT COUNT(*) AS total_open_projects FROM tblposting WHERE status = 'open'";
$result_open = $db->conn->query($query_open);

// Fetch the result for open projects
$total_open_projects = 0;
if ($result_open->num_rows > 0) {
    $row_open = $result_open->fetch_assoc();
    $total_open_projects = $row_open['total_open_projects'];
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
            <a class="navbar-brand ms-5" href="adminpage.php">
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
                            <a class="nav-link active" href="adminpage.php">
                                <i class="fas fa-tachometer-alt"></i> Dashboard 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manageuser.php">
                                <i class="fas fa-users"></i> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="projectjob.php">
                                <i class="fas fa-project-diagram"></i> Projects
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">
                                <i class="fas fa-money-check"></i> User Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feeback.php">
                                <i class="fas fa-money-check"></i> Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaction.php">
                                <i class="fas fa-comments"></i> Transaction
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
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="manageuser.php" class="text-decoration-none">
                            <div class="card border-primary">
                                <div class="card-header">
                                    <h5>Total Users</h5>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title" id="response"></h3>
                                    <p class="card-text">Total registered users on the platform.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                

                    <!-- Card for Inprogress Projects -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="projectjob.php" class="text-decoration-none">
                            <div class="card border-primary">
                                <div class="card-header">
                                    <h5>In Progress Project </h5>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $total_inprogress_projects; ?></h3>
                                    <p class="card-text">Total number of current projects.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card for Open Projects -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="projectjob.php" class="text-decoration-none">
                            <div class="card border-primary">
                            <div class="card-header">
                                <h5>Current Open Projects</h5>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $total_open_projects; ?></h3>
                                <p class="card-text">Total number of projects currently open.</p>
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
                                                <th scope="col">Paid to Talent</th>
                                                <th scope="col">Commision</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include_once '../Class/User.php';
                                        $u = new User();
                                        $displaytransac = $u->comtransac();
                                        while($row = $displaytransac->fetch_assoc()){
                                            $amount = $row['amount']+$row['commission'];
                                            if($row['payment_status'] == 'COMPLETED'){
                                                $badge = 'badge bg-success';
                                                $txt = 'text-success';
                                            }else{
                                                $badge = 'badge bg-danger';
                                                $txt = 'text-danger';
                                            }
                                            echo '
                                             <tbody>
                                                <tr>
                                                    <td>'.$row['transaction_id'].'</td>
                                                    <td>'.$amount.'</td>
                                                    <td>'.$row['amount'].'</td>
                                                    <td class="'.$txt.'">'.$row['commission'].'</td>
                                                    <td><span class="'.$badge.'">'.$row['payment_status'].'</span></td>
                                                    <td>'.$row['created_at'].'</td>
                                                </tr>
                                            </tbody>
                                            
                                            ';
                                        }
                                        ?>
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
