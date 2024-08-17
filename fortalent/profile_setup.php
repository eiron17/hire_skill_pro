
<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Freelancer") {
    header('location:../index.php');
}

if (isset($_POST['btnnext'])){
    if ($_SESSION['role'] == 'Talent') {
        echo '
        <script>
            window.open("fortalent/talent.php", "_self");
        </script>
        ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Platform - Profile Setup</title>
    
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
    
    <input type="hidden" id="tttid" name="tttid" value="<?= $ttid=$_SESSION['idn'];?>">
    <div class="container">
        <h2 class="text-center mb-5">Complete Your Profile</h2>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Profile Photo & Personal Info</h4>
                    <div class="row">
                        <div class="col-md-4">
                        <input type="hidden" id="ttid" name="ttid" value="<?= $ttid=$_SESSION['idn'];?>">
                            <label for="file">Profile Picture</label>
                            <input type="file" accept="image/jpeg, image/png, image/gif" class="form-control" name="file">
                        </div>

                    </div>
                    <span id="notifforadd"></span>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="tfname" name="tfname" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Middle Name:</label>
                            <input type="text" class="form-control" id="tmname" name="tmname" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="tlname" name="tlname" required>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Gender Selection -->
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender:</label>
                            <select class="form-select" id="tgender" name="tgender" required>
                                <option value="" disabled selected>Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <!-- Contact Number Input -->
                        <div class="col-md-4">
                            <label for="contact_number" class="form-label">Contact Number:</label>
                            <input type="number" class="form-control" id="tcontact_number" name="tcontact_number" pattern="[0-9]{10}" placeholder="e.g., 09123456789" required>
                        </div>
                        <!-- Address Input -->
                        <div class="col-md-4">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" class="form-control" id="taddress" name="taddress" placeholder="Enter your address" required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Employment History & Education</h4>
                    <!-- Employment History Section -->
                    <div class="mb-3">
                        <label for="employment_history" class="form-label">Employment History</label>
                        <textarea class="form-control" id="temployment_history" name="temployment_history" rows="5" placeholder="Provide details about your previous jobs, including job title, company name, duration, and key responsibilities." required></textarea>
                        <small class="form-text text-muted">Example: Software Developer at XYZ Corp. (Jan 2020 - Present): Developed web applications using PHP and JavaScript, collaborated with a team of developers, etc.</small>
                    </div>
                    <!-- Education Section -->
                    <div class="mb-3">
                        <label for="education" class="form-label">Education</label>
                        <textarea class="form-control" id="teducation" name="teducation" rows="5" placeholder="Provide details about your educational background, including degrees earned, institutions attended, and graduation dates." required></textarea>
                        <small class="form-text text-muted">Example: Bachelor of Science in Computer Science, ABC University, Graduated: 2023.</small>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Skills & Availability</h4>
                    <!-- Skills Section -->
                    <div class="mb-3">
                        <label for="skills" class="form-label">Skills</label>
                        <input type="text" class="form-control" id="tskills" name="tskills" placeholder="Enter your skills separated by commas (e.g., PHP, JavaScript, HTML)" required>
                        <small class="form-text text-muted">List your top skills relevant to the job you're applying for.</small>
                    </div>
                    <!-- Hourly Rate Section -->
                    <div class="mb-3">
                        <label for="hourly_rate" class="form-label">Hourly Rate</label>
                        <input type="number" class="form-control" id="thourly_rate" name="thourly_rate" placeholder="Enter your hourly rate in USD (e.g., 25)" step="0.01" min="0" required>
                        <small class="form-text text-muted">Specify your desired hourly rate in USD.</small>
                    </div>
                    <!-- Availability Section -->
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Availability:</label>
                            <select class="form-select" id="tavailability" name="tavailability" required>
                                <option value="" disabled selected>Select your availability</option>
                                <option value="full-time">Full-Time (40+ hours per week)</option>
                                <option value="part-time">Part-Time (20-39 hours per week)</option>
                                <option value="as-needed">As-Needed (less than 20 hours per week)</option>
                            </select>
                            <small class="form-text text-muted">Choose how many hours per week you can commit.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Location & Languages</h4>
                    <!-- Location Section -->
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="tlocation" name="tlocation" placeholder="Enter your current city and country (e.g., New York, USA)" required>
                        <small class="form-text text-muted">Provide your current city and country.</small>
                    </div>
                    <!-- Languages Section -->
                    <div class="mb-3">
                        <label for="languages" class="form-label">Languages</label>
                        <input type="text" class="form-control" id="tlanguages" name="tlanguages" placeholder="List languages you speak (e.g., English, Spanish, Mandarin)" required>
                        <small class="form-text text-muted">List all languages you are proficient in.</small>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-end pe-5 mb-3">
                       <button type="submit" name="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="../../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
    function setuppro(){
        var ttid = document.getElementById("ttid").value;
        var tprofile_photo = document.getElementById("tprofile_photo").value;
        var tfname = document.getElementById("tfname").value;
        var tmname = document.getElementById("tmname").value;
        var tlname = document.getElementById("tlname").value;
        var tgender = document.getElementById("tgender").value;
        var tcontact_number = document.getElementById("tcontact_number").value;
        var taddress = document.getElementById("taddress").value;
        var temployment_history = document.getElementById("temployment_history").value;
        var teducation = document.getElementById("teducation").value;
        var tskills = document.getElementById("tskills").value;
        var thourly_rate = document.getElementById("thourly_rate").value;
        var tavailability = document.getElementById("tavailability").value;
        var tlocation = document.getElementById("tlocation").value;
        var tlanguages = document.getElementById("tlanguages").value;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("notifforadd").innerHTML = this.responseText;
                updaterolet();
                window.open('sbexam.php');
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
        xhttp.open("GET", "../ajax/aprofile_setup.php?ttid=" + ttid +  "&tprofile_photo=" + tprofile_photo + "&tfname=" + tfname + "&tmname=" + tmname + "&tlname=" + tlname + "&tgender=" + tgender + "&tcontact_number=" + tcontact_number + "&taddress=" + taddress + "&temployment_history=" + temployment_history + "&teducation=" + teducation + "&tskills=" + tskills + "&thourly_rate=" + thourly_rate + "&tavailability=" + tavailability + "&tlocation=" + tlocation + "&tlanguages=" + tlanguages, true);
        xhttp.send();
    }

    function updaterolet(){
    var tttid = document.getElementById("tttid").value;
   

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
    xhttp.open("GET", "../ajax/updatetr.php?tttid=" + tttid, true);
    xhttp.send();
}
</script>
