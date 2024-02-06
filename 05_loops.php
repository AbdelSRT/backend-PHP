<?php

/**
 * For loop
 */

for ($i = 0; $i < 5; $i++) {
    echo $i;
    echo '<br>';
}

echo '<br>';

/**
 * While loop
 */

$i = 0;

while ($i < 5) {
    echo $i;
    echo '<br>';
    $i++;
}

echo '<br>';

/**
 * Do while loop
 */

$i = 6;

do {
    echo $i;
    echo '<br>';
    $i++;
} while ($i < 5);
