<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
    exit();
}
if ($_SESSION['role'] != "Client2") {
    header('location:../index.php');
    exit();
}

include('Database.php');

// Initialize variables
$id = $_SESSION['idn'];
$profile = [];
$errorMessage = '';

// Fetch profile data from the database
$sql = "SELECT * FROM tblinfo WHERE idnumber = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $profile = $result->fetch_assoc();
} else {
    $errorMessage = "No profile found.";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Preview</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #000;
        }
        .resume-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .resume-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .resume-header img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .resume-header h2 {
            margin: 0;
            font-size: 1.75rem;
            color: #000;
        }
        .resume-header p {
            margin: 5px 0;
            font-size: 1rem;
            color: #333;
        }
        .resume-section {
            margin-bottom: 20px;
        }
        .resume-section h3 {
            font-size: 1.25rem;
            color: #333;
            margin-bottom: 10px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .resume-section p {
            font-size: 1rem;
            color: #555;
        }
        .modal-body form .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="client.php">Talent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link me-5" href="client.php"><i class="fas fa-arrow-left"></i> Back</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="resume-container">
    <div class="resume-header">
        <img src="<?= htmlspecialchars('../images/' . ($profile['profile_photo'] ?? 'default.png')) ?>" alt="Profile Photo">
        <h2><?= htmlspecialchars($profile['fname'] ?? 'N/A') ?> <?= htmlspecialchars($profile['lname'] ?? 'N/A') ?></h2>
        <p><?= htmlspecialchars($profile['gender'] ?? 'N/A') ?></p>
    </div>

    <div class="contact-info resume-section">
        <h3>Contact</h3>
        <p><i class="fas fa-phone"></i> <?= htmlspecialchars($profile['contact_no'] ?? 'N/A') ?></p>
        <p><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($profile['address'] ?? 'N/A') ?></p>
    </div>

    <div class="languages resume-section">
        <h3>Languages</h3>
        <p><?= htmlspecialchars($profile['languages'] ?? 'N/A') ?></p>
    </div>

    <div class="row">
        <div class="col-md-2 ms-auto">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST">
                    <input type="hidden" name="idnumber1" value="<?= htmlspecialchars($profile['idnumber'] ?? '') ?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?= htmlspecialchars($profile['fname'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?= htmlspecialchars($profile['lname'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact" name="contact_no" value="<?= htmlspecialchars($profile['contact_no'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= htmlspecialchars($profile['address'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="languages" class="form-label">Languages</label>
                        <input type="text" class="form-control" id="languages" name="languages" value="<?= htmlspecialchars($profile['languages'] ?? '') ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="savec" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
