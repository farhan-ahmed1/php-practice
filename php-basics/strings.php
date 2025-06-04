<?php

    $price = '$42';

    // will throw error, cannot concatanate two strings with +
    // $text = "This ticket costs " + $price;

    // able to concatanate with .
    $text = "This ticket costs " . $price;

    // special characters. must escape
    $text = "This ticket costs \"" . $price . "\"";


    echo "<p>$text</p>";

