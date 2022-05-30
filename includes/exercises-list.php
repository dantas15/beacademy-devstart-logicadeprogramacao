<?php
$display = '';
foreach ($exercises as $exercise) {
    $display .= '
        <article>
            <a href="/exercise.php?title=' . $exercise->title . '" class="text-bg-dark bg-dark list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">' . $exercise->title . '</h5>
                </div>
                <p class="mb-1">' . $exercise->description . '</p>
            </a>
        </article>
    ';
}
$display = strlen($display) ? $display : '<h1>No exercise found :(</h1>'
?>


<h1 class="mt-4 mb-2">All exercises</h1>

<hr/>

<section class="list-group mb-5">
    <?= $display ?>
</section>