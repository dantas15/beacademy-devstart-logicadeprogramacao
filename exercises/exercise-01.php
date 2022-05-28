<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['name']) && isset($_POST['weight']) && isset($_POST['height'])) {
    $display = '
    <h2>Result:</h2>
    <p><span class="fs-5 fw-semibold">Name:</span>  ' . $_POST['name'] . '</p>
    <p><span class="fs-5 fw-semibold">Weight:</span>  ' . $_POST['weight'] . '</p>
    <p><span class="fs-5 fw-semibold">Height:</span>  ' . $_POST['height'] . '</p>
';
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm">
        <div class="mb-3 customBg">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $_POST['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" value="<?= $_POST['weight'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control" id="height" name="height" value="<?= $_POST['height'] ?>" required>
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