<?php

$users = array();
$numberOfUsers = 5;

for ($i = 0; $i < $numberOfUsers; $i++) {
    do {
        $user['name'] = readline(PHP_EOL . 'Nome do ' . ($i + 1) . ' usuário: ');
    } while (!strlen($user['name']));
    do {
        $user['cpf'] = readline(PHP_EOL . 'CPF do ' . ($i + 1) . ' usuário: ');
    } while (!strlen($user['cpf']));
    do {
        $user['rg'] = readline(PHP_EOL . 'RG do ' . ($i + 1) . ' usuário: ');
    } while (!strlen($user['rg']));
    do {
        $user['address'] = readline(PHP_EOL . 'Endereço ' . ($i + 1) . ' do usuário: ');
    } while (!strlen($user['address']));
    do {
        $user['phone'] = readline(PHP_EOL . 'Telefone ' . ($i + 1) . ' do usuário: ');
    } while (!strlen($user['phone']));

    $users[$i] = $user;
}
for ($i = 0; $i < $numberOfUsers; $i++) {
    print_r("\n--------------------------\n");
    print_r('Informações do ' . ($i + 1) . 'º Usuário(a)' . PHP_EOL);
    print_r(PHP_EOL . 'Nome: ' . $users[$i]['name']);
    print_r(PHP_EOL . 'CPF: ' . $users[$i]['cpf']);
    print_r(PHP_EOL . 'RG: ' . $users[$i]['rg']);
    print_r(PHP_EOL . 'Endereço: ' . $users[$i]['address']);
    print_r(PHP_EOL . 'Telefone: ' . $users[$i]['phone']);
}