<?php

/**
 * Er zijn veel functies beschikbaar om met arrays te werken
 * https://www.php.net/manual/en/ref.array.php
 *
 * We gaan er een aantal bekijken
 */

$fruits = ['apple', 'banana', 'orange'];

/**
 * count()
 * Geeft het aantal elementen in een array terug
 */
var_dump(count($fruits)); // int(3)
echo '<br>';

/**
 * in_array($element, $array)
 * Controleert of een element in een array voorkomt
 */
var_dump(in_array('apple', $fruits)); // bool(true)
echo '<br>';
var_dump(in_array('potato', $fruits)); // bool(false)
echo '<br>';

/**
 * Elementen aan een array toevoegen
 */
$fruits[] = 'pear'; // Voegt 'pear' toe aan de array $fruits
array_push($fruits, 'pineapple'); // Voegt 'pineapple' toe aan de array $fruits
array_unshift($fruits, 'strawberry'); // Voegt 'strawberry' toe aan het begin van de array $fruits

print_r($fruits); // Array ( [0] => strawberry [1] => apple [2] => banana [3] => orange [4] => pear [5] => pineapple )
echo '<br>';

/**
 * Elementen verwijderen uit een array
 */
array_pop($fruits); // Verwijdert het laatste element uit de array $fruits
array_shift($fruits); // Verwijdert het eerste element uit de array $fruits

print_r($fruits); // Array ( [0] => apple [1] => banana [2] => orange [3] => pear )
echo '<br>';

unset($fruits[1]); // Verwijdert het element met index 1 uit de array $fruits
// Merk op dat de indexen niet opnieuw worden geordend, 0, 2 en 3 blijven behouden - 1 wordt verwijderd
print_r($fruits); // Array ( [0] => apple [2] => orange [3] => pear )
echo '<br>';

$chunked_array = array_chunk($fruits, 2); // De array $fruits wordt opgedeeld in arrays van 2 elementen
print_r($chunked_array); // Array ( [0] => Array ( [0] => apple [1] => orange ) [1] => Array ( [0] => pear ) )
echo '<br>';

$htmlString = '<h3>Hello World</h3>';
// &lt;h1&gt;Hello World&lt;/h1&gt; - de html tags worden geconverteerd naar html entities
// dit zorgt ervoor dat de browser de html tags niet zal interpreteren
// het zal de html tags tonen als tekst in de browser: <h1>Hello World</h1>
echo htmlentities($htmlString);
echo '<br>';
echo $htmlString;
