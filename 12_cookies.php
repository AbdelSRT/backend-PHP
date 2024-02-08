<?php

setcookie('username', 'John', time() + 10);

$username = $_COOKIE['username'];

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
        <h2>Welkom terug <?php echo $username ?></h2>
        <p>De username komt uit een cookie.</p>
    <?php else : ?>
        <h2>Welkom gast</h2>
        <p>Er is geen (geldige) cookie aanwezig.</p>
    <?php endif; ?>

</body>

</html>