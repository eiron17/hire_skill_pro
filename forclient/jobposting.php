<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Client2") {
    header('location:../index.php');
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/fvlogo.png">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        .form-control, .form-select {
            margin-bottom: 20px; /* Increased margin for more space */
        }
        .btn {
            font-size: 0.75rem; /* Smaller text size */
            padding: 0.5rem 1rem; /* Smaller padding */
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .navbar {
            margin-bottom: 30px; /* Increased margin for more space */
        }
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
        .step .mb-3 {
            margin-bottom: 20px; /* Increased margin for more space */
        }
        .d-none {
            display: none;
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
<body onload="">
<input type="hidden" id="ccid" value="<?=$_SESSION['idn']?>">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="client.php">Job Portal</a>
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

<span id="notifforadd"></span>

<div class="container mt-2">
    <h2 class="mb-4 text-center">Post a Job</h2>
    <form method="POST" id="jobForm">
        <!-- Step 1: Job Title -->
        <div class="step active">
            <div class="mb-3">
                <label for="jobTitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="jobTitle" name="jobTitle" required>
                <p>Enter a clear and descriptive title for the job.</p>
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary me-2" onclick="nextStep()">Next</button>
            </div>
        </div>
        <!-- Step 2: Main Skills Required -->
        <div class="step">
            <div class="mb-3">
                <label for="skills" class="form-label">Main Skills Required</label>
                <input type="text" class="form-control" id="skills" name="skills" required>
                <p>Specify the key skills needed for the job.</p>
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
                <select class="form-select" id="jobnature" name="jobnature" required>
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part-Time</option>    
                </select>
            </div>
            <div class="mb-3">
                <label for="jobterm" class="form-label">Job Term</label>
                <input type="date" class="form-control" id="jobterm" name="jobterm" required>
                <p>Specify the duration of the job.</p>
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
                    <label for="hourlyRateAmount" class="form-label">Hourly Budget</label>
                    <input type="number" class="form-control" id="hourlyRateAmount" name="hourlyRateAmount" step="0.01" min="0" placeholder="Enter hourly rate in PHP">
                    <p>Enter the hourly rate you are willing to pay.</p>
                </div>
                <div id="fixedPriceSection" class="mt-3 d-none">
                    <label for="fixedPriceAmount" class="form-label">Fixed Budget</label>
                    <input type="number" class="form-control" id="fixedPriceAmount" name="fixedPriceAmount" step="0.01" min="0" placeholder="Enter fixed price in PHP">
                    <p>Enter the total fixed price for the job.</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
        </div>
        <!-- Final Step: Job Description -->
        <div class="step">
            <div class="mb-3">
                <label for="jobDescription" class="form-label">Job Description</label>
                <textarea class="form-control" id="jobDescription" name="jobDescription" rows="4" required></textarea>
                <p>Provide a detailed description of the job responsibilities and requirements.</p>
            </div>
            <div class="mb-3">
                <label for="qualifications" class="form-label">Qualifications</label>
                <input type="text" class="form-control" id="qualifications" name="qualifications" required>
                <p>List the qualifications and skills required for the job.</p>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary"onclick="jobpostingc()"><i class="fas fa-paper-plane"></i> Post Job</button>
            </div>
        </div>
    </form>
</div>

<script>
    function nextStep() {
        const steps = document.querySelectorAll('.step');
        let activeIndex = Array.from(steps).findIndex(step => step.classList.contains('active'));
        if (activeIndex < steps.length - 1) {
            steps[activeIndex].classList.remove('active');
            steps[activeIndex + 1].classList.add('active');
        }
    }

    function prevStep() {
        const steps = document.querySelectorAll('.step');
        let activeIndex = Array.from(steps).findIndex(step => step.classList.contains('active'));
        if (activeIndex > 0) {
            steps[activeIndex].classList.remove('active');
            steps[activeIndex - 1].classList.add('active');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const paymentTypeRadios = document.querySelectorAll('input[name="paymentType"]');
        const hourlyRateSection = document.getElementById('hourlyRateSection');
        const fixedPriceSection = document.getElementById('fixedPriceSection');

        function updatePaymentSections() {
            if (document.getElementById('paymentHourly').checked) {
                hourlyRateSection.classList.remove('d-none');
                fixedPriceSection.classList.add('d-none');
            } else {
                hourlyRateSection.classList.add('d-none');
                fixedPriceSection.classList.remove('d-none');
            }
        }

        paymentTypeRadios.forEach(radio => {
            radio.addEventListener('change', updatePaymentSections);
        });

        // Initialize visibility based on the default selected radio button
        updatePaymentSections();
    });

    function jobpostingc() {
        var ccid = document.getElementById("ccid").value;
    var jobTitle = document.getElementById("jobTitle").value;
    var skills = document.getElementById("skills").value;
    var jobnature = document.getElementById("jobnature").value;
    var jobterm = document.getElementById("jobterm").value;
    var paymentHourly = document.getElementById("paymentHourly").value;
    var hourlyRateAmount = document.getElementById("hourlyRateAmount").value;
    var fixedPriceAmount = document.getElementById("fixedPriceAmount").value;
    var jobDescription = document.getElementById("jobDescription").value;
    var qualifications = document.getElementById("qualifications").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("notifforadd").innerHTML = this.responseText;

            // Apply fade-out effect after 2 seconds
            setTimeout(function() {
                var notif = document.querySelector("#notifforadd .alert");
                if (notif) {
                    notif.classList.add("fade-out");
                    location.reload();
                    // Remove the notification from the DOM after the fade-out animation
                    setTimeout(function() {
                        notif.remove();
                    }, 1000); // Matches the CSS transition duration
                }
            }, 2000);
        }
    }
    xhttp.open("GET", "../ajax/jobposting-ajax_copy.php?ccid=" + ccid + "&&jobTitle=" + jobTitle + "&&skills=" + skills + "&&jobnature=" + jobnature + "&&jobterm=" + jobterm + "&&paymentHourly=" + paymentHourly + "&&hourlyRateAmount=" + hourlyRateAmount + "&&fixedPriceAmount=" + fixedPriceAmount + "&&jobDescription=" + jobDescription + "&&qualifications=" + qualifications, true);
    xhttp.send();
}
</script>

<script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>