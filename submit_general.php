<?php
include "db.php"; 

// Initialize variables for the UI
$status = "";
$message = "";
$alertClass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name      = trim($_POST['first_name']);
    $last_name       = trim($_POST['last_name']);
    $age             = intval($_POST['age']);
    $gender          = $_POST['gender'];
    $address         = trim($_POST['address']);
    $contact_number  = trim($_POST['contact_number']);
    $medical_history = trim($_POST['medical_history']);

    // Validation
    if (empty($first_name) || empty($last_name) || empty($address) || empty($gender)) {
        $status = "Error";
        $message = "All required fields must be filled.";
        $alertClass = "error-box";
    } elseif (!preg_match('/^(97|98)\d{8}$/', $contact_number)) {
        $status = "Invalid Input";
        $message = "Phone number must be 10 digits starting with 97 or 98.";
        $alertClass = "error-box";
    } else {
        // OFFICIAL SECURITY: Prepared Statements
        $stmt = $conn->prepare("INSERT INTO patients (first_name, last_name, age, gender, address, contact_number, medical_history) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss", $first_name, $last_name, $age, $gender, $address, $contact_number, $medical_history);

        if ($stmt->execute()) {
            $status = "Success";
            $message = "New patient record created successfully. We have received your information.";
            $alertClass = "success-box";
        } else {
            $status = "Database Error";
            $message = "Something went wrong. Please try again later.";
            $alertClass = "error-box";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission Status | Helping Hand Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <style>
        .status-container { padding: 100px 20px; text-align: center; background: #f4f7f6; min-height: 70vh; }
        .status-card { background: white; max-width: 500px; margin: 0 auto; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .success-box h2 { color: #28a745; }
        .error-box h2 { color: #dc3545; }
        .btn-home { display: inline-block; margin-top: 20px; padding: 12px 25px; background: #004a99; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <header class="main-header">
        <div class="container header-flex">
            <div class="logo">🏥 Helping Hand <b>Hospital</b></div>
        </div>
    </header>

    <div class="status-container">
        <div class="status-card <?php echo $alertClass; ?>">
            <h2><?php echo $status; ?></h2>
            <p><?php echo $message; ?></p>
            <a href="index.php" class="btn-home">Return to Home</a>
        </div>
    </div>

    <footer class="main-footer">
        <div class="container"><p>&copy; 2024 Helping Hand Hospital.</p></div>
    </footer>
</body>
</html>