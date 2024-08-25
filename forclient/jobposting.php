<?php
session_start();

// Reset the form submission flag
$_SESSION['form_submitted'] = false;

// Check if user is logged in and has the correct role
if (!isset($_SESSION['idn'])) {
    header('Location: ../logout.php');
    exit();
}

if ($_SESSION['role'] != "Client2") {
    header('Location: ../index.php');
    exit();
}

// Check if the user has already submitted the form
if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted'] === true) {
    // Redirect to client.php if form was already submitted
    header('Location: client.php');
    exit();
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $clientId = isset($_POST['client_id']) ? $_POST['client_id'] : null;
    $jobTitle = isset($_POST['jobTitle']) ? $_POST['jobTitle'] : '';
    $skills = isset($_POST['skills']) ? $_POST['skills'] : '';
    $jobnature = isset($_POST['jobnature']) ? $_POST['jobnature'] : '';
    $jobterm = isset($_POST['jobterm']) ? $_POST['jobterm'] : '';
    $paymentType = isset($_POST['paymentType']) ? $_POST['paymentType'] : '';
    $hourlyRate = isset($_POST['hourlyRateAmount']) ? $_POST['hourlyRateAmount'] : null;
    $fixedPrice = isset($_POST['fixedPriceAmount']) ? $_POST['fixedPriceAmount'] : null;
    $jobDescription = isset($_POST['jobDescription']) ? $_POST['jobDescription'] : '';
    $qualifications = isset($_POST['qualifications']) ? $_POST['qualifications'] : '';
    $createdAt = date('Y-m-d H:i:s'); // Current timestamp
    $status = 'open'; // Default status

    // Ensure client ID is not null
    if ($clientId === null) {
        $message = "Client ID is missing.";
    } else {
        // Database connection
        $servername = 'localhost';
        $username = 'u320585682_hireskillpro'; // Update this
        $password = 'Mydatabase17'; // Update this
        $dbname = 'u320585682_hireskillpro';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL query
        $sql = "INSERT INTO tblposting (client_idnumber, job_title, skills, job_nature, job_term, payment_type, hourly_rate, fixed_price, job_description, qualifications, created_at, status)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param('ssssssssssss', $clientId, $jobTitle, $skills, $jobnature, $jobterm, $paymentType, $hourlyRate, $fixedPrice, $jobDescription, $qualifications, $createdAt, $status);

        if ($stmt->execute()) {
            // Mark the form as submitted
            $_SESSION['form_submitted'] = true;

            // Redirect to client.php after successful submission
            header('Location: client.php');
            exit();
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/fvlogo.png">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            max-width: 800px;
        }
        .alert {
            display: none; /* Hide alert by default */
        }
        .alert.show {
            display: block; /* Show alert if it has the 'show' class */
        }
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Job Portal</a>
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

<div class="container">
    <h2 class="text-center mb-4">Post a Job</h2>

    <!-- Display alert message -->
    <?php if (!empty($message)) : ?>
        <div id="alertMessage" class="alert alert-info alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <form method="POST" id="jobForm">
        <input type="hidden" name="client_id" value="<?= htmlspecialchars($_SESSION['idn'], ENT_QUOTES, 'UTF-8') ?>">

        <!-- Step 1: Job Title -->
        <div class="step active">
            <div class="mb-3">
                <label for="jobTitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="e.g., Web Developer">
                <p class="text-muted">Enter a clear and descriptive title for the job.</p>
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
        </div>

        <!-- Step 2: Main Skills Required -->
        <div class="step">
            <div class="mb-3">
                <label for="skills" class="form-label">Main Skills Required</label>
                <input type="text" class="form-control" id="skills" name="skills" placeholder="e.g., PHP, JavaScript">
                <p class="text-muted">Specify the key skills needed for the job.</p>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
        </div>

        <!-- Step 3: Job Nature and Scope -->
        <div class="step">
            <div class="mb-3">
                <label for="jobnature" class="form-label">Job Nature</label>
                <select class="form-select" id="jobnature" name="jobnature">
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part-Time</option>
                </select>
                <p class="text-muted">Specify whether the job is full-time or part-time.</p>
            </div>
            <div class="mb-3">
                <label for="jobterm" class="form-label">Job Term</label>
                <input type="date" class="form-control" id="jobterm" name="jobterm">
                <p class="text-muted">Specify the duration of the job.</p>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
        </div>

        <!-- Step 4: Payment -->
        <div class="step">
            <div class="mb-3">
                <label class="form-label">Payment</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentType" id="paymentHourly" value="hourly" checked>
                    <label class="form-check-label" for="paymentHourly">Hourly Budget</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentType" id="paymentFixed" value="fixed">
                    <label class="form-check-label" for="paymentFixed">Fixed Budget</label>
                </div>
                <div id="hourlyRateSection" class="mt-3">
                    <label for="hourlyRateAmount" class="form-label">Hourly Rate</label>
                    <input type="number" class="form-control" id="hourlyRateAmount" name="hourlyRateAmount" placeholder="e.g., 20">
                    <p class="text-muted">Enter the hourly rate you're willing to pay.</p>
                </div>
                <div id="fixedPriceSection" class="mt-3" style="display: none;">
                    <label for="fixedPriceAmount" class="form-label">Fixed Price</label>
                    <input type="number" class="form-control" id="fixedPriceAmount" name="fixedPriceAmount" placeholder="e.g., 500">
                    <p class="text-muted">Enter the total amount you're willing to pay for the entire project.</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
        </div>

        <!-- Step 5: Job Description -->
        <div class="step">
            <div class="mb-3">
                <label for="jobDescription" class="form-label">Job Description</label>
                <textarea class="form-control" id="jobDescription" name="jobDescription" rows="4" placeholder="Provide a detailed description of the job requirements."></textarea>
                <p class="text-muted">Provide a detailed description of the job requirements.</p>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
        </div>

        <!-- Step 6: Qualifications -->
        <div class="step">
            <div class="mb-3">
                <label for="qualifications" class="form-label">Qualifications</label>
                <textarea class="form-control" id="qualifications" name="qualifications" rows="4" placeholder="List any specific qualifications or experience required for this job."></textarea>
                <p class="text-muted">List any specific qualifications or experience required for this job.</p>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        // Show alert message if exists
        if ($('#alertMessage').length) {
            $('#alertMessage').addClass('show');
        }

        $('#jobForm').on('submit', function() {
            $('button[type="submit"]').attr('disabled', 'disabled').text('Submitting...');
        });

        $('input[name="paymentType"]').on('change', function() {
            if ($(this).val() === 'hourly') {
                $('#hourlyRateSection').show();
                $('#fixedPriceSection').hide();
            } else {
                $('#hourlyRateSection').hide();
                $('#fixedPriceSection').show();
            }
        });
    });

    function nextStep() {
        var currentStep = $('.step.active');
        var nextStep = currentStep.next('.step');

        if (nextStep.length) {
            currentStep.removeClass('active');
            nextStep.addClass('active');
        }
    }

    function prevStep() {
        var currentStep = $('.step.active');
        var prevStep = currentStep.prev('.step');

        if (prevStep.length) {
            currentStep.removeClass('active');
            prevStep.addClass('active');
        }
    }
</script>

</body>
</html>