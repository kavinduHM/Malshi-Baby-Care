<?php
session_start();

$timeout_duration = 1800; // 30 minutes in seconds

// Check if "last_activity" timestamp exists
if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];
    if ($elapsed_time > $timeout_duration) {
        // Session expired due to inactivity
        session_unset();
        session_destroy();
        header("Location: ../index.php?timeout=1");
        exit;
    }
}

// Update last activity time stamp on each request
$_SESSION['last_activity'] = time();

if (!isset($_SESSION['username'])) {
    // Not logged in
    header("Location: ../index.php");
    exit;
}

$remaining_time = $timeout_duration - (time() - $_SESSION['last_activity']);
if ($remaining_time < 0) $remaining_time = 0;

echo "<script>var sessionSecondsLeft = $remaining_time;</script>";


?>
