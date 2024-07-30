<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <style>
        .profile-picture {
            border-radius: 50%;
            max-width: 150px;
            max-height: 150px;
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }
        .navbar-brand img {
            height: 50px;
            width: auto;
        }
        .btn-group-vertical > .btn {
            margin-bottom: 0.5rem;
        }
        .pos {
            position: fixed;
            width: 100%;
            top: 40%;
            z-index: 2;
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
<!-- Main Content -->
<div class="container mt-4">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="row">
                <!-- Profile Card -->
                <div class="col-lg-3 mb-4 text-center">
                    <img src="images/fvlogo.png" alt="Profile Picture" class="profile-picture">
                    <h5 class="mt-3">CLIENT'S NAME</h5>
                    <p class="text-muted mb-1 fs-6">Hire Skill Pro INC</p>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Change Profile Picture</button>
                    <div class="mt-3">
                        <input type="file" id="pfile" accept="image/*" class="form-control">
                    </div>
                </div>
                <!-- Profile Section -->
                <div class="col-lg-9">
                    <h3 class="fs-4 mb-4 text-primary">My Profile</h3>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" id="cname" placeholder="Enter Name" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" id="cemail" placeholder="Enter Email" class="form-control">
                        </div>
                        <!-- Skills and Experience Section -->
                        <h3 class="fs-4 mb-4 text-primary">Skills and Experience</h3>
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="skills" class="form-label">Skills</label>
                                <input type="text" id="cskills" placeholder="Enter Skills" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="experience" class="form-label">Experience</label>
                                <input type="text" id="cexperience" placeholder="Enter Experience" class="form-control">
                            </div>
                        </div>

                        <!-- Contact Details Section -->
                        <h3 class="fs-4 mb-4 text-primary">Contact Details</h3>
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number*</label>
                                <input type="text" id="cphone" placeholder="Enter Phone Number" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Address*</label>
                                <input type="text" id="caddress" placeholder="Enter Address" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City*</label>
                                <input type="text" id="ccity" placeholder="Enter City" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="country" class="form-label">Country*</label>
                                <input type="text" id="ccountry" placeholder="Enter Country" class="form-control">
                            </div>
                        </div>
                        <button type="button" onclick="cprofile()" class="btn btn-primary">Save Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Details Section -->
    <div class="card border-0 shadow mt-4">
        <div class="card-body">
            <h3 class="fs-4 mb-4 text-primary">Payment Details</h3>
            <form>
                <div class="mb-4">
                    <label for="card-number" class="form-label">Card Number*</label>
                    <input type="text" id="card-number" placeholder="Enter Card Number" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="billing-address" class="form-label">Billing Address*</label>
                    <input type="text" id="billing-address" placeholder="Enter Billing Address" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save Payment Details</button>
            </form>
        </div>
    </div>
</div>

<script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    function cprofile() {
        var cname = document.getElementById("cname").value;
        var cemail = document.getElementById("cemail").value;
        var cskills = document.getElementById("cskills").value;
        var cexperience = document.getElementById("cexperience").value;
        var cphone = document.getElementById("cphone").value;
        var caddress = document.getElementById("caddress").value;
        var ccity = document.getElementById("ccity").value;
        var ccountry = document.getElementById("ccountry").value;
        
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
        };
        xhttp.open("GET", "../ajax/client-profile.php?cname=" + cname + "&cemail=" + cemail + "&cskills=" + cskills + "&cexperience=" + cexperience + "&cphone=" + cphone + "&caddress=" + caddress + "&ccity=" + ccity + "&ccountry=" + ccountry, true);
        xhttp.send();
    }
</script>
</body>
</html>
