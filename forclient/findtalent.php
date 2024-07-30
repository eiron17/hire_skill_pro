<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Talent</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .filter-section {
            margin-bottom: 20px;
        }
        .filter-section .form-control, .filter-section .form-select {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Client Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="client_dashboard.php"><i class="fas fa-arrow-left"></i> Back</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h2 class="mb-4 text-center">Find Talent</h2>

    <div class="filter-section">
        <form action="find_talent.php" method="get">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="search" placeholder="Search by name or skill">
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="category">
                        <option value="">Select Category</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Writing">Writing</option>
                        <!-- Add more categories as needed -->
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="location">
                        <option value="">Select Location</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="UK">UK</option>
                        <!-- Add more locations as needed -->
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search"></i> Search</button>
                </div>
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Location</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Talent Profile Row -->
                <tr>
                    <td>
                        <img src="path/to/profile-pic.jpg" class="img-fluid rounded-circle" alt="Talent Profile Picture" width="50">
                    </td>
                    <td>John Doe</td>
                    <td>Web Development, PHP, JavaScript</td>
                    <td>USA</td>
                    <td>
                        <a href="profile_details.php?id=1" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> View Profile</a>
                    </td>
                </tr>
                <!-- Repeat this row for each talent profile -->
            </tbody>
        </table>
    </div>
</div>

<script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
