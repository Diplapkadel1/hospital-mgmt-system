<?php
// Database configuration
$db_host = "sql207.infinityfree.com";
$db_user = "if0_38494468";
$db_pass = "OOKrjENjsaNaHHr";
$db_name = "if0_38494468_hospitaldb";

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Set charset (important)
mysqli_set_charset($conn, "utf8");
?>
