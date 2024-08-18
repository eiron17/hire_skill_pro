<?php

include_once '../Class/User.php';
$u = new User();
$ggtid = $_GET['ggtid'];
$jobid = $_GET['job_id'];
$myprofile = $u->selectstatus($ggtid,$jobid); 
   while($row = $myprofile->fetch_assoc()){
    $tstatus = $row['tblinfo_status'];
    $pstatus = $row['tblposting_status'];
    if (isset($_POST['yes'])){

        $pggtid = $_POST['tjid'];
        $pjobid =$_POST['jid'];

        
        include_once '../Class/User.php';
        $u = new User();
        echo $u->updatestatushando($pggtid,$pjobid);
        }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-info-container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-photo {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-photo img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-detail {
            margin-bottom: 15px;
        }
        .profile-detail label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
        <!-- Navbar -->
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
    <div class="container">
        <div class="profile-info-container">
            <h2 class="text-center mb-4">Profile Information</h2>
            <?php
            include_once '../Class/User.php';
            $u = new User();
            $display = $u->displayinfoapplicant($ggtid);
            if ($row = $display->fetch_assoc()) {
                echo '
                <div class="profile-photo">
                    <img src="../images/' . htmlspecialchars($row['profile_photo']) . '" alt="Profile Photo">
                </div>
                <div class="profile-detail">
                    <label>Name:</label>
                    <p>' . htmlspecialchars($row['fname']) . ' ' . htmlspecialchars($row['lname']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Gender:</label>
                    <p>' . htmlspecialchars($row['gender']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Contact Number:</label>
                    <p>' . htmlspecialchars($row['contact_no']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Address:</label>
                    <p>' . htmlspecialchars($row['address']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Employment History:</label>
                    <p>' . htmlspecialchars($row['employment_history']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Education:</label>
                    <p>' . htmlspecialchars($row['education']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Skills:</label>
                    <p>' . htmlspecialchars($row['skills']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Hourly Rate:</label>
                    <p>' . htmlspecialchars($row['hourly_rate']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Availability:</label>
                    <p>' . htmlspecialchars($row['availability']) . '</p>
                </div>
                <div class="profile-detail">
                    <label>Languages:</label>
                    <p>' . htmlspecialchars($row['languages']) . '</p>
                </div>
                ';
            } else {
                echo '<p class="text-center">Profile not found.</p>';
            }
            ?>

            <div class="button-container">
                <button type="button" class="btn btn-success" onclick="">Chat</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal5" onclick="">Hire</button>
                <button type="button" class="btn btn-danger" onclick="">Decline</button>
            </div>
        </div>
<form method="POST">
            <!-- Large Modal -->
<div class="modal fade" id="largeModal5" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="largeModalLabel">Hire Talent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Modal Body Content -->
       <input type="hidden" name="tjid" value="<?=$ggtid?>">
       <input type="hidden" name="jid" value="<?=$jobid?>">
       <input type="hidden" name="tstatus" value="<?=$tstatus?>">
       <input type="hidden" name="pstatus" value="<?=$pstatus?>">
       <p>Want to Hire this Talent?</p>



      </div>
      <div class="modal-footer">
        <button type="submit" name="yes" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</form>


    </div>
    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>

    </script>
</body>
</html>
