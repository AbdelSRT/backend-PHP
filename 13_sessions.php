<?php


if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'John' && $password == '1234') {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: /php-basis/13_sessions_dashboard.php'); // redirect naar dashboard
    } else {
        echo 'Invalid credentials.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label>Username: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password: </label>
            <input type="password" name="password">
        </div>
        <br>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>

</html>