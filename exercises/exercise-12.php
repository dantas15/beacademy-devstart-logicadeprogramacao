<?php

require __DIR__ . '/../vendor/autoload.php';


$display = '<h2>Result (pair numbers from 0 to 100):</h2>';

for ($i = 1; $i <= 100; $i++) {
    $result = $i % 2;
    if ($result == 0) {
        $display .= '<p>' . $i . '</p>';
    }
}

include __DIR__ . '/../includes/head.php';
?>

    <div class="mb-3 mt-4">
        <?= $display ?>
    </div>

<?php
include __DIR__ . '/../includes/foot.php';
?>