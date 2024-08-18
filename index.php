
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireSkillPro</title>
    <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link href="css/style-index.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/fvlogo.png">

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border p-2 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="index.php">
            <img src="images/fvlogo.png" alt="Logo" class="logo" height="50" width="auto"> <span class="fw-bold">Hire<span class="text-primary">Skill</span>Pro</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-primary me-2 d-none d-lg-block" href="login.php">Log In</a>
                </li>
                <li class="nav-item me-5">
                    <a class="btn btn-primary d-none d-lg-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">Register</a>
                </li>
                <!-- Mobile Buttons -->
                <li class="nav-item d-lg-none mt-2">
                    <a class="btn btn-primary d-block w-25" href="#">Log In</a>
                </li>
                <li class="nav-item d-lg-none mt-2">
                    <a class="btn btn-primary d-block w-25" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<span id="notifforadd"></span>
<!-- Hero Section -->
<section id="hero" class="text-dark bg-light py-5 mt-5 ">
  <div class="container1 p-4 text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="card1">
          <div class="card-body1">
            <h1 class="card-title">Welcome to Hire<span class="text-primary">Skill</span>Pro!</h1>
            <p class="card-text">At HireSkillPro, we connect talented freelancers with businesses that need their skills. Whether you're looking for work or hiring, HireSkillPro makes it easy.</p>
            <a href="#" class="btn btn-primary fw-bold me-2 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">Join Us?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
  <div class="container pt-5">
    <row class="text-center"><h2>About <span class="">Hire<span class="text-primary">Skill</span>Pro</span></h2></row>
      <div class="row mt-4">
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

<!-- For Clients Section -->
<section id="forclient" class="container my-5">
    <div class="section-wrapper shadow-lg p-4 bg-white">
        <h2 class="text-center mb-4">For Clients</h2>
        <p class="text-center mb-4">Discover the advantages of working with top freelancers and independent professionals to achieve your project goals efficiently and effectively.</p>
        
        <div class="row">
            <!-- Example Client Benefit Card -->
            <div class="col-md-4 mb-4">
                <div class="card border-info shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Access to Top Talent</h5>
                        <p class="card-text">Find skilled professionals with expertise across various industries to meet your specific project needs.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card border-warning shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Flexible Hiring</h5>
                        <p class="card-text">Choose between short-term or long-term engagements based on your project requirements and budget.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card border-secondary shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Streamlined Process</h5>
                        <p class="card-text">Enjoy a smooth and efficient hiring process with our user-friendly platform and dedicated support team.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button Section -->
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary fw-bold me-2 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">Join Us?</a>
        </div>
    </div>
</section>





<!-- For Talent Section -->
<section id="fortalent" class="container my-5">
    <div class="section-wrapper shadow-lg p-4">
        <h2 class="text-center mb-4">For Talents</h2>
        <p class="text-center mb-4">Work with the largest network of independent professionals and get things done—from quick turnarounds to big transformations.</p>
        
        <div class="row">
            <!-- Example Talent Find Card -->
            <div class="col-md-4 mb-4">
                <div class="card border-primary shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Quick Turnarounds</h5>
                        <p class="card-text">Connect with professionals who can deliver high-quality work in a short amount of time, helping you meet tight deadlines with ease.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card border-success shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Expert Professionals</h5>
                        <p class="card-text">Access a diverse pool of talent with specialized skills to handle any project, from creative design to technical development.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card border-danger shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Big Transformations</h5>
                        <p class="card-text">Partner with top-tier professionals to drive significant changes and achieve your business goals with innovative solutions.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button Section -->
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary fw-bold me-2 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">Join Us?</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="bg-light py-5">
  <div class="container pt-5">
    <h2 class="text-center">Our Services</h2>
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="card-title">Hire<span class="text-primary">Skill</span>Pro</h3>
            <p class="card-text">
              HireSkillPro is your platform for connecting with skilled freelancers and individuals who have valuable skills. Whether you’re looking to hire for a project or showcase your own expertise, we provide the tools and community to make it happen.
            </p>
            <span id="moreText" class="more-text" style="display: none;">
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
            <button id="readMoreBtn" class="read-more-btn btn btn-primary">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5">
        <div class="container pt-5">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                            What is HireSkillPro?
                        </button>
                    </h2>
                    <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            HireSkillPro is a platform that connects skilled professionals with top employers. We provide a secure and efficient way to find and offer services.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                            How do I create an account?
                        </button>
                    </h2>
                    <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can create an account by clicking on the Sign Up link and filling in the required information. It's quick and easy!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                            Is there a fee to use HireSkillPro?
                        </button>
                    </h2>
                    <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Signing up and creating a profile on HireSkillPro is free. We charge a small commission on successful transactions to maintain our platform.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container pt-5">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="contactName" class="form-label">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text" id="contactNameIcon"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="contactname" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contactEmail" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text" id="contactEmailIcon"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="contactemail" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contactMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="contactmessage" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary btn-block" onclick="contactus()">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
