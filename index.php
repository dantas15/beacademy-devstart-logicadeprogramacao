<?php

require __DIR__.'/vendor/autoload.php';

use App\Exercise;

$exercises = Exercise::getExercises();

include __DIR__.'/includes/head.php';
include __DIR__.'/includes/exercises-list.php';
include __DIR__.'/includes/foot.php';