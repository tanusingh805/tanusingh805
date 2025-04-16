<!-- <!DOCTYPE html>
<html>
<head>
    <title>Database Connection Test</title>
</head>
<body>

<h2>Check MySQL Connection</h2>

<form method="POST" action="">
    <input type="submit" name="s1" value="Connect">
</form> -->

<?php
if (isset($_POST['s1'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_database";

    // Create connection
    $conn = new mysqli("localhost", "root", "", "my_database");

    // Check connection
    if ($conn->connect_error) {
        die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
    } else {
        echo "<p style='color:green;'>Connected successfully!</p>";
    }
}

// Get form data safely
$t1 = $_POST['name'] ?? '';
$t2 = $_POST['email'] ?? '';
$t3 = $_POST['destination'] ?? '';
$t4 = $_POST['date_time'] ?? '';
$t5 = $_POST['travelers'] ?? '';
$t6 = $_POST['phone'] ?? '';
$t7 = $_POST['requirements'] ?? '';

// Insert query
$qry = "INSERT INTO bookingss (name, email, destination, date_time, travelers, phone, requirements)
        VALUES ('$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7')";

if ($conn->query($qry) === TRUE) {
    echo "<h2>Booking Confirmed!</h2>";
    echo "<p><strong>Name:</strong> $t1</p>";
    echo "<p><strong>Email:</strong> $t2</p>";
    echo "<p><strong>Destination:</strong> $t3</p>";
    echo "<p><strong>Date & Time:</strong> $t4</p>";
    echo "<p><strong>Travelers:</strong> $t5</p>";
    echo "<p><strong>Phone:</strong> $t6</p>";
    echo "<p><strong>Special Requirements:</strong> $t7</p>";
} else {
    echo "Error: " . $conn->error;
}
?>

<!-- </body>
</html> -->









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
$t1 = $_POST['name'] ?? '';
$t2 = $_POST['email'] ?? '';
$t3 = $_POST['destination'] ?? '';
$t4 = $_POST['date_time'] ?? '';
$t5 = $_POST['travelers'] ?? '';
$t6 = $_POST['phone'] ?? '';
$t7 = $_POST['requirements'] ?? '';

// Insert query
$qry = "INSERT INTO bookingss (name, email, destination, date_time, travelers, phone, requirements)
        VALUES ('$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7')";

if ($conn->query($qry) === TRUE) {
    echo "<h2>Booking Confirmed!</h2>";
    echo "<p><strong>Name:</strong> $t1</p>";
    echo "<p><strong>Email:</strong> $t2</p>";
    echo "<p><strong>Destination:</strong> $t3</p>";
    echo "<p><strong>Date & Time:</strong> $t4</p>";
    echo "<p><strong>Travelers:</strong> $t5</p>";
    echo "<p><strong>Phone:</strong> $t6</p>";
    echo "<p><strong>Special Requirements:</strong> $t7</p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>







<?php
// Start PHP code at the top
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database"; // <-- replace this with your actual DB name

$conn = new mysqli("localhost", "root", "", "my_database");

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bookingConfirmed = false;
$bookingDetails = [];

if (isset($_POST['s1'])) {
    // Get form data safely
    $t1 = $_POST['name'] ?? '';
    $t2 = $_POST['email'] ?? '';
    $t3 = $_POST['destination'] ?? '';
    $t4 = $_POST['date_time'] ?? '';
    $t5 = $_POST['travelers'] ?? '';
    $t6 = $_POST['phone'] ?? '';
    $t7 = $_POST['requirements'] ?? '';

    // Insert query
    $qry = "INSERT INTO bookingss (name, email, destination, date_time, travelers, phone, requirements)
            VALUES ('$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7')";

    if ($conn->query($qry) === TRUE) {
        $bookingConfirmed = true;
        $bookingDetails = compact('t1', 't2', 't3', 't4', 't5', 't6', 't7');
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
echo "<div style='padding:20px; font-family:sans-serif;'>
                <h2>✅ Booking Confirmed!</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Destination:</strong> $destination</p>
                <p><strong>Date & Time:</strong> $date_time</p>
                <p><strong>Travelers:</strong> $travelers</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Special Requirements:</strong> $requirements</p>
                <a href='booking.html'>Back to Booking</a>
              </div>";

    $conn->close();


$conn->close();
?>


























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
$sql = "INSERT INTO bookings (name, email, destination, date_time, travelers, phone, requirements)
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
<form></form>