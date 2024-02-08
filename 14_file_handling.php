<?php

/**
 * PHP heeft ingebouwde functies om bestanden te openen, lezen, schrijven en sluiten.
 */

$file = 'extras/friends.json';

if (file_exists($file)) {
    // open het bestand
    $handle = fopen($file, 'r');

    // lees het bestand
    $content = fread($handle, filesize($file));

    // sluit het bestand
    fclose($handle);

    // toon de inhoud van het bestand
    $data = json_decode($content, true);
    var_dump($data);
} else {

    echo 'Het bestand bestaat niet.';

    $data = [
        'friends' => [
            [
                'firstName' => 'Donald',
                'lastName' => 'Duck',
                'age' => 92
            ],
        ]
    ];

    // zet de PHP array om naar een JSON string
    $contents = json_encode($data);

    // open het bestand
    $handle = fopen($file, 'w');

    // schrijf de JSON string naar het bestand
    fwrite($handle, $contents);

    // sluit het bestand
    fclose($handle);
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
    <?php foreach ($data['friends'] as $friend) : ?>
        <?php if ($friend['firstName'] === "John") : ?>
            <p>Voornaam: <?php echo $friend['firstName']; ?></p>
            <p>Achternaam: <?php echo $friend['lastName']; ?></p>
            <p>Leeftijd: <?php echo $friend['age']; ?></p>
            <br>
        <?php endif; ?>
    <?php endforeach; ?>
</body>

</html>