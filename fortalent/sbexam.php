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
            <!-- Exam Management -->
            <div class="col-12 mb-4">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h5>Exam Management</h5>
                    </div>
                    <div class="card-body bg-white text-dark">
                        <a type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#iqTestModal">Take IQ Test</a>
                        <!-- Additional Tests can be added here in a similar fashion -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- IQ Test Modal -->
    <div class="modal fade" id="iqTestModal" tabindex="-1" aria-labelledby="iqTestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="iqTestModalLabel">IQ Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="iq-test-form">
                        <div class="mb-4">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mathTestModal">Take the Mathematics Test</a>
                        </div>
                        <div class="mb-4">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#englishTestModal">Take the English Test</a>
                        </div>
                        <div class="mb-4">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#digitalTestModal">Take the Digital Test</a>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" id="submitTestButton">Submit Test</button>
                        </div>
                    </form>
                    <div id="result" class="mt-4 d-none">
                        <h4 class="text-success">Test Results:</h4>
                        <p id="result-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mathematics Test Modal -->
    <div class="modal fade" id="mathTestModal" tabindex="-1" aria-labelledby="mathTestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mathTestModalLabel">Mathematics Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="math-test-form">
                        <div class="mb-4">
                            <label for="math-question1" class="form-label">What is 5 + 7?</label>
                            <input type="text" class="form-control" id="math-question1" placeholder="Your Answer">
                        </div>
                        <div class="mb-4">
                            <label for="math-question2" class="form-label">What is 12 - 4?</label>
                            <input type="text" class="form-control" id="math-question2" placeholder="Your Answer">
                        </div>
                        <div class="mb-4">
                            <label for="math-question3" class="form-label">What is 8 x 3?</label>
                            <input type="text" class="form-control" id="math-question3" placeholder="Your Answer">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" id="submitMathTestButton">Submit Test</button>
                        </div>
                    </form>
                    <div id="math-result" class="mt-4 d-none">
                        <h4 class="text-success">Test Results:</h4>
                        <p id="math-result-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- English Test Modal -->
    <div class="modal fade" id="englishTestModal" tabindex="-1" aria-labelledby="englishTestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="englishTestModalLabel">English Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="english-test-form">
                        <div class="mb-4">
                            <label for="english-question1" class="form-label">What is the synonym of 'happy'?</label>
                            <input type="text" class="form-control" id="english-question1" placeholder="Your Answer">
                        </div>
                        <div class="mb-4">
                            <label for="english-question2" class="form-label">Complete the sentence: 'She ____ to the store.'</label>
                            <input type="text" class="form-control" id="english-question2" placeholder="Your Answer">
                        </div>
                        <div class="mb-4">
                            <label for="english-question3" class="form-label">What is the opposite of 'difficult'?</label>
                            <input type="text" class="form-control" id="english-question3" placeholder="Your Answer">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" id="submitEnglishTestButton">Submit Test</button>
                        </div>
                    </form>
                    <div id="english-result" class="mt-4 d-none">
                        <h4 class="text-success">Test Results:</h4>
                        <p id="english-result-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Digital Test Modal -->
    <div class="modal fade" id="digitalTestModal" tabindex="-1" aria-labelledby="digitalTestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="digitalTestModalLabel">Digital Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="digital-test-form">
                        <div class="mb-4">
                            <label for="digital-question1" class="form-label">What is 1010 in binary?</label>
                            <input type="text" class="form-control" id="digital-question1" placeholder="Your Answer">
                        </div>
                        <div class="mb-4">
                            <label for="digital-question2" class="form-label">What is the HTML tag for a hyperlink?</label>
                            <input type="text" class="form-control" id="digital-question2" placeholder="Your Answer">
                        </div>
                        <div class="mb-4">
                            <label for="digital-question3" class="form-label">What does CSS stand for?</label>
                            <input type="text" class="form-control" id="digital-question3" placeholder="Your Answer">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" id="submitDigitalTestButton">Submit Test</button>
                        </div>
                    </form>
                    <div id="digital-result" class="mt-4 d-none">
                        <h4 class="text-success">Test Results:</h4>
                        <p id="digital-result-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('submitMathTestButton').addEventListener('click', function() {
            var mathQuestion1 = document.getElementById('math-question1').value;
            var mathQuestion2 = document.getElementById('math-question2').value;
            var mathQuestion3 = document.getElementById('math-question3').value;

            var mathResultText = 'Your Answers:\n' +
                'Question 1: ' + mathQuestion1 + '\n' +
                'Question 2: ' + mathQuestion2 + '\n' +
                'Question 3: ' + mathQuestion3;

            document.getElementById('math-result-text').innerText = mathResultText;
            document.getElementById('math-result').classList.remove('d-none');
        });

        document.getElementById('submitEnglishTestButton').addEventListener('click', function() {
            var englishQuestion1 = document.getElementById('english-question1').value;
            var englishQuestion2 = document.getElementById('english-question2').value;
            var englishQuestion3 = document.getElementById('english-question3').value;

            var englishResultText = 'Your Answers:\n' +
                'Question 1: ' + englishQuestion1 + '\n' +
                'Question 2: ' + englishQuestion2 + '\n' +
                'Question 3: ' + englishQuestion3;

            document.getElementById('english-result-text').innerText = englishResultText;
            document.getElementById('english-result').classList.remove('d-none');
        });

        document.getElementById('submitDigitalTestButton').addEventListener('click', function() {
            var digitalQuestion1 = document.getElementById('digital-question1').value;
            var digitalQuestion2 = document.getElementById('digital-question2').value;
            var digitalQuestion3 = document.getElementById('digital-question3').value;

            var digitalResultText = 'Your Answers:\n' +
                'Question 1: ' + digitalQuestion1 + '\n' +
                'Question 2: ' + digitalQuestion2 + '\n' +
                'Question 3: ' + digitalQuestion3;

            document.getElementById('digital-result-text').innerText = digitalResultText;
            document.getElementById('digital-result').classList.remove('d-none');
        });
    </script>
</body>
</html>
