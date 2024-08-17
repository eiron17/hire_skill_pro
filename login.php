<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireSkillPro - Login</title>
    <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link href="css/style-login.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/fvlogo.png">
</head>
<body>
<span id="notifforadd"></span>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card shadow-lg login-card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Hire<span class="text-primary">Skill</span>Pro</h2>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                    <input type="text" class="form-control" id="username" name="username" required placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Your Password">
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="btnlogin"class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p class="mb-0">Don't have an account? <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal3">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>

<form id="signupnreset">
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign-Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">First Name :</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
                <label class="form-label">Last Name :</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
                <label class="form-label">Email :</label>
                <input type="email" class="form-control" id="semail" name="semail" required autocomplete="username">
                <label class="form-label">Password :</label>
                <input type="password" class="form-control" id="pass" name="pass" required autocomplete="new-password">
  
            </div>
        </div>
          <div class="modal-footer">
            <button type="button" id="saveaccount" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <!-- modal end-->
  </form>

<form id="signup">
  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Join as a Client or Talent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
           
          <div class="row">
            <div class="col-md-6">
                <div class="border border-primary p-4 m-4">
                  <H1 class="text-primary"><i class="fa-solid fa-user-tie"></i></H1>
                  <a href="#" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#clientmodalt">Sign-Up as Client?</a>
                </div>
            </div>
            <div class="col-md-6">
              <div class="border border-primary p-4 m-4">
                <h1 class="text-primary"><i class="fa-solid fa-user"></i></h1>
                <a href="#" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#freelancermodalt">Sign-Up as Talent?</a>
              </div>
            </div>
          </div>

        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <!-- modal end-->
</form>

<!-- Client Signup Form -->
<form id="clientmodal">
  <!-- Modal -->
  <div class="modal fade" id="clientmodalt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign-Up as Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">First Name :</label>
                <input type="text" class="form-control" id="cfname" name="fname" required>
                <label class="form-label">Last Name :</label>
                <input type="text" class="form-control" id="clname" name="lname" required>
                <label class="form-label">Email :</label>
                <input type="email" class="form-control" id="csemail" name="semail" required>
                <label class="form-label">Password :</label>
                <input type="password" class="form-control" id="cpass" name="pass" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="saveclient" onclick="clientsignin()" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </form>

<!-- Freelancer Signup Form -->
<form id="freelancermodal">
  <!-- Modal -->
  <div class="modal fade" id="freelancermodalt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign-Up as Talent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">First Name :</label>
                <input type="text" class="form-control" id="sfname" name="sfname" required>
                <label class="form-label">Last Name :</label>
                <input type="text" class="form-control" id="slname" name="slname" required>
                <label class="form-label">Email :</label>
                <input type="email" class="form-control" id="fsemail" name="fsemail" required autocomplete="username">
                <label class="form-label">Password :</label>
                <input type="password" class="form-control" id="spass" name="spass" required autocomplete="new-password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="savefreelancer" onclick="freelancersignin()" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>
<script>
function clientsignin() {
    var cfname = document.getElementById("cfname").value;
    var clname = document.getElementById("clname").value;
    var csemail = document.getElementById("csemail").value;
    var cpass = document.getElementById("cpass").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("notifforadd").innerHTML = this.responseText;
            // Reset form fields
            resetClientForm();
            // Close modal after a delay
            setTimeout(closealert, 2000);
            function closealert() {
                var btnclose = document.getElementById("btnclose");
                if (btnclose) {
                    btnclose.click();
                }
            }
        }
    };
    xhttp.open("GET", "ajax/clientsignin.php?cfname=" + cfname + "&&clname=" + clname + "&&csemail=" + csemail + "&&cpass=" + cpass, true);
    xhttp.send();
}

// Function to reset client sign-up form fields
function resetClientForm() {
    document.getElementById("cfname").value = '';
    document.getElementById("clname").value = '';
    document.getElementById("csemail").value = '';
    document.getElementById("cpass").value = '';
}

function freelancersignin() {
    var sfname = document.getElementById("sfname").value;
    var slname = document.getElementById("slname").value;
    var fsemail = document.getElementById("fsemail").value;
    var spass = document.getElementById("spass").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("notifforadd").innerHTML = this.responseText;
            // Reset form fields
            resetfreeForm();
            // Close modal after a delay
            setTimeout(closealert, 2000);
            function closealert() {
                var btnclose = document.getElementById("btnclose");
                if (btnclose) {
                    btnclose.click();
                }
            }
        }
    };
    xhttp.open("GET", "ajax/freelancersignin.php?sfname=" + sfname + "&&slname=" + slname + "&&fsemail=" + fsemail + "&&spass=" + spass, true);
    xhttp.send();
}

// Function to reset client sign-up form fields
function resetfreeForm() {
    document.getElementById("sfname").value = '';
    document.getElementById("slname").value = '';
    document.getElementById("fsemail").value = '';
    document.getElementById("spass").value = '';
}
</script>

<?php

include_once 'Class/User.php';

if (isset($_POST['btnlogin'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $u = new User();
    $data = $u->login($un, $pw);
    
    if ($row = $data->fetch_assoc()) {
        $_SESSION['role'] = $row['role'];
        $_SESSION['idn'] = $row['idnumber'];
        $_SESSION['status'] = $row['status'];
        
        switch ($row['role']) {
            case 'Admin':
                echo '
                <script>
                    window.open("admin/adminpage.php", "_self");
                </script>
                ';
                break;
                
            case 'Client2':
                if ($row['status'] == '1') {
                    echo '
                    <script>
                        window.open("forclient/client.php", "_self");
                    </script>
                    ';
                } else {
                    echo '
                    <script>
                        alert("ACCESS TO THIS ACCOUNT IS DENIED");
                    </script>
                    ';
                }
                break;

            case 'Client':
                if ($row['status'] == '1') {
                    echo '
                    <script>
                        window.open("forclient/clientsetupprofile.php", "_self");
                    </script>
                    ';
                } else {
                    echo '
                    <script>
                        alert("ACCESS TO THIS ACCOUNT IS DENIED");
                    </script>
                    ';
                }
                break;
                
            case 'Talent':
                if ($row['status'] == '1') {
                    echo '
                    <script>
                        window.open("fortalent/talent.php", "_self");
                    </script>
                    ';
                } else {
                    echo '
                    <script>
                        alert("ACCESS TO THIS ACCOUNT IS DENIED");
                    </script>
                    ';
                }
                break;

            case 'Freelancer':
                if ($row['status'] == '1') {
                    echo '
                    <script>
                        window.open("fortalent/profile_setup.php", "_self");
                    </script>
                    ';
                } else {
                    echo '
                    <script>
                        alert("ACCESS TO THIS ACCOUNT IS DENIED");
                    </script>
                    ';
                }
                break;

            default:
                echo '
                <script>
                    alert("ACCESS TO THIS ACCOUNT IS DENIED");
                </script>
                ';
                break;
        }
    } else {
        echo '
        <script>
            alert("INVALID USERNAME OR PASSWORD");
        </script>
        ';
    }
}
?>

