<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['weight']) && isset($_POST['height'])) {
    $weight = (float)$_POST['weight'];
    $height = (float)$_POST['height'];

    $height /= 100;

    $bmi = $weight / ($height * $height);

    $message = '';

    if ($bmi < 19) {
        $message = 'Under weight';
    } elseif ( $bmi < 25) {
        $message = 'Normal weight';
    } elseif ($bmi < 30) {
        $message = 'Overweight';
    } elseif ($bmi < 40) {
        $message = 'Obesity I';
    } else {
        $message = 'Morbid obesity';
    }

    $display = '
    <h2>Result: ' . $message . '</h2>
    <p><span class="fs-5 fw-semibold">Weight:</span> ' . $weight . '</p>
    <p><span class="fs-5 fw-semibold">Height:</span> ' . $height . '</p>
    <p><span class="fs-5 fw-semibold">BMI (body mass index):</span> ' . $bmi . '</p>
';
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm mt-4">
        <div class="mb-3">
            <label for="weight" class="form-label">Weight (kg)</label>
            <input type="number" class="form-control" id="weight" name="weight" value="<?= $_POST['weight'] ?>"
                   step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height (cm)</label>
            <input type="number" class="form-control" id="height" name="height" value="<?= $_POST['height'] ?>"
                   step="0.01" required>
        </div>
        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </div>
    </form>

    <hr/>

<?= $display ?>

<?php
include __DIR__ . '../includes/foot.php';
?>