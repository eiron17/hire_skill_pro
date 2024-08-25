<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Talent") {
    header('location:../index.php');
}

include_once '../Class/User.php';
$u = new User();
$uid=$_SESSION['idn'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Dashboard</title>
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
        .pos {
    position: fixed;
    width: 100%;
    top: 40%;
    z-index: 9999; /* A high value to ensure it is in front */
    display: flex;
    justify-content: center; /* Center the notification horizontally */
}  
.fade-out {
    opacity: 1;
    transition: opacity 1s ease-out;
}

.fade-out.hide {
    opacity: 0;
}
    </style>
</head>
<body onload="displayjobs()">
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Job Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="responses"></div>
                <!-- Job ID input before Client ID input -->
                <input type="hidden" id="uidd" value="<?=$uid?>">
                <input type="hidden" id="jobid">
                <input type="hidden" id="clientid">
              
            </div>
            <div class="modal-footer">
                <button type="button" id="sutapply" onclick="applysubmit()" name="submitapply" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="../images/fvlogo.png" height="50" width="auto" alt="Logo"> Talent Dashboard
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
            <span id="notifforadd"></span>
    <!-- Main Content -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h1><i class="fa-solid fa-arrow-right sidebar-toggle-icon d-md-none" id="sidebarToggle"></i></h1>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="sbprofile.php">
                                <i class="fas fa-user-cog"></i> Profile Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sbcurrent.php">
                                <i class="fas fa-briefcase"></i> Current Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sbforpayment.php">
                                <i class="fas fa-credit-card"></i> For Payment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sbexam.php">
                                <i class="fas fa-clipboard-list"></i> Exam Management
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  border-bottom">
                    <h1 class="h2">Talent Dashboard</h1>
                </div>
                <div id="response"></div>
                </section>
      
            </main>
        </div>
    </div>

    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        });

        function displayjobs(){    
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
        xhttp.open("GET", "../ajax/diplayjob.php?", true);
        xhttp.send();
        }

        function displayjobdetails(jobid,clientid) {
    document.getElementById("jobid").value = jobid;  
    document.getElementById("clientid").value = clientid;  

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("responses").innerHTML = this.responseText;
            new DataTable('#tbl', {
                scrollCollapse: true,
                scrollY: '50vh'
            });
            //alert(this.responseText);
        }
    };

    // Fixed the query string by adding an ampersand between jobid and clientid
    xhttp.open("GET", "../ajax/displayjobdetails.php?jobid=" + jobid + "&clientid=" + clientid, true);
    xhttp.send();
}



    function applysubmit() {
    var jobid = document.getElementById("jobid").value;
    var clientid = document.getElementById("clientid").value;
    var uidd = document.getElementById("uidd").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("notifforadd").innerHTML = this.responseText;

            // Apply fade-out effect after 2 seconds
            setTimeout(function() {
                var notif = document.querySelector("#notifforadd .alert");
                if (notif) {
                    notif.classList.add("fade-out");
                    // Remove the notification from the DOM after the fade-out animation
                    setTimeout(function() {
                        notif.remove();
                    }, 1000); // Matches the CSS transition duration
                }
            }, 2000);

            // Hide the modal
            var modalElement = document.getElementById('profileModal');
            var modal = bootstrap.Modal.getInstance(modalElement);
            modal.hide();
        }
    }
    xhttp.open("GET", "../ajax/applyt.php?jobid=" + jobid + "&clientid=" + clientid + "&uidd=" + uidd, true);
    xhttp.send();
}

    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</div>



</div>
</body>

</html>
