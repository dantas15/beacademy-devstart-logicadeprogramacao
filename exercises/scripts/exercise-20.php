<?php

$totalFunds = 1000;
$funds = $totalFunds;
$withdrawValue = 150;

do {
    print_r("Saldo atual R$$funds\n");
    $funds -= $withdrawValue;
} while ($funds > 0);

print_r("*-*-*-*-*-*-*-*-*\nSaldo insuficiente para o saque de R$150 :(");