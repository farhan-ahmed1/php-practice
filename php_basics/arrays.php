<?php
    $roles = ['buyer', 'seller', 'admin', 'guest'];

    // accessing arrays
    echo $roles[0] . "<br>";

    // count number of elements in array
    echo count($roles) . "<br>";

    // using for loop to access elements
    for ($i = 0; $i < count($roles); $i++) {
        echo $roles[$i] . "<br>";
    }


    // for each loop is ideal for arrays
    foreach($roles as $role) {
        echo "$role<br>";
    }