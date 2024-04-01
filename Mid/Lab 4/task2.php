<?php
    // PHP script to calculate the VAT (Value Added Tax) over an amount
    
    // VAT rate is 15%
    $amount = 100;
    $vatRate = 15 / 100;

    $vat = $amount * $vatRate;

    echo "VAT for amount $amount is: $vat";
?>
