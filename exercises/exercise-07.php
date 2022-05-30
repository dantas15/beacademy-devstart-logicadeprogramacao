<?php

require __DIR__ . '/../vendor/autoload.php';

$prevBalance = isset($_POST['prevBalance']) ? (float)$_POST['prevBalance'] : 0.0;

if (isset($_POST['value']) && isset($_POST['valueType'])) {

    $value = (float)$_POST['value'];
    $type = $_POST['valueType'];

    $currentBalance = 0.0;
    if($type == 'income') {
        $currentBalance = $prevBalance + $value;
    } elseif ($type == 'expense') {
        $currentBalance = $prevBalance - $value;
    }

    $display = '
    <h2>Result:</h2>
    <p><span class="fs-5 fw-semibold">Balance before last transaction:</span> ' . $prevBalance . '</p>
    <p><span class="fs-5 fw-semibold">Value:</span> ' . $value . '</p>
    <p><span class="fs-5 fw-semibold">Transaction type:</span> ' . $type . '</p>
    <p><span class="fs-5 fw-semibold">Current after last transaction:</span> ' . $currentBalance . '</p>
    
';

    $prevBalance = $currentBalance;
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm">
        <div class="mb-3 customBg mt-4">
            <label for="value" class="form-label">Value</label>
            <input type="number" step="0.01" class="form-control" id="value" name="value" min="0.01"
                   required>
        </div>
        <div class="mb-3 customBg">
            <label class="form-label">Type</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="valueType" id="flexRadioIncome" value="income">
                <label class="form-check-label" for="flexRadioIncome">
                    Income ( + )
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="valueType" id="flexRadionExpense" value="expense">
                <label class="form-check-label" for="flexRadionExpense">
                    Expense ( - )
                </label>
            </div>
        </div>
        <input type="hidden" name="prevBalance" value="<?= $prevBalance ?>">
        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </div>
    </form>

    <hr/>

<?= $display ?>

<?php
include __DIR__ . '/../includes/foot.php';
?>