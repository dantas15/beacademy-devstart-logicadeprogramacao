<?php

require __DIR__ . '/vendor/autoload.php';

use App\Exercise;

$exercise = Exercise::getExercise($_GET['title']);

if (is_null($exercise)) {
    header('location: index.php');
    exit;
}

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/exercise-details.php';
include __DIR__ . '/includes/foot.php';