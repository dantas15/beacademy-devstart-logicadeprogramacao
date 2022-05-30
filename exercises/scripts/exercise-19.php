<?php

$totalAge = 0;
$times = 0;
$ageAverage = 0;
$ageLessThan18 = 0;
$ageMoreThan60 = 0;

do {
    $currentAge = 0;
    do {
        $currentAge = (integer)readline("\nInsira uma idade válida (-99 para sair): ");
    } while ($currentAge != '-99' && $currentAge <= 0);

    if ($currentAge < 18) {
        $ageLessThan18++;
    }

    if ($currentAge > 60) {
        $ageMoreThan60++;
    }

    if ($currentAge > 0) {
        $totalAge += $currentAge;
        $times++;
    }

} while ($currentAge != '-99');

if ($totalAge > 0) {
    $ageAverage = $totalAge / $times;
}

print_r("Total de pessoas com menos de 18 anos: $ageLessThan18");
print_r("\nTotal de pessoas com mais de 60 anos: $ageMoreThan60");
print_r("\nMédia de idade: $ageAverage");