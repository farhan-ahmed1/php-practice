<?php

    // associative arrays (ex. key value pairs)
    $languages = [
        'PHP' => 'PHP: Hypertext Preprocessor',
        'VB' => 'Visual Basic'
    ];

    // iterating thru the languages array
    foreach($languages as $index => $language) {
        echo "$index: $language<br>";
    }
