<?php
$data = [
    "name" => "John Duck",
    "age" => 32,
    "nephews" => [
        [
            "name" => "Kwik",
            "age" => 16,
            "hobbies" => ["Gamen", "Voetbal"]
        ],
        [
            "name" => "Kwek",
            "age" => 16,
            "hobbies" => ["Gamen"]
        ],
        [
            "name" => "Kwak",
            "age" => 16,
            "hobbies" => []
        ]
    ]
];

var_dump($data["nephews"][0]["hobbies"][0]);
echo "<br>";


$jsonData = '{"name":"John Duck","age":32,"nephews":[{"name":"Kwik","age":16,"hobbies":["Gamen","Voetbal"]},{"name":"Kwek","age":16,"hobbies":["Gamen"]},{"name":"Kwak","age":16,"hobbies":[]}]}';

$parsedData = json_decode($jsonData, true); // true zorgt ervoor dat de data als associative array wordt teruggegeven
var_dump($parsedData);
echo '<br>';
