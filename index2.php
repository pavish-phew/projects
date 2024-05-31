<?php
// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add a car to the parking lot
function addCar($owner, $car, $licensePlate, $entryDate, $exitDate) {
    global $conn;
    $sql = "INSERT INTO park (Owner, Phone_no, License_plate, Entry_date, Exit_date) VALUES ('$owner', '$car', '$licensePlate', '$entryDate', '$exitDate')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $owner = $_POST["owner"];
    $car = $_POST["car"];
    $licensePlate = $_POST["licensePlate"];
    $entryDate = $_POST["entryDate"];
    $exitDate = $_POST["exitDate"];

    // Add the car to the parking lot
    if (addCar($owner, $car, $licensePlate, $entryDate, $exitDate)) {
        echo "Vehicle added successfully";
    } else {
        echo "Error adding vehicle";
    }
}

// Close connection
$conn->close();
?>
