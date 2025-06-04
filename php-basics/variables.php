<?php
    $skillevel = 100;

    define('LANGUAGE', 'PHP');

    printf(
        '<h1>My %s skill level is %d</h1>',
        LANGUAGE,
        $skillevel
    );