<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect input data
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];

        // Check if passwords match
        if ($password == $confirmPassword) {
            echo "Registration successful.<br>";
        } else {
            echo "Passwords do not match. Please try again.";
        }
    }
?>
