<?php

    $lines = 3;
    $ascii = 65;    // ASCII value of 'A'

    echo "Shape: 1 <br>";

    for ($i = 0; $i < $lines; $i++){
        
        for ($j = 0; $j <= $i; $j++)
        {
            echo "* ";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "Shape:2 <br>";

    for($i=0; $i < $lines; $i++){
        
        for($j = 0; $j < $lines - $i; $j++)
        {
            echo " " .$j+1;
        }
        echo "<br>";
    }

    echo "<br>";
    echo "Shape: 3 <br>";
    
    for ($i = 1; $i <= $lines; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr($ascii++) . " ";
        }
        echo "<br>";
    }
    
?>
