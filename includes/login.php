<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get and sanitize input
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Prepare statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT id, username, password, full_name, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Fetch result
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify hashed password
        if (password_verify($password, $user['password'])) {
            // Store session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['full_name'] = $user['full_name'];

            // Redirect to dashboard
            header("Location: ../dashboard.php");
            exit;
        } else {
            // Wrong password
            echo "Invalid username or password.";
        }
    } else {
        // Username not found
        echo "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
} else {
    // Block direct access
    header("Location: ../index.php");
    exit;
}
?>
