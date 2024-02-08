<?php

$username = htmlspecialchars($_REQUEST['username']);


echo $username; // de input van de gebruiker wordt getoond én uitgevoerd

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
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>