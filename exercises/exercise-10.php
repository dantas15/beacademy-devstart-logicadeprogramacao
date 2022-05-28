<?php

require __DIR__ . '/../vendor/autoload.php';

$prevBalance = isset($_POST['prevBalance']) ? (float)$_POST['prevBalance'] : 0.0;

if (isset($_POST['value']) && isset($_POST['valueType'])) {

    $value = (float)$_POST['value'];
    $type = $_POST['valueType'];

    $currentBalance = 0.0;

    switch ($type) {
        case 'income':
            $currentBalance = $prevBalance + $value;
            break;
        case 'expense':
            $currentBalance = $prevBalance - $value;
            break;
        case 'transfer':
            $currentBalance = $prevBalance - $value;
            $bankInfo = '<h3>Bank info:
</h3>
<p><span class="fs-5 fw-semibold">Bank:</span> ' . $_POST['bank'] . '</p>
<p><span class="fs-5 fw-semibold">Agency:</span> ' . $_POST['agency'] . '</p>
<p><span class="fs-5 fw-semibold">Account:</span> ' . $_POST['account'] . '</p>
';
            break;
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

    <div x-data="{ isTransfer: false }">

        <form method="post" class="container-sm">
            <div class="mb-3 mt-4">
                <label for="value" class="form-label">Value</label>
                <input type="number" step="0.01" class="form-control" id="value" name="value" min="0.01"
                       required>
            </div>
            <div class="mb-3">
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
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="valueType" id="flexRadionTransfer"
                           value="transfer"
                           x-on:change="(e) => { isTransfer = e.target.value }">
                    <label class="form-check-label" for="flexRadionTransfer">
                        Transfer ( - )
                    </label>
                </div>
            </div>
            <template x-if="isTransfer">
                <div>
                    <div class="mb-3 mt-4">
                        <label for="bank" class="form-label">Bank</label>
                        <input type="text" class="form-control" id="bank" name="bank" required>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="agency" class="form-label">Agency</label>
                        <input type="text" class="form-control" id="agency" name="agency" required>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="account" class="form-label">Account</label>
                        <input type="text" class="form-control" id="account" name="account" required>
                    </div>
                </div>
            </template>
            <input type="hidden" name="prevBalance" value="<?= $prevBalance ?>">
            <div class="w-100 d-flex justify-content-end">
                <button type="submit" class="mt-4 btn btn-primary">Submit</button>
            </div>
        </form>

    </div>

    <hr/>

<?= $display ?>
<?= $bankInfo ?>

<?php
include __DIR__ . '../includes/foot.php';
?>