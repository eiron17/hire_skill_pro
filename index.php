<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HireSkillPro</title>
    <!-- Link to Bootstrap CSS file -->
    <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Link to Font Awesome CSS file -->
    <link href="fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/fvlogo.png">
  <style>
    /* styles.css */

/* Navbar */
.navbar {
  transition: background-color 0.3s ease;
}
.navbar-brand {
  font-weight: bold;
}

.navbar-collapse{
  color:#333; 
}
.navbar-nav .nav-link {
  padding: 0.5rem 1rem;
}

.navbar-nav .nav-link:hover {
  color: #007bff;
}

.container1{
  margin: 50px;
  background-color: rgba(10, 10, 255, 0.037);
}

/* Hero Section */
#hero {
  min-height: 100vh;
  border: 2px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #f8f9fa;
}

/* About Section */
#about {
  background-color: #f8f9fa;
  padding: 4rem 0;
  min-height: 100vh;
}

#about h2 {
  margin-bottom: 2rem;
  color: #333;
}

#about p {
  color: #666;
}

/* Services Section */
#services {
  min-height: 100vh;
  border: 2px solid #ccc;
  padding: 4rem 0;
}

#services h2 {
  margin-bottom: 2rem;
  color: #333;
}

.card {
  border: none;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: translateY(-10px);
}

.card-title {
  font-size: 1.5rem;
  font-weight: bold;
}

.card-text {
  color: #666;
}

/* Contact Section */
#contact {
  background-color: #f8f9fa;
  padding: 4rem 0;
  min-height: 100vh;
}

#contact h2 {
  margin-bottom: 2rem;
  color: #333;
}

#contact form {
  margin-bottom: 2rem;
}

.form-label {
  font-weight: bold;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}


/* Footer */
.footer {
  padding: 60px 10px;
  background-color: #222;
  color: #fff;
}

.footer_top {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-bottom: 30px;
}

.footer_top_list {
  flex: 1;
  margin: 0 10px;
  min-width: 200px;
}

.footer_top_list h5 {
  font-size: 1.2rem;
  font-weight: 500;
  margin-bottom: 15px;
}

.footer_top_list ul {
  list-style: none;
  padding: 0;
}

.footer_top_list ul li {
  margin-bottom: 10px;
}

.footer_top_list ul li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer_top_list ul li a:hover {
  color: #007bff;
}

.fmid {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 30px;
}

.fmleft {
  text-align: center;
}

.fmlist {
  display: flex;
  justify-content: center;
  gap: 15px;
}

.footer_icons {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #333;
  transition: background-color 0.3s ease;
}

.footer_icons i {
  font-size: 20px;
  color: #fff;
}

.footer_icons:hover {
  background-color: #007bff;
}

.fbot {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.fbot p {
  margin: 0;
}

.flist {
  display: flex;
  gap: 15px;
  list-style: none;
  padding: 0;
  margin: 0;
}

.flist li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.flist li a:hover {
  color: #007bff;
}

/* Responsive */
@media (max-width: 768px) {
  .footer_top {
    flex-direction: column;
  }

  .fbot {
    flex-direction: column;
    text-align: center;
  }
}


/* Responsive */
@media (max-width: 768px) {
  #hero {
    min-height: 50vh;
  }
}
.text-container {
    width: 60%;
    margin: auto;
}

.more-text {
    display: none;
}

