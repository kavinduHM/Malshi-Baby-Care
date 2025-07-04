<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malshi Baby Care POS</title>
    <link rel="stylesheet" href="./Assets/Css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
        session_start();
        }

    // Set remaining session time (in seconds)
    $timeout_duration = 1800;
    $remaining = $timeout_duration - (time() - ($_SESSION['LAST_ACTIVITY'] ?? time()));

    if ($remaining < 0) $remaining = 0;

    // Output it as a JS variable
    echo "<script>var sessionSecondsLeft = $remaining;</script>";
    ?>

<div class="header-container">
    <nav>
        <ul>
            <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
            <li><a href="sale.php"><i class="fa-solid fa-cart-plus"></i>Create A Sale</a></li>
            <li><a href="inventory.php"><i class="fa-solid fa-boxes-stacked"></i>Inventory</a></li>
            <li><a href="sales-reports.php"><i class="fa-solid fa-calendar-check"></i>Sales Reports</a></li>
            <li><a href="logout.php"><i class="fas fa-right-from-bracket"></i> Logout</a></li>
        </ul>
        <div class="timout-holder"><p class="timeout-message">Auto logout: <span id="countdown">--:--</span></p></div>
        
    </nav>
</div>

    
</body>
<script>
let countdownElement = document.getElementById("countdown");
let secondsLeft = typeof sessionSecondsLeft !== "undefined" ? sessionSecondsLeft : 0;

function updateCountdown() {
    if (secondsLeft <= 0) {
        countdownElement.textContent = "00:00";
        window.location.href = "../index.php?timeout=1"; // Optional auto-redirect
        return;
    }

    let minutes = Math.floor(secondsLeft / 60);
    let seconds = secondsLeft % 60;

    countdownElement.textContent =
        String(minutes).padStart(2, '0') + ":" + String(seconds).padStart(2, '0');

    secondsLeft--;
}

updateCountdown();
setInterval(updateCountdown, 1000);
</script>

</html>