<?php echo "hello world";
/**
 * String concatenation
 */
echo "<br>";
$name = 'John Duck';
$age = 32;
echo 'Mijn naam is ' . $name . ' en ik ben ' . $age . ' jaar oud.';
echo '<br>';
$name = 'John Duck';
$age = 32;
echo "Mijn naam is $name en ik ben $age jaar oud."; // variabelen worden geëvalueerd
echo "Mijn naam is {$name} en ik ben {$age} jaar oud."; // variabelen worden geëvalueerd en staan expliciet tussen {}
echo '<br>';
define('Ik', "Abdelouahid");
echo Ik;