<footer class="bg-light text-dark pt-5 pb-4 border-top border-2">
    <div class="container">
        <div class="row">

            <!-- About Us Section -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <a href="#about" style="text-decoration: none; color: #007bff;">
                    <h5 class="text-uppercase mb-4 font-weight-bold">About Us</h5>
                </a>
                <hr class="mb-4">
                <p>At HireSkillPro, we connect talented freelancers with businesses that need their skills. Whether you're looking for work or hiring, HireSkillPro makes it easy.</p>
            </div>

            <!-- For Clients Section -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <a href="#forclient" style="text-decoration: none; color: #007bff;">
                    <h5 class="text-uppercase mb-4 font-weight-bold">For Clients</h5>
                </a>
                <hr class="mb-4">
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="text-dark" style="text-decoration:none">Hire a Worker</a></p>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="text-dark" style="text-decoration:none">Post a Job</a></p>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="text-dark" style="text-decoration:none">Talent Marketplace</a></p>
            </div>

            <!-- For Talent Section -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <a href="#fortalent" style="text-decoration: none; color: #007bff;">
                    <h5 class="text-uppercase mb-4 font-weight-bold">For Talent</h5>
                </a>
                <hr class="mb-4">
                <p><a  href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="text-dark" style="text-decoration:none">How to Work</a></p>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="text-dark" style="text-decoration:none">Find Work Jobs Worldwide</a></p>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="text-dark" style="text-decoration:none">Direct Contracts</a></p>
            </div>

            <!-- Contact Section -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #007bff;">Contact</h5>
                <hr class="mb-4">
                <p><i class="fas fa-home me-3"></i> Lipa City, Batangas</p>
                <p><i class="fas fa-envelope me-3"></i> <a href="mailto:info@hireskillpro.com" class="text-dark" style="text-decoration:none">info@hireskillpro.com</a></p>
                <p><i class="fas fa-phone me-3"></i> +63 09000000000</p>
                <p><i class="fas fa-print me-3"></i> +63 09000000000</p>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="row mt-4">
            <div class="col text-center">
                <p>
                    &copy; 2024 All Rights Reserved By:
                    <a href="index.php" style="text-decoration:none; color: #007bff;">
                        <strong>Hire Skill Pro INC.</strong>
                    </a>
                </p>
            </div>
        </div>

        <!-- Feedback Button -->
        <div id="feedback-button" onclick="openFeedbackForm()" class="text-center mt-4">
            <button class="btn btn-primary">Feedback</button>
        </div>

        <!-- Feedback Form -->
        <div id="feedback-form" style="display: none;">
            <div class="form-content p-4" style="background: #fff; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <span class="close-btn" onclick="closeFeedbackForm()" style="cursor: pointer; float: right; font-size: 1.5rem;">&times;</span>
                <h2>Feedback</h2>
                <form>
                    <textarea placeholder="Your feedback..." rows="5" id="feedbackbox" class="form-control mb-3"></textarea>
                    <button type="button" class="btn btn-primary" onclick="webfeedback()">Submit</button>
                </form>
            </div>
        </div>
    </div>
</footer>


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
          <button type="submit" class="btn btn-secondary" onclick="webfeedback()" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>

</body>

</html>
<script>
document.getElementById('readMoreBtn').addEventListener('click', function() {
  var moreText = document.getElementById('moreText');
  var btnText = document.getElementById('readMoreBtn');

  if (moreText.style.display === 'none' || moreText.style.display === '') {
      moreText.style.display = 'block';
      btnText.textContent = 'Read Less';
  } else {
      moreText.style.display = 'none';
      btnText.textContent = 'Read More';
  }
});
function openFeedbackForm() {
	document.getElementById('feedback-form').style.display = 'block';
	document.getElementById('feedback-button').style.display = 'none';
}

function closeFeedbackForm() {
	document.getElementById('feedback-form').style.display = 'none';
	document.getElementById('feedback-button').style.display = 'block';
}

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

function contactus() {
    var contactname = document.getElementById("contactname").value;
    var contactemail = document.getElementById("contactemail").value;
    var contactmessage = document.getElementById("contactmessage").value;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("notifforadd").innerHTML = this.responseText;
            // Reset form fields
            resetconusForm();
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
    xhttp.open("GET", "ajax/contactus-ajax.php?contactname=" + contactname + "&contactemail=" + contactemail + "&contactmessage=" + contactmessage, true);
    xhttp.send();
}
// Function to reset client sign-up form fields
function resetconusForm() {
    document.getElementById("contactname").value = '';
    document.getElementById("contactemail").value = '';
    document.getElementById("contactmessage").value = '';
}

function webfeedback() {
    var feedbackbox = document.getElementById("feedbackbox").value;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("notifforadd").innerHTML = this.responseText;
            // Reset form fields
            closeFeedbackForm();
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
    xhttp.open("GET", "ajax/web-feedback.php?feedbackbox=" + feedbackbox, true);
    xhttp.send();
}
</script>

