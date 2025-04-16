<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database"; // make sure this is correct

$conn = new mysqli("localhost", "root", "", "my_database");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$destination = $_POST['destination'] ?? '';
$date_time = $_POST['date_time'] ?? '';
$travelers = $_POST['travelers'] ?? '';
$phone = $_POST['phone'] ?? '';
$requirements = $_POST['requirements'] ?? '';


// Insert query
$sql = "INSERT INTO bookingss (name, email, destination, date_time, travelers, phone, requirements)
        VALUES ('$name', '$email', '$destination', '$date_time', '$travelers', '$phone', '$requirements')";

if ($conn->query($sql) === TRUE) {
    // echo "<h2>Booking Confirmed!</h2>";
    // echo "<p><strong>Name:</strong> $name </p>";
    // echo "<p><strong>Email:</strong> $email</p>";
    // echo "<p><strong>Destination:</strong> $destination</p>";
    // echo "<p><strong>Date & Time:</strong> $date_time</p>";
    // echo "<p><strong>Travelers:</strong> $travelers</p>";
    // echo "<p><strong>Phone:</strong> $phone</p>";
    // echo "<p><strong>Special Requirements:</strong> $requirements</p>";


    echo '
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white">
                <h2 class="mb-0">Booking Confirmed!</h2>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> ' . $name . '</p>
                <p><strong>Email:</strong> ' . $email . '</p>
                <p><strong>Destination:</strong> ' . $destination . '</p>
                <p><strong>Date & Time:</strong> ' . $date_time . '</p>
                <p><strong>Travelers:</strong> ' . $travelers . '</p>
                <p><strong>Phone:</strong> ' . $phone . '</p>
                <p><strong>Special Requirements:</strong> ' . $requirements . '</p>
                <div class="text-center mt-4">
                    <a href="booking.html" class="btn btn-secondary">Make another booking</a>
                    <a href="booking.html" class="btn btn-secondary">Pay online</a>
                </div>
            </div>
        </div>
    </div>
    ';

} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
