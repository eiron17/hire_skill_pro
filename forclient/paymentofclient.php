<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment Page</title>
    <script src="https://www.paypal.com/sdk/js?client-id=Aef5sXrY5CjFkxJRNsUafRmjrRXaHFK5d8xxuf7gQ3pKXQniZOTTdR6DAnDg00_QmborpZaIG5cFMvuZ"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .payment-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .payment-container h1 {
            margin-bottom: 20px;
        }
        .payment-container input[type="number"] {
            width: 100px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 16px;
        }
        .payment-container #paypal-button-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="payment-container">
        <h1>Pay for Billing</h1>
        <p>Enter Amount: </p>
        <input type="number" id="paymentAmount" placeholder="Enter amount" min="1" step="0.01">
        <div id="paypal-button-container"></div>
    </div>
    <script>
        document.getElementById('paymentAmount').addEventListener('input', function() {
            var paymentAmount = this.value;
            renderPayPalButtons(paymentAmount);
        });

        function renderPayPalButtons(amount) {
            document.getElementById('paypal-button-container').innerHTML = ''; // Clear previous buttons

            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: amount // Use the dynamic amount here
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        fetch('save_transaction.php', {
                            method: 'post',
                            headers: {
                                'content-type': 'application/json'
                            },
                            body: JSON.stringify({
                                transaction_id: details.id,
                                payer_name: details.payer.name.given_name,
                                amount: details.purchase_units[0].amount.value,
                                currency: details.purchase_units[0].amount.currency_code,
                                payment_status: details.status
                            })
                        }).then(response => {
                            if (response.ok) {
                                alert('Transaction completed by ' + details.payer.name.given_name);
                            } else {
                                alert('Transaction could not be saved.');
                            }
                        });
                    });
                },
                onError: function(err) {
                    console.error(err);
                    alert('An error occurred during the transaction.');
                }
            }).render('#paypal-button-container');
        }

        // Initialize PayPal buttons with a default amount
        renderPayPalButtons('10.00');
    </script>
    </div>
</body>
</html>
