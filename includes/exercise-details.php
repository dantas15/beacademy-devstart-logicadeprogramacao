<?php

if (str_starts_with($exercise->title, 'scripts/')) {
    $cardBody = '<small>Page not available, try running the script from this project root directory: <code>php exercises/' . $exercise->title . '.php</code></small>';
} else {
    $cardBody = '<a href="exercises/ ' . $exercise->title . ' .php" class="card-link">Open exercise</a>';
}

?>

<h1 class="mt-4 mb-2">Exercise details</h1>

<hr />

<article class="card bg-dark text-bg-dark">
    <div class="card-body">
        <h2 class="card-title"><?= $exercise->title ?></h2>
        <p class="card-text"><?= $exercise->description ?></p>
    </div>
    <div class="card-body">
        <?= $cardBody ?>
    </div>
</article>