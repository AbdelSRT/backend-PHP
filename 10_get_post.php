<?php
if (isset($_POST['user'])) {
    $user_post = $_POST['user'];
} else {
    $user_post = '';
}

if (isset($_GET['user'])) {
    $user_get = $_GET['user'];
} else {
    $user_get = '';
}

if (isset($_REQUEST['user'])) {
    $user_name = $_REQUEST['user'];
} else {
    $user_name = '';
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
    <?php if ($user_name) : ?>
        <h2>Request: <?php echo $user_name ?></h2>
        <p>Deze variabele komt ofwel uit de url ofwel uit het formulier.</p>
        <br>
    <?php endif; ?>

    <?php if ($user_get) : ?>
        <h2>GET: <?php echo $user_get ?></h2>
        <p>De username komt uit de url.</p>
    <?php else : ?>
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>?user=Abdelouahid">Query Parameter</a>
        <br>
    <?php endif; ?> <?php if ($user_post) : ?> <h2>Post: <?php echo $user_post ?></h2>
        <p>De username komt uit het formulier.</p>
    <?php else : ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div>
                <label>Username: </label>
                <input type="text" name="user">
            </div>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
    <?php endif; ?>

</body>

</html>