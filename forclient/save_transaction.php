<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hireskillpro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the transaction data
$input = file_get_contents("php://input");
$data = json_decode($input, true);

$transaction_id = $data['transaction_id'];
$payer_name = $data['payer_name'];
$amount = $data['amount'];
$currency = $data['currency'];
$payment_status = $data['payment_status'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO transactions (transaction_id, payer_name, amount, currency, payment_status) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssdss", $transaction_id, $payer_name, $amount, $currency, $payment_status);

if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(["message" => "Transaction saved successfully"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => "Error saving transaction"]);
}

$stmt->close();
$conn->close();
?>
