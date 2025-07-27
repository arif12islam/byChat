<?php
// Any PHP code or variables can go here if needed

// For example:
$pageTitle = "byChat";
$welcomeMessage = "Welcome to byChat, your go-to platform for seamless communication.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="home-bg">
        <p><?php echo htmlspecialchars($welcomeMessage); ?></p>
        <div class="input-wrapper">
            <input type="text" class="user-input" placeholder="What's on your mind?" />
            <button class="arrow-button">&#8679;</button>
        </div>
    </div>
</body>
</html>
