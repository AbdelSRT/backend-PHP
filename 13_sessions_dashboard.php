<?php

session_start(); // nodig op elke pagina waar je de sessie wilt gebruiken

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($username) : ?>
        <a href="./13_sessions_logout.php">Logout</a>
        <h2>Welcome, <?php echo $username ?>!</h2>
    <?php else : ?>
        <p>You are not logged in.</p>
        <a href="/php-basis/13_sessions.php">Login</a>
    <?php endif; ?>
</body>

</html>