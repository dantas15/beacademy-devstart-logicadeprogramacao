<?php

require __DIR__ . '/../vendor/autoload.php';

$prevBalance = isset($_POST['prevBalance']) ? (float)$_POST['prevBalance'] : 0.0;

if (isset($_POST['income'])) {

    $income = (float)$_POST['income'];

    $currentBalance = $prevBalance + $income;

    $display = '
    <h2>Result:</h2>
    <p><span class="fs-5 fw-semibold">Balance before income:</span> ' . $prevBalance . '</p>
    <p><span class="fs-5 fw-semibold">Income:</span> ' . $income . '</p>
    <p><span class="fs-5 fw-semibold">Current balance:</span> ' . $currentBalance . '</p>
    
';

    $prevBalance = $currentBalance;
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm">
        <div class="mb-3 customBg">
            <label for="income" class="form-label">Income</label>
            <input type="number" class="form-control" id="income" name="income" value="<?= $_POST['income'] ?>" min="1"
                   required>
        </div>
        <input type="hidden" name="prevBalance" value="<?= $prevBalance ?>">
        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </div>
    </form>

    <hr/>

<?= $display ?>

<?php
include __DIR__ . '../includes/foot.php';
?>