<?php
include_once '../Class/Database.php'; // Ensure this path is correct
include_once '../Class/User.php';

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
        .table-container {
            margin: 20px 0; /* Existing margins */
            padding: 15px; /* Existing padding */
            overflow-x: auto; /* Ensure horizontal scrolling if needed */
            margin-top: 30px; /* Adjust this value as needed */
        }
        .table-container .table {
            margin-bottom: 0; /* Remove bottom margin for table to fit nicely */
        }
        .dataTables_filter {
            margin-top: 20px; /* Adjust this value as needed */
            text-align: right; /* Align search bar to the right */
        }
        /* Hide Previous and Next buttons */
        .dataTables_paginate .paginate_button.previous,
        .dataTables_paginate .paginate_button.next {
            display: none;
        }
        /* Hide the page number '1' button */
        .dataTables_paginate .paginate_button:nth-child(2) {
            display: none; /* Adjust this index if needed */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="../images/fvlogo.png" height="50" width="auto" alt="Logo"> Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
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
                    <h1 class="h2">Total Users</h1>
                </div>

                <!-- Notification -->
                <?php if ($notification): ?>
                    <div class="mb-4">
                        <?php echo $notification; ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <!-- User Table -->
                    <div class="col-md-12 mb-4">
                        <div class="card border-primary">
                            <div class="card-body table-container">
                                <table class="table table-hover bg-light" id="tbl">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="border">Id</th>
                                            <th class="border">First Name</th>
                                            <th class="border">Last Name</th>
                                            <th class="border">Role</th>
                                            <th class="border">Status</th>
                                            <th class="border">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $u = new User();
                                        $data = $u->displayadminuser();
                                        while ($row = $data->fetch_assoc()) {
                                            echo '
                                                <tr class="text-center">
                                                    <td class="border">' . $row['id'] . '</td>
                                                    <td class="border">' . $row['firstname'] . '</td>
                                                    <td class="border">' . $row['last_name'] . '</td>
                                                    <td class="border">' . $row['role'] . '</td>
                                                    <td class="border">' . ($row['status'] == 1 ? 'Active' : 'Blocked') . '</td>
                                                    <td>
                                                        <form action="" method="post" style="display:inline;">
                                                            <input type="hidden" name="block_id" value="' . $row['id'] . '">
                                                            <button type="submit" class="btn btn-danger">Block</button>
                                                        </form>
                                                    </td>
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
            </main>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // Initialize DataTables
        $('#tbl').DataTable({
            "language": {
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "Showing 0 to 0 of 0 entries",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:"
            }
        });

        // Sidebar toggle functionality
        $('#sidebarToggle').click(function() {
            $('#sidebar').toggleClass('collapsed');
        });

        // Fade out alert messages after 5 seconds
        $('.alert').delay(.3).fadeOut('slow');
    });
</script>

</body>
</html>
