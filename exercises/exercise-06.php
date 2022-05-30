<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['age'])) {

    $age = (int)$_POST['age'];

    $message = '';

    if ($age < 18) {
        $message = 'Minor';
    } elseif ($age < 60) {
        $message = 'Adult';
    } else {
        $message = 'Elderly';
    }

    $display = '
    <h2>Result: ' . $message . '</h2>
';
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm mt-4">
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?= $_POST['age'] ?>"
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