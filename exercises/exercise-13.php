<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['number1']) && isset($_POST['number2'])) {

    $number1 = (integer)$_POST['number1'];
    $number2 = (integer)$_POST['number2'];

    $display = '<h2>Result (multiples of 3 from '. $number1 .' to '. $number2 .'):</h2>';

    for ($i = $number1; $i <= $number2; $i++) {
        $result = $i % 3;
        if ($result == 0) {
            $display .= '<p>' . $i . '</p>';
        }
    }
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm">
        <div class="mb-3 mt-4">
            <label for="number1" class="form-label">From</label>
            <input type="number" class="form-control" id="number1" name="number1" value="<?= $number1 ?>" min="1"
                   required>
        </div>
        <div class="mb-3 mt-4">
            <label for="number2" class="form-label">To</label>
            <input type="number" class="form-control" id="number2" name="number2" value="<?= $number2 ?>" min="1"
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