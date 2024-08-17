<?php
session_start();
if (!isset($_SESSION['idn'])) {
    header('location:../logout.php');
}
if ($_SESSION['role'] != "Talent") {
    header('location:../index.php');
}

include('Database.php'); // Ensure this file connects to your database

// Initialize variables
$q1 = $q2 = $q3 = $result = '';
$showResult = false;
$showModal = false;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $q1 = $_POST['q1'] ?? '';
    $q2 = $_POST['q2'] ?? '';
    $q3 = $_POST['q3'] ?? '';
    $answers = [$q1, $q2, $q3];

    // Correct answers
    $correctAnswers = ['12', '8', '24'];
    $totalQuestions = count($correctAnswers);
    $correctCount = 0;

    // Calculate score
    foreach ($answers as $index => $answer) {
        if ($answer === $correctAnswers[$index]) {
            $correctCount++;
        }
    }

    // Calculate percentage and result
    $percentage = ($correctCount / $totalQuestions) * 100;
    $result = $percentage >= 80 ? 'Passed' : 'Failed';

    // Assuming user ID is stored in a session or passed through a form
    $userId = $_SESSION['user_id'] ?? 1; // replace with your user identification method

    // Prepare SQL query to update the database
    $sql = "UPDATE tblinfo SET q1 = ?, q2 = ?, q3 = ?, result = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssi', $q1, $q2, $q3, $result, $userId);

    if ($stmt->execute()) {
        $showResult = true;
        $resultText = "You got $percentage% correct. You have $result.";
        $showModal = true;
    } else {
        $resultText = "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
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
        .btn-check {
            margin-right: 10px;
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
            <!-- Exam Management -->
            <div class="col-12 mb-4">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h5>Exam Management</h5>
                    </div>
                    <div class="card-body bg-white text-dark">
                        <!-- IQ Test -->
                        <h5>IQ Test</h5>
                        <form id="iq-test-form" method="POST">
                            <div class="row">
                                <!-- Mathematics Test -->
                                <div class="col-md-12 mb-4">
                                    <h6>Mathematics Test</h6>
                                    <div class="mb-3">
                                        <label for="math-question1" class="form-label">What is 5 + 7?</label>
                                        <input type="text" name="q1" class="form-control" id="math-question1" value="<?= htmlspecialchars($q1) ?>" placeholder="Your Answer">
                                    </div>
                                    <div class="mb-3">
                                        <label for="math-question2" class="form-label">What is 12 - 4?</label>
                                        <input type="text" name="q2" class="form-control" id="math-question2" value="<?= htmlspecialchars($q2) ?>" placeholder="Your Answer">
                                    </div>
                                    <div class="mb-3">
                                        <label for="math-question3" class="form-label">What is 8 x 3?</label>
                                        <input type="text" name="q3" class="form-control" id="math-question3" value="<?= htmlspecialchars($q3) ?>" placeholder="Your Answer">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary btn-check" onclick="checkAnswers()">Check Answers</button>
                                <button type="submit" class="btn btn-primary">Submit All Tests</button>
                            </div>
                        </form>
                        <?php if ($showResult): ?>
                        <div id="result" class="mt-4">
                            <h4 class="text-success">Test Results:</h4>
                            <p id="result-text"><?= htmlspecialchars($resultText) ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script>
        function checkAnswers() {
            // Correct answers for Mathematics Test
            const correctAnswers = ['12', '8', '24'];

            // Get user answers for Mathematics Test
            const mathAnswers = [
                document.getElementById('math-question1').value.trim(),
                document.getElementById('math-question2').value.trim(),
                document.getElementById('math-question3').value.trim()
            ];

            // Calculate score
            let totalQuestions = correctAnswers.length;
            let correctCount = 0;

            mathAnswers.forEach((answer, index) => {
                if (answer === correctAnswers[index]) {
                    correctCount++;
                }
            });

            // Calculate percentage
            let percentage = (correctCount / totalQuestions) * 100;
            let resultText = percentage >= 80 ? 'Passed' : 'Failed';

            // Display result
            document.getElementById('result-text').innerText = `You got ${percentage}% correct. You have ${resultText}.`;
            document.getElementById('result').classList.remove('d-none');
        }

        // Show modal if form is submitted and result is available
        <?php if ($showModal): ?>
        document.addEventListener('DOMContentLoaded', function () {
            var completionModal = new bootstrap.Modal(document.getElementById('completionModal'));
            completionModal.show();
        });
        <?php endif; ?>
    </script>
    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
