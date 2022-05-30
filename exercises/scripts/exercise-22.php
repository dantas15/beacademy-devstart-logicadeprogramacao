<?php

$student = array();
$nGrades = 2;

do {
    $student['name'] = readline(PHP_EOL . 'Nome do aluno: ');
} while (!strlen($student['name']));

for ($i = 0; $i < $nGrades; $i++) {
    do {
        $student['grades'][$i] = (integer)readline(PHP_EOL . ($i + 1) . 'ª Nota do ' . $student['name'] . ' (mais que zero):');
    } while ($student['grades'][$i] <= 0);
}

print_r("\n--------------------------\n");
print_r('Nome do aluno: ' . $student['name']);
for ($i = 0; $i < $nGrades; $i++) {
    print_r(PHP_EOL . 'Nota da ' . $i . 'ª prova: ' . $student['grades'][$i]);
}

$averageGrade = 0;
for ($i = 0; $i < $nGrades; $i++) {
    $averageGrade += $student['grades'][$i];
}
$averageGrade = $averageGrade / $nGrades;

print_r(PHP_EOL . 'Média: ' . $averageGrade);

if ($averageGrade >= 6) {
    print_r(PHP_EOL . 'PASSOU!!! :))');
} else {
    print_r(PHP_EOL . 'REPROVADO!!! :((');
}

