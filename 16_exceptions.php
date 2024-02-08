<?php

function inverse($x)
{
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . ' ';
    echo '<br>';
} catch (Exception $e) {
    // We komen niet in dit catch block terecht
    echo 'Caught exception: ',  $e->getMessage(), ' ';
    echo '<br>';
} finally {
    // We komen wel in dit finally block terecht
    echo 'First finally ';
    echo '<br>';
}

echo '<br>';

try {
    echo inverse(0) . ' ';
    echo '<br>';
} catch (Exception $e) {
    // We komen wel in dit catch block terecht
    echo 'Caught exception: ',  $e->getMessage(), ' ';
    echo '<br>';
} finally {
    // We komen wel in dit finally block terecht
    echo "Second finally ";
    echo '<br>';
}

echo '<br>';
