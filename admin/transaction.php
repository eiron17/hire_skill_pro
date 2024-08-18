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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Contact Messages</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/fvlogo.png">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .bg-dark-blue { background-color: #003366; color: #ffffff; }
        .bg-light-blue { background-color: #e6f0ff; }
        .card-header { background-color: #003366; color: #ffffff; }
        .card-body { background-color: #ffffff; color: #333333; }
        .border-primary { border-color: #003366 !important; }
        .sidebar { position: -webkit-sticky; position: sticky; top: 0; height: 100vh; overflow-y: auto; }
        @media (max-width: 768px) {
            .sidebar { position: relative; height: auto; }
            .sidebar .nav { display: none; }
            .sidebar.collapsed .nav { display: block; }
        }
        .table-container { margin: 20px 0; padding: 15px; overflow-x: auto; margin-top: 30px; }
        .sidebar-toggle-icon { font-size: 1.5rem; color: #003366; cursor: pointer; }
        .dataTables_filter { margin-top: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="adminpage.php">
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

    <div class="container-fluid mt-4">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light-blue sidebar">
                <div class="position-sticky">
                    <h1><i class="fa-solid fa-arrow-right sidebar-toggle-icon d-md-none" id="sidebarToggle"></i></h1>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="adminpage.php">
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
                            <a class="nav-link active" href="contact.php">
                                <i class="fas fa-envelope"></i> User Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feeback.php">
                                <i class="fas fa-comments"></i> Feedback
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

            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Transactions</h1>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card border-primary">
                            <div class="card-body table-container">
                                
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Transaction ID</th>
                                            <th>Payer Name</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                            <th>Payment Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Fetch data from the transactions table
                                        $sql = "SELECT id, transaction_id, payer_name, amount, currency, payment_status, created_at FROM transactions";
                                        $result = $conn->query($sql);

                                        if ($result === false) {
                                            echo "<tr><td colspan='7'>Error fetching data: " . htmlspecialchars($conn->error) . "</td></tr>";
                                        } elseif ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                                                echo "<td>" . htmlspecialchars($row["transaction_id"]) . "</td>";
                                                echo "<td>" . htmlspecialchars($row["payer_name"]) . "</td>";
                                                echo "<td>" . htmlspecialchars($row["amount"]) . "</td>";
                                                echo "<td>" . htmlspecialchars($row["currency"]) . "</td>";
                                                echo "<td>" . htmlspecialchars($row["payment_status"]) . "</td>";
                                                echo "<td>" . htmlspecialchars($row["created_at"]) . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='7'>No transactions found</td></tr>";
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
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

</body>
</html>

