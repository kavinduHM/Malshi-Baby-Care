<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malshi Baby Care - POS Login</title>
    <link rel="stylesheet" href="Assets/Css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="login-container">
        <div class="inner-login">
            <h2>Point  OF Sales System</h2>
            <h1>Malshi Baby Care - Kuliyapitiya Branch</h1>
            <h2>Sign In</h2>
            <form action="includes/login.php" method="post" class="login-form">
                <label for="username">User Name</label>
                <input type="text" name="username" id="username"  placeholder="Enter Your Username">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Enter Password">
                <span id="pass-toggle">👁</span>
                <input type="submit" value="LogIn" id="submit-button-login">
            
                <!-- Login Error and Logout Message -->
                <?php if (isset($_GET['error'])): ?>
                    <p style="color: red; margin-top: 0.5rem;">
                    <?php echo htmlspecialchars(urldecode($_GET['error'])); ?>
                        </p>
                    <?php elseif (isset($_GET['logout'])): ?>
                        <p style="color: green; margin-top: 0.5rem;">
                            You have been logged out successfully.</p>
                <?php endif; ?>

            
            
            </form>
            <div class="user-options">
                <button id="" class="user-op-but">Forgot Password?</button>
                <button class="user-op-but" id="">New User?</button>
            </div>
            <a href="https://digitcave.com" target="_blank">
                <div class="copyright">
                    <p>Developed with<span class="heart">❤ </span>By <img src="https://i0.wp.com/digitcave.com/wp-content/uploads/2024/11/cropped-DigitCave-removebg-preview.png?w=500&ssl=1" alt="digitcave.com logo" height="30px" width="80px"></p>
                </div>
            </a>
            
        </div>
    </div>
</body>
</html>