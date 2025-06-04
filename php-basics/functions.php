<?php
    // basic function, can have a default parameter set or not
    function help1($title, $margin = 3) {
        return "<p class=\"$margin\">$title</p>";
    }

    // calling a function
    $markup1 = help1('Globoticket', 5);

    // funtions with data types
    function help2(string $title, int $margin = 3): string {
        return "<p class=\"$margin\">$title</p>";
    }

    $markup2 = help2('Globoticket', 5);


    // Scope in functions

    $title = 'Globoticket';

    function DivTitle() {

        // workaround 1: declare title to be a global variable
        global $title;

        // workaround 2: use the keyword $GLOBAL (acts as super global array)
        $title1 = $GLOBALS['title'];
        
        // not able to call the global title variables bc php assumes there is a local variable named $title
        return "<div>$title</div>";
    }
