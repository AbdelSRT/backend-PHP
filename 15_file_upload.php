<?php

$message = '';
$success = false;

$allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');

// Controleer of er een formulier gesubmit is
if (isset($_POST['submit'])) {
    // Controleer of er een bestand is geüpload
    if (!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        // Stel dat de afbeelding 'image.png' heet
        $target_dir = "uploads/$file_name"; // 'uploads/image.png'
        $file_ext = explode('.', $file_name); // ['image', 'png']
        $file_ext = strtolower(end($file_ext)); // 'png'

        // Valideer of het bestand de juiste extensie heeft
        if (in_array($file_ext, $allowed_extensions)) {
            // Valideer of het bestand niet te groot is
            if ($file_size <= 1000000) { // 1000000 bytes = 1MB
                // Upload het bestand
                // Het bestand wordt verplaatst naar de map 'uploads'
                move_uploaded_file($file_tmp, $target_dir);

                // Success message
                $success = true;
            } else {
                $message = 'Bestand is te groot!';
            }
        } else {
            $message = 'Ongeldig bestandstype!';
        }
    } else {
        $message = 'Kies een bestand om te uploaden';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php if ($message) : ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <p>Selecteer een afbeelding om te uploaden</p>
        <input type="file" name="upload"><br><br>
        <input type="submit" value="Submit" name="submit"><br>
    </form>

    <?php if ($success) : ?>
        <p style="color: green;">Afbeelding is geüpload!</p>
        <img src="<?php echo $target_dir; ?>" alt="Uploaded image">
    <?php endif; ?>

</body>

</html>