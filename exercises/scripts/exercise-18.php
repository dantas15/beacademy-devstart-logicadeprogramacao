<?php

function checkExit($input)
{
    if ($input == '-1') {
        exit("Programa finalizado por solicitação do usuário");
    }
}

print_r("A qualquer momento, digite -1 em um dos campos para sair\n");
do {
    print_r("=====================\n ");

    $name = readline("\nNome: ");
    checkExit($name);

    $pass = readline("\nSenha: ");
    checkExit($name);

} while ($name != 'Marcos' || $pass != '1234');


