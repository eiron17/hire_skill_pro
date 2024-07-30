<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Dashboard</title>
    <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">Job Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link me-5" href="talent.php"><i class="fas fa-arrow-left"></i> Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Talent Dashboard</h2>
        <div class="row">
            <!-- Hourly Rate -->
            <div class="col-12 mb-4">
                <div class="card border-primary">
                    <div class="card-body bg-white text-dark">
                        <h5 class="card-header bg-primary text-white">Hourly Rate</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Hourly Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample Row -->
                                <tr>
                                    <td>$25/hour</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#hourlyRateModal" onclick="setHourlyRate('25')">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Daily Rate -->
            <div class="col-12 mb-4">
                <div class="card border-primary">
                    <div class="card-body bg-white text-dark">
                        <h5 class="card-header bg-primary text-white">Daily Rate</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Daily Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample Row -->
                                <tr>
                                    <td>$200/day</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#dailyRateModal" onclick="setDailyRate('200')">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Promotional Rate -->
            <div class="col-12 mb-4">
                <div class="card border-primary">
                    <div class="card-body bg-white text-dark">
                        <h5 class="card-header bg-primary text-white">Promotional Rate</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Plan</th>
                                    <th>Plan Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample Rows -->
                                <tr>
                                    <td>Standard Plan</td>
                                    <td>$25/hour</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#promoRateModal" onclick="setPromoRate('Standard Plan', '25')">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Premium Plan</td>
                                    <td>$50/hour</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#promoRateModal" onclick="setPromoRate('Premium Plan', '50')">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Basic Plan</td>
                                    <td>$50/hour</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#promoRateModal" onclick="setPromoRate('Basic Plan', '50')">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Hourly Rate -->
    <div class="modal fade" id="hourlyRateModal" tabindex="-1" aria-labelledby="hourlyRateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hourlyRateModalLabel">Edit Hourly Rate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="hourlyRateForm">
                        <div class="mb-3">
                            <label for="hourlyRate" class="form-label">Hourly Rate*</label>
                            <input type="number" id="hourlyRate" name="hourlyRate" placeholder="Enter hourly rate" class="form-control" step="0.01" min="0" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="hourlyRateForm" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Daily Rate -->
    <div class="modal fade" id="dailyRateModal" tabindex="-1" aria-labelledby="dailyRateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dailyRateModalLabel">Edit Daily Rate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="dailyRateForm">
                        <div class="mb-3">
                            <label for="dailyRate" class="form-label">Daily Rate*</label>
                            <input type="number" id="dailyRate" name="dailyRate" placeholder="Enter daily rate" class="form-control" step="0.01" min="0" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="dailyRateForm" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Promotional Rate -->
    <div class="modal fade" id="promoRateModal" tabindex="-1" aria-labelledby="promoRateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="promoRateModalLabel">Edit Promotional Rate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="promoRateForm">
                        <div class="mb-3">
                            <label for="promoName" class="form-label">Promo Name*</label>
                            <input type="text" id="promoName" name="promoName" placeholder="Enter promo name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="promoPrice" class="form-label">Promo Price*</label>
                            <input type="number" id="promoPrice" name="promoPrice" placeholder="Enter promo price" class="form-control" step="0.01" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="promoDescription" class="form-label">Promo Description*</label>
                            <textarea id="promoDescription" name="promoDescription" rows="3" placeholder="Enter promo description" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="promoValidity" class="form-label">Validity Period*</label>
                            <input type="text" id="promoValidity" name="promoValidity" placeholder="Enter validity period" class="form-control" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="promoRateForm" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        function setHourlyRate(rate) {
            document.getElementById('hourlyRate').value = rate;
        }

        function setDailyRate(rate) {
            document.getElementById('dailyRate').value = rate;
        }

        function setPromoRate(plan, price) {
            document.getElementById('promoName').value = plan;
            document.getElementById('promoPrice').value = price;
            // Optional: Set default values for description and validity if needed
            document.getElementById('promoDescription').value = ''; // Placeholder
            document.getElementById('promoValidity').value = ''; // Placeholder
        }
    </script>
</body>
</html>
