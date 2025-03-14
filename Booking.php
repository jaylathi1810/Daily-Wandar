<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Ticket Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .container h1 {
            text-align: center;
            color: #6a11cb;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input, .form-group select, .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group button {
            background: #6a11cb;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        .form-group button:hover {
            background: #2575fc;
        }

        .ticket-info, .payment-section, .thank-you-section {
            display: none;
            margin-top: 20px;
        }

        .ticket-info {
            background: #f4f4f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        .ticket-info h2 {
            color: #2575fc;
        }

        .payment-buttons button {
            margin: 10px 5px;
            padding: 10px 20px;
            border: none;
            background: #6a11cb;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .payment-buttons button:hover {
            background: #2575fc;
        }

        .thank-you-message {
            text-align: center;
            color: #2575fc;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Your Ticket</h1>
        <form id="ticketForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="date">Travel Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <select id="destination" name="destination" onchange="toggleOtherDestination()" required>
                    <option value="">Select Destination</option>
                    <option value="Paris">Paris</option>
                    <option value="New York">New York</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="Sydney">Sydney</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group" id="otherDestinationGroup" style="display: none;">
                <label for="otherDestination">Other Destination</label>
                <input type="text" id="otherDestination" name="otherDestination" placeholder="Specify your destination">
            </div>
            <div class="form-group">
                <label for="quantity">Number of Tickets</label>
                <input type="number" id="quantity" name="quantity" min="1" placeholder="Enter ticket quantity" required>
            </div>
            <div class="form-group">
                <button type="submit">Proceed</button>
            </div>
        </form>

        <div class="ticket-info" id="ticketInfo">
            <h2>Booking Summary</h2>
            <p><strong>Name:</strong> <span id="summaryName"></span></p>
            <p><strong>Email:</strong> <span id="summaryEmail"></span></p>
            <p><strong>Date:</strong> <span id="summaryDate"></span></p>
            <p><strong>Destination:</strong> <span id="summaryDestination"></span></p>
            <p><strong>Tickets:</strong> <span id="summaryQuantity"></span></p>
            <div class="form-group">
                <button onclick="showPaymentSection()">Proceed to Payment</button>
            </div>
        </div>

        <div class="payment-section" id="paymentSection">
            <h3>Select Payment Method</h3>
            <div class="payment-buttons">
                <button onclick="completePayment()">Pay with PayPal</button>
                <button onclick="completePayment()">Pay with Stripe</button>
                <button onclick="completePayment()">Pay with Razorpay</button>
            </div>
        </div>

        <div class="thank-you-section" id="thankYouSection">
            <p class="thank-you-message">Thank you for booking! Have a great journey!</p>
        </div>
    </div>

    <script>
        const form = document.getElementById("ticketForm");
        const ticketInfo = document.getElementById("ticketInfo");
        const paymentSection = document.getElementById("paymentSection");
        const thankYouSection = document.getElementById("thankYouSection");
        const otherDestinationGroup = document.getElementById("otherDestinationGroup");
        const destination = document.getElementById("destination");

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const date = document.getElementById("date").value;
            const destinationValue = destination.value === "Other"
                ? document.getElementById("otherDestination").value
                : destination.value;
            const quantity = document.getElementById("quantity").value;

            document.getElementById("summaryName").textContent = name;
            document.getElementById("summaryEmail").textContent = email;
            document.getElementById("summaryDate").textContent = date;
            document.getElementById("summaryDestination").textContent = destinationValue;
            document.getElementById("summaryQuantity").textContent = quantity;

            ticketInfo.style.display = "block";
            paymentSection.style.display = "none";
            thankYouSection.style.display = "none";
        });

        function toggleOtherDestination() {
            if (destination.value === "Other") {
                otherDestinationGroup.style.display = "block";
            } else {
                otherDestinationGroup.style.display = "none";
            }
        }

        function showPaymentSection() {
            paymentSection.style.display = "block";
            ticketInfo.style.display = "none";
        }

        function completePayment() {
            thankYouSection.style.display = "block";
            paymentSection.style.display = "none";

            setTimeout(() => {
                resetScreen();
            }, 3000); // Reset the screen after 3 seconds
        }

        function resetScreen() {
            form.reset();
            ticketInfo.style.display = "none";
            thankYouSection.style.display = "none";
        }
    </script>
</body>
</html>
