<?php
    // PHP script to find the largestNum number from three given numbers
    $num1 = 55;
    $num2 = 71;
    $num3 = 63;

    if (($num1 > $num2) && ($num1 > $num3)) {
        echo "$num1 is the largest number";
    }

    else if ($num2 > $num3) {
        echo "$num2 is the largest number";
    }

    else {
        echo "$num3 is the largest number";
    }

?>

