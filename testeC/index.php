<?php

require_once 'Compra.php';
require_once 'Cliente.php';
require_once 'Produto.php';

echo "<h2>Sistemas de venda</h2>";

// ter um  cliente
$cliente1 = new Cliente("João","joao@teste.com");
//ter um produto
$produto1 = new Produto("Monitor", 599.90);
// criar a venda
$compraMonitor = new Compra();
$compraMonitor->fazerCompra($cliente1, $produto1, 2);

echo "<strong>Cliente: </strong> {$cliente1->getNome()}<br>";
echo "<strong>Produto: </strong> {$produto1->getNome()}<br>";
echo "<strong>total compra: </strong> {$compraMonitor->totalCompra()}";
