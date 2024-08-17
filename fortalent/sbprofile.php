<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
    exit();
}
if ($_SESSION['role'] != "Talent") {
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
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
        }
        .resume-header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }
        .resume-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .resume-header h2 {
            margin: 0;
            font-size: 1.75rem;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        .resume-header p {
            margin: 5px 0;
            font-size: 1rem;
            color: #333;
        }
        .resume-section {
            width: 50%;
            padding: 10px 20px;
        }
        .resume-section h3 {
            font-size: 1.2rem;
            color: #000;
            margin-bottom: 15px;
            text-transform: uppercase;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
        }
        .resume-section p {
            margin: 0 0 10px;
            font-size: 1rem;
            color: #333;
        }
        .resume-section p.label {
            font-weight: bold;
            color: #000;
            margin-bottom: 5px;
        }
        .contact-info, .education, .experience, .skills, .awards {
            width: 50%;
        }
    </style>
</head>
<?php
if (isset($_POST['savec'])){

$idn = $_POST['idnumber1'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$contact = $_POST['contact_no'];
$address = $_POST['address'];
$education = $_POST['education'];
$employmentHistory = $_POST['employment_history'];
$skills = $_POST['skills'];
$availability = $_POST['availability'];
$hourlyRate = $_POST['hourly_rate'];
$languages = $_POST['languages'];
$result = $_POST['result'];

include_once '../Class/User.php';
$u = new User();
echo $u->updatetinfo($idn,$fname,$lname,$gender,$contact,$address,$education,$employmentHistory,$skills,$availability,$hourlyRate,$languages,$result);
}
?>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">Talent</a>
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

        <div class="education resume-section">
            <h3>Educational History</h3>
            <p><?= htmlspecialchars($profile['education'] ?? 'N/A') ?></p>
        </div>

        <div class="experience resume-section">
            <h3>Employment History</h3>
            <p><?= htmlspecialchars($profile['employment_history'] ?? 'N/A') ?></p>
        </div>

        <div class="skills resume-section">
            <h3>Skills</h3>
            <p><?= htmlspecialchars($profile['skills'] ?? 'N/A') ?></p>
        </div>

        <div class="availability resume-section">
            <h3>Availability</h3>
            <p><?= htmlspecialchars($profile['availability'] ?? 'N/A') ?></p>
        </div>

        <div class="hourly-rate resume-section">
            <h3>Hourly Rate</h3>
            <p><?= htmlspecialchars($profile['hourly_rate'] ?? 'N/A') ?></p>
        </div>

        <div class="languages resume-section">
            <h3>Languages</h3>
            <p><?= htmlspecialchars($profile['languages'] ?? 'N/A') ?></p>
        </div>

        <div class="Exam resume-section">
            <h3>Exam Results</h3>
            <p><?= htmlspecialchars($profile['result'] ?? 'N/A') ?></p>
        </div>
        <div class="row ms-auto me-3">
            <div class="col-md-2">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
            </div>
        </div>


    </div>


    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>

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
                <input type="text" name="idnumber1" value="<?= htmlspecialchars($profile['idnumber'] ?? '') ?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?= htmlspecialchars($profile['fname'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?= htmlspecialchars($profile['lname'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?= htmlspecialchars($profile['gender'] ?? '') ?>">
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
                        <label for="education" class="form-label">Educational History</label>
                        <textarea class="form-control" id="education" name="education"><?= htmlspecialchars($profile['education'] ?? '') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="employmentHistory" class="form-label">Employment History</label>
                        <textarea class="form-control" id="employmentHistory" name="employment_history"><?= htmlspecialchars($profile['employment_history'] ?? '') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="skills" class="form-label">Skills</label>
                        <textarea class="form-control" id="skills" name="skills"><?= htmlspecialchars($profile['skills'] ?? '') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="availability" class="form-label">Availability</label>
                        <input type="text" class="form-control" id="availability" name="availability" value="<?= htmlspecialchars($profile['availability'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="hourlyRate" class="form-label">Hourly Rate</label>
                        <input type="text" class="form-control" id="hourlyRate" name="hourly_rate" value="<?= htmlspecialchars($profile['hourly_rate'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="languages" class="form-label">Languages</label>
                        <input type="text" class="form-control" id="languages" name="languages" value="<?= htmlspecialchars($profile['languages'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="result" class="form-label">Exam Results</label>
                        <input type="text" class="form-control" id="result" name="result" value="<?= htmlspecialchars($profile['result'] ?? '') ?>">
                    </div>
                   <div class="modal-footer">
                        <button type="submit" name="savec" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
