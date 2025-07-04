<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../dashboard.php");
            exit;
        } else {
            header("Location: ../index.php?error=Invalid%20credentials");
            exit;
        }
    } else {
        header("Location: ../index.php?error=Invalid%20credentials");
        exit;
    }
} else {
    header("Location: ../index.php");
    exit;
}
// After successful login
session_start();
$_SESSION['username'] = $row['username'];  // or whatever your username field is

