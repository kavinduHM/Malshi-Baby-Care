<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Malshi Baby Care</title>
    <link rel="stylesheet" href="assets/Css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php 
    require 'includes/session.php';
    ?>
</head>
<body>
    <?php 
        require_once './header.php'; 
        require_once './footer.php';
    ?>

    <div class="dash-wrap">
        <div class="greeting">
            <h1>Hello <span class="user-id"><?php echo htmlspecialchars($_SESSION['username']); ?><i class="fa-solid fa-hands-clapping"></i></span></h1>   
        </div>
    </div>

    
</body>
</html>