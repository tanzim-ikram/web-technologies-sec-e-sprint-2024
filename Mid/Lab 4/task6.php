<?php
    // PHP script to search an element from an array
    $std = ["id"=>1, "name"=>"Tanzim", "email"=>"Tanzim@aiub.edu"];
    $elementToSearch = "Tanzim";

    $found = false; 

    foreach($std as $s) {
        if($s == $elementToSearch) {
            $found = true;
            break; 
        }
    }

    if ($found) {
        echo "true";
    } else {
        echo "false"; 
    }
    
?>
