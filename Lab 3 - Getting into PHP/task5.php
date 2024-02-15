<?php
    // PHP script to print all the odd numbers between 10 to 100
    $start = 10;
    $end = 100;

    echo "Odd numbers between $start and $end are: " . "<br>";
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }

?>
