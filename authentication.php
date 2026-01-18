<?php
// Include the database connection
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize POST data
    $first_name      = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name       = mysqli_real_escape_string($conn, $_POST['last_name']);
    $age             = mysqli_real_escape_string($conn, $_POST['age']);
    $gender          = mysqli_real_escape_string($conn, $_POST['gender']);
    $address         = mysqli_real_escape_string($conn, $_POST['address']);
    $contact_number  = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $medical_history = mysqli_real_escape_string($conn, $_POST['medical_history']);

    // Insert data into patients table
    $sql = "INSERT INTO patients 
            (first_name, last_name, age, gender, address, contact_number, medical_history)
            VALUES 
            ('$first_name', '$last_name', '$age', '$gender', '$address', '$contact_number', '$medical_history')";

    if (mysqli_query($conn, $sql)) {
        echo "New patient record created successfully<br>";
        echo "<strong style='font-size:20px;'>Thanks for submitting our form</strong>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
