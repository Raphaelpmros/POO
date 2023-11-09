<?php

require_once "Empregado.php";
require_once "Gerente.php";
require_once "Vendedor.php";

$empregado = new Empregado("José", 2500);
echo "{$empregado->getNome()} {$empregado->salarioAnual()}<br>";

$gerente = new Gerente("Marcio", 3500, "Comercial");
$gerente->setBonus(2000);
echo "{$gerente->getNome()} {$gerente->salarioAnual()}<br>";

$vendedor = new Vendedor("Marcio", 1500);
$vendedor->setComissaoVendas(500);
echo "{$vendedor->getNome()} {$vendedor->salarioAnual()}";

