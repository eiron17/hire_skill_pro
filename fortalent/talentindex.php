<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireSkillPro</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link href="../css/style-index.css" rel="stylesheet">
    <link rel="icon" type="/image/png" href="../images/fvlogo.png">
    <style></style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border p-2 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="#">
            <img src="../images/fvlogo.png" alt="Logo" class="logo" height="50" width="auto"> <span class="fw-bold">Hire<span class="text-primary">Skill</span>Pro</span>
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
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<span id="notifforadd"></span>
<!-- Hero Section -->
<section id="hero" class="text-dark bg-light py-5 mt-5">
  <div class="container1 p-4 text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="card1">
          <div class="card-body1">
            <h1 class="card-title">Welcome Back to Hire<span class="text-primary">Skill</span>Pro!</h1>
            <p class="card-text">We're glad to have you with us. Continue exploring opportunities or manage your projects seamlessly with HireSkillPro. Your success is just a click away!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Browse Jobs Section -->
<section id="browse-jobs" class="py-5 bg-white">
    <div class="container pt-5">
        <h2 class="text-center mb-4">Browse Jobs</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Web Developer</h5>
                        <p class="card-text">Looking for an experienced web developer to create a responsive e-commerce site.</p>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Remote</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Graphic Designer</h5>
                        <p class="card-text">Seeking a creative graphic designer for branding and marketing materials.</p>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Remote</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Content Writer</h5>
                        <p class="card-text">Need a talented writer for blog posts and website content.</p>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Remote</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary">View More Jobs</a>
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
        </div>
        <div class="col-lg-6">
          <img src="../images/aboutus.jpg" alt="" class="img-fluid">
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

    <!-- Footer Section -->
    <footer class="bg-light text-dark pt-5 pb-4 border-top border-2">
        <div class="row mt-4">
            <div class="col text-center">
                <p>
                    Copyright 2024 All Rights Reserved By:
                    <a href="#" style="text-decoration:none; color: #007bff;">
                        <strong>Hire Skill Pro INC.</strong>
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>

    <script src="bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>

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

</script>
