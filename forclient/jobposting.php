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
        }
        .form-control, .form-select {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .navbar {
            margin-bottom: 20px;
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
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="#">Job Portal</a>
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
    <h2 class="mb-3 text-center">Post a Job</h2>
    <form method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="jobTitle" class="form-label">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="category" class="form-label">Job Nature</label>
                    <input type="text" class="form-control" id="jobnature" name="jobnature" required>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="jobDescription" class="form-label">Job Description</label>
            <textarea class="form-control" id="jobDescription" name="jobDescription" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="Qualifications" class="form-label">Qualifications</label>
            <input type="text" class="form-control" id="qualifications" name="qualifications" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="payment" class="form-label">Payment</label>
                    <input type="number" class="form-control" id="payment" name="payment" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="jobterm" class="form-label">Job term</label>
                    <input type="date" class="form-control" id="jobterm" name="jobterm" required>
                </div>
            </div>
        </div>
        <div class="d-grid mt-2">
            <button type="button" class="btn btn-primary btn-block" onclick="jobpostingc()"><i class="fas fa-paper-plane"></i> Post Job</button>
        </div>
    </form>
</div>

<script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
    function jobpostingc() {
    var jobTitle = document.getElementById("jobTitle").value;
    var jobnature = document.getElementById("jobnature").value;
    var jobDescription = document.getElementById("jobDescription").value;
    var qualifications = document.getElementById("qualifications").value;
    var payment = document.getElementById("payment").value;
    var jobterm = document.getElementById("jobterm").value;

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
        }
    }
    xhttp.open("GET", "../ajax/jobposting-ajax.php?jobTitle=" + jobTitle + "&&jobnature=" + jobnature + "&&jobDescription=" + jobDescription + "&&qualifications=" + qualifications + "&&payment=" + payment + "&&jobterm=" + jobterm, true);
    xhttp.send();
}
</script>
