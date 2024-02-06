<?php

/**
 * print_r
 * Print een array naar de browser
 */
print_r("John Duck met print_r <br>");
print_r(['John', 'Duck', 32]); // Dit toont in de browser: Array([0] => John [1] => Duck [2] => 32)
echo '<br> <br>';
var_dump("John Duck met var_dump"); // string(22) "John Duck met var_dump"
echo '<br>';
var_dump(['John', 'Duck', 32]); // array(3) { [0]=> string(4) "John" [1]=> string(4) "Duck" [2]=> int(32) }
echo '<br>';
