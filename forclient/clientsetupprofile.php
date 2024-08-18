<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
    exit;
}
if ($_SESSION['role'] != "Client") {
    header('location:../index.php');
    exit;
}

include('Database.php'); // Ensure this file connects to your database

$successMessage = '';
$errorMessage = '';
$showModal = false; // Variable to control modal display

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Platform - Profile Setup</title>
    
    <link href="../../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        .form-control,
        .form-select {
            border-radius: .375rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            margin-top: 20px;
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
    <div class="container">
        <h2 class="text-center mb-5">Complete Your Profile</h2>
        <?php if (!empty($successMessage)): ?>
        <div class="alert alert-success" role="alert">
            <?= htmlspecialchars($successMessage) ?>
        </div>
        <?php endif; ?>
        <?php if (!empty($errorMessage)): ?>
        <div class="alert alert-danger" role="alert">
            <?= htmlspecialchars($errorMessage) ?>
        </div>
        <?php endif; ?>
        <form  method="POST" action="upload.php" enctype="multipart/form-data">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Profile Photo & Personal Info</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="profile_photo" class="form-label">Profile Photo</label>
                            <input type="file" class="form-control" id="tprofile_photo" name="file">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <input type="hidden" class="form-control" id="erp" name="erp" value="<?=$_SESSION['idn']?>">
                        <div class="col-md-4">
                            <label for="fname" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="tfname" name="fname" required>
                        </div>
                        <div class="col-md-4">
                            <label for="mname" class="form-label">Middle Name:</label>
                            <input type="text" class="form-control" id="tmname" name="mname">
                        </div>
                        <div class="col-md-4">
                            <label for="lname" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="tlname" name="lname" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="contact_number" class="form-label">Contact Number:</label>
                            <input type="tel" class="form-control" id="tcontact_number" name="contact_number" placeholder="e.g., 09123456789" required>
                        </div>
                        <div class="col-md-4">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" class="form-control" id="taddress" name="address" required>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="languages" class="form-label">Languages</label>
                        <input type="text" class="form-control" id="tlanguages" name="languages" placeholder="List languages you speak (e.g., English, Spanish, Mandarin)" required>
                        <small class="form-text text-muted">List all languages you are proficient in.</small>
                    </div>
                    <div class="text-end mb-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <span id="notifforadd"></span>
    <!-- Modal -->
    <div class="modal fade" id="completionModal" tabindex="-1" aria-labelledby="completionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="completionModalLabel">Profile Setup Completed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You have completed setting up your profile. Proceed to re-login.
                </div>
                <div class="modal-footer">
                    <a href="../login.php" class="btn btn-primary">Re-login</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($showModal): ?>
                var myModal = new bootstrap.Modal(document.getElementById('completionModal'), {
                    keyboard: false
                });
                myModal.show();
            <?php endif; ?>
        });

        function updateerp(){
            var erp = document.getElementById("erp").value;

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
            xhttp.open("GET", "../ajax/updateerp.php?erp=" + erp, true);
            xhttp.send();
        }
    </script>
</body>
</html>
