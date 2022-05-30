<?php

$products = array();
$numberOfProducts = 10;

for ($i = 0; $i < $numberOfProducts; $i++) {

    do {
        $product['name'] = readline(PHP_EOL . 'Nome ' . ($i + 1) . 'º produto: ');
    } while (!strlen($product['name']));

    do {
        $product['price'] = (integer)readline(PHP_EOL . 'Preço do ' . ($i + 1) . 'º produto (mais que zero):');
    } while ($product['price'] <= 0);

    $products[$i] = $product;
}

for ($i = 0; $i < $numberOfProducts; $i++) {
    print_r("\n--------------------------");
    print_r(PHP_EOL . ($i + 1) . 'º Produto cadastrado: ');
    print_r(PHP_EOL . 'Nome: ' . $products[$i]['name']);
    print_r(PHP_EOL . 'Preco: R$' . $products[$i]['price']);
}