<?php

    $skillLevel = 100;

    $competentEnough = 
        ($skillLevel >= 100) &&
        ($skillLevel <= 200);


    $notCompetentEnough = 
        ($skillLevel < 100) ||
        ($skillLevel > 200);

    // $notCompetentEnough = !CompetentEnough;
    var_dump($competentEnough);