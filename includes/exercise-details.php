<h1 class="mt-4 mb-2">Exercise details</h1>

<hr/>

<article class="card bg-dark text-bg-dark">
    <div class="card-body">
        <h2 class="card-title"><?= $exercise->title ?></h2>
        <p class="card-text"><?= $exercise->description ?></p>
    </div>
    <div class="card-body">
        <a href="exercises/<?= $exercise->title ?>.php" class="card-link">Open exercise</a>
    </div>
</article>