<?php

$age = 12;

if ($age >= 18) {
    echo 'Je bent oud genoeg om alcohol te drinken.';
    echo '<br>';
} else {
    echo 'Je bent te jong om alcohol te drinken.';
    echo '<br>';
}

echo $age >= 60 ? "Je mag op pensioen" : "Je kan nog even door gaan.";
echo '<br>';
$hour = date('H'); // H = 24-uurs formaat van een uur (00 tot en met 23)

if ($hour < 12) {
    echo 'Goeiemorgen!';
} elseif ($hour < 17) {
    echo 'Goeiemiddag!';
} else {
    echo 'Goeienavond!';
}

echo '<br>';

$data = array(
    "name" => "John Duck",
    "age" => 32,
    "nephews" => array(
        array(
            "name" => "Kwik",
            "age" => 16,
            "hobbies" => array("Gamen", "Voetbal")
        ),
        array(
            "name" => "Kwek",
            "age" => 16,
            "hobbies" => array("Gamen")
        ),
        array(
            "name" => "Kwak",
            "age" => 16,
            "hobbies" => array()
        )
    )
);



$color = 'red';

switch ($color) {
    case 'red':
        echo 'De kleur is rood.';
        break;
    case 'green':
        echo 'De kleur is groen.';
        break;
    case 'blue':
        echo 'De kleur is blauw.';
        break;
    default:
        echo 'De kleur is onbekend.';
        break;
}

echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    echo "<h1 style="color: red;"><?php echo date('H') ?></h1>"

</body>

</html>