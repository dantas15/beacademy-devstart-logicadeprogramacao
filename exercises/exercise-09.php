<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['type'])) {
    $type = $_POST['type'];

    $result = '';
    switch ($type) {
        case 'Q':
            $result = 'https://www.google.com/search?q=calcular+%C3%A1rea+e+perimetro+triangulo&oq=calcular+%C3%A1rea+e+perimetro+triangulo';
            break;
        case 'T':
            $result = 'https://www.google.com/search?q=calcular+%C3%A1rea+e+perimetro+quadrado';
            break;
    }

    $linkContent = $type == 'Q' ? 'Square' : ($type == 'T' ? 'Triangle' : 'Try again...');
    $display = '
    <p class="fs-5 fw-semibold">Learn about <a target="_blank" href="'. $result .'">'. $linkContent .' here!!</a> </p>
';
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm mt-4">
        <label class="form-label">What do you want to learn?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="radioQ" value="Q">
            <label class="form-check-label" for="radioQ">
                Square
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="radioT" value="T">
            <label class="form-check-label" for="radioT">
                Triangle
            </label>
        </div>

        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="mt-4 btn btn-primary">Learn!!</button>
        </div>
    </form>

    <hr/>

<?= $display ?>

<?php
include __DIR__ . '../includes/foot.php';
?>