.read-more-btn {
    display: block;
    margin: 20px 0;
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

.read-more-btn:hover {
    background-color: #0056b3;
}


  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fw-bold navbar-light bg-light fixed-top border-bottom border-2 p-3">
  <div class="container">
    <a class="navbar-brand text-dark" href="#"><img src="images/fvlogo.png" alt="Logo" class="logo" height="50" width="auto"> Hire<span class="text-primary">Skill</span>Pro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Log-In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">Sign-Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Hero Section -->
<section id="hero" class="text-dark py-5">
  <div class="container1 shadow-sm p-4">
  <span id="notifforadd"></span>
    <div class="row">
      <div class="col-md-6">
        <div class="card1">
          <div class="card-body1">
            <h1 class="card-title">Welcome to Hire<span class="text-primary">Skill</span>Pro!</h1>
            <p class="card-text">At HireSkillPro, we connect talented freelancers with businesses that need their skills. Whether you're looking for work or hiring, HireSkillPro makes it easy.</p>
            <a href="#" class="btn btn-primary fw-bold me-2 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">Join Us?</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card1 shadow">
          <div class="card-body1">
            <img src="images/b3.jpg" alt="" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
  <div class="container pt-5">
    <row class="text-center"><h2>About <span class="fw-bold">Hire<span class="text-primary">Skill</span>Pro</span></h2></row>
      <div class="row">
        <div class="col-lg-6">
          <h3 class="card-title">Objective: Empowering Skills, Empowering Success</h3>
          <p class="card-text">At HireSkillPro, our mission is to empower individuals with skills worldwide. We connect skilled freelancers and anyone with talents to businesses that need their expertise. Our platform is user-friendly, making it easy for individuals to showcase their skills and for businesses to find the right talent.</p>
          <h3 class="card-title">What Makes Us Different?</h3>
          <p class="card-text">Easy to Use: HireSkillPro makes it simple to hire and collaborate.

Safe and Secure: We prioritize your safety with secure transactions and protecting your information.

Diverse Talent: Discover experts in many fields ready to assist with your projects.

Always Improving: We continually add new features to enhance our platform.</p>
          <h3 class="card-title">Why Choose HireSkillPro?</h3>
          <p class="card-text">Join our community to explore opportunities and connect with talented individuals. Experience a better way to work with HireSkillPro.</p>
          <a href="#" class="btn btn-primary fw-bold me-2 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">Join Us?</a>
        </div>
        <div class="col-lg-6">
          <img src="images/aboutus.jpg" alt="" class="img-fluid">
        </div>
      </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="bg-light py-5">
  <div class="container pt-5">
    <h2 class="text-center">Our Services</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="card-title">Hire<span class="text-primary">Skill</span>Pro</h3>
            <p class="card-text">
              HireSkillPro is your platform for connecting with skilled freelancers and individuals who have valuable skills. Whether you’re looking to hire for a project or showcase your own expertise, we provide the tools and community to make it happen.
            </p>
            <span id="moreText" class="more-text">
              <h3 class="card-title">What We Offer:</h3>
              <p class="card-text">
                Connecting Talent: Easily find freelancers and skilled individuals across various fields.<br>
                Secure Transactions: Ensure safe payments and protect your personal information.<br>
                Wide Range of Skills: Discover experts in diverse industries ready to support your projects.<br>
                Continuous Improvement: We’re always adding new features to enhance your experience.
              </p>
              <h3 class="card-title">How It Works:</h3>
              <p class="card-text">
                Search and Hire<br>
                Find Freelancers: Clients search for freelancers based on skills, experience, and rates to find the perfect match for their projects.<br>
                Project Management Tools<br>
                Communication: Use direct messaging to discuss project details and stay connected.<br>
                Time Tracking: Built-in tools help monitor progress and keep track of work hours.<br>
                Work Tracking and Payment<br>
                Secure Payment Processing: Encrypted transactions ensure your payments are safe and reliable.<br>
                Time Tracking Program: Transparent payment processes by tracking work hours accurately.<br>
                Feedback and Reviews<br>
                Build Reputations: Clients and freelancers leave feedback for each other, helping to build trust and credibility.<br>
                Support<br>
                Customer Support: Dedicated support team available to resolve any issues and assist with your needs.<br>
                Profile Management<br>
                Freelancer Profiles: Freelancers showcase their skills, experience, and rates, allowing clients to make informed hiring decisions.
              </p>
            </span>
            <button id="readMoreBtn" class="read-more-btn">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section -->
<section id="contact" class="py-5">
  <div class="container pt-5">
    <h2 class="text-center">Contact Us</h2>
    <div class="row">
      <div class="col-md-6">
        <form id="contactreset">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3" required></textarea>
          </div>
          <button type="button" id="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="bg-primary text-white p-4">
          <h3>Contact Information</h3>
          <p>Address: Pinagkawitan, Lipa City, Batangas</p>
          <p>Website:<span?><a href="HireSkillPro.online" class="text-light"> HireSkillPro.online</a></span></p>
          <p>Phone: 09686299932</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<!-- Footer -->
<footer class="footer bg-dark text-white">
  <div class="container">
    <div class="footer_top">
      <div class="footer_top_list">
        <h5>For Clients</h5>
        <ul>
          <li><a href="#">How to Hire</a></li>
          <li><a href="#">Talent Marketplace</a></li>
          <li><a href="#">Direct Contracts</a></li>
          <li><a href="#">Hire Worldwide</a></li>
        </ul>
      </div>
      <div class="footer_top_list">
        <h5>For Talent</h5>
        <ul>
          <li><a href="#">How to Find Work</a></li>
          <li><a href="#">Direct Contracts</a></li>
          <li><a href="#">Find Freelance Jobs Worldwide</a></li>
        </ul>
      </div>
      <div class="footer_top_list">
        <h5>Resources</h5>
        <ul>
          <li><a href="#">Help & Support</a></li>
          <li><a href="#">HireSkillPro Reviews</a></li>
          <li><a href="#">Community</a></li>
          <li><a href="#">Free Business Tools</a></li>
        </ul>
      </div>
      <div class="footer_top_list">
        <h5>Company</h5>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Trust, Safety & Security</a></li>
        </ul>
      </div>
    </div>
    <div class="fmid">
      <div class="fmleft">
        <h5>Follow Us</h5>
        <div class="fmlist">
          <a href="#" class="footer_icons"><i class="fab fa-facebook"></i></a>
          <a href="#" class="footer_icons"><i class="fab fa-linkedin"></i></a>
          <a href="#" class="footer_icons"><i class="fab fa-twitter"></i></a>
          <a href="#" class="footer_icons"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="fbot">
      <p>2024 HireSkillPro Inc.</p>
      <ul class="flist">
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Cookie Settings</a></li>
        <li><a href="#">Accessibility</a></li>
      </ul>
    </div>
  </div>
</footer>


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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Join as a client or freelancer</h5>
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
                <a href="#" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#freelancermodalt">Sign-Up as Freelacer?</a>
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
    <div class="modal-dialog">
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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign-Up as Freelancer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">First Name :</label>
                <input type="text" class="form-control" id="ffname" name="fname" required>
                <label class="form-label">Last Name :</label>
                <input type="text" class="form-control" id="flname" name="lname" required>
                <label class="form-label">Email :</label>
                <input type="email" class="form-control" id="fsemail" name="semail" required autocomplete="username">
                <label class="form-label">Password :</label>
                <input type="password" class="form-control" id="fpass" name="pass" required autocomplete="new-password">
                <label class="form-label">Confirm Password :</label>
                <input type="password" class="form-control" id="fconp" name="conp" required autocomplete="new-password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="savefreelancer" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>

  
  <form id="loginform">
  <!-- Modal 2 -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Log-in</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" class="form-control" id="lemail" name="lemail" required autocomplete="username">
                <label class="form-label">Password :</label>
               <input type="password" class="form-control" id="lpass" name="lpass" required autocomplete="current-password">
            </div>
        </div>
          <div class="modal-footer">
            <button type="button" id="loginu" class="btn btn-primary">Log-in</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
      </div>
    </div>
  </div>
  <!-- modal 2 end -->
 

</body>
</html>
<script>
document.getElementById('readMoreBtn').addEventListener('click', function() {
  var moreText = document.getElementById('moreText');
  var btnText = document.getElementById('readMoreBtn');

  if (moreText.style.display === 'none') {
      moreText.style.display = 'block';
      btnText.textContent = 'Read Less';
  } else {
      moreText.style.display = 'none';
      btnText.textContent = 'Read More';
  }
});

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
</script>


