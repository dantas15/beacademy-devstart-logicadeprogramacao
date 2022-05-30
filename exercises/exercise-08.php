<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operation'])) {

    $number1 = (float)$_POST['number1'];
    $number2 = (float)$_POST['number2'];
    $operation = $_POST['operation'];

    $result = 0.0;
    switch ($operation) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            $result = $number1 / $number2;
            break;
    }

    $display = '
    <p class="fs-5 fw-semibold">'. $number1 .' '. $operation .' '. $number2 .' = '. $result .'</p>    
';
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm">
        <div class="">
            <div class="mb-3 mt-4">
                <label for="number1" class="form-label">Num 1</label>
                <input type="number" step="0.01" class="form-control" id="number1" name="number1" min="0.01" required>
            </div>

            <!-- Operations-->
            <div>
                <label class="form-label">Operation: </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operation" id="radioPlus" value="+" checked>
                    <label class="form-check-label" for="radioPlus">
                        +
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operation" id="radioMinus" value="-">
                    <label class="form-check-label" for="radioMinus">
                        -
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operation" id="radioMult" value="*">
                    <label class="form-check-label" for="radioMult">
                        *
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operation" id="radioDiv" value="/">
                    <label class="form-check-label" for="radioDiv">
                        /
                    </label>
                </div>
            </div>
            <!-- END Operations-->

            <div class="mb-3 customBg mt-4">
                <label for="number2" class="form-label">Num 2</label>
                <input type="number" step="0.01" class="form-control" id="number2" name="number2" min="0.01" required>
            </div>

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