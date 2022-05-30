<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['number'])) {

    $number = (integer)$_POST['number'];

    $display = '<h2>Result:</h2>';

    for ($i = 1; $i < 11; $i++) {
        $result = $number * $i;
        $display .= '<p> ' . $i . ' X ' . $number . ' = <span class="fs-5 fw-semibold">' . $result . '</span></p>';
    }
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm">
        <div class="mb-3 mt-4">
            <label for="number" class="form-label">Number</label>
            <input type="number" class="form-control" id="number" name="number" value="<?= $number ?>" min="1"
                   required>
        </div>
        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </div>
    </form>

    <hr/>

<?= $display ?>

<?php
include __DIR__ . '/../includes/foot.php';
?>