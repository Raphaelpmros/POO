<?php

require_once "Imovel.php";
require_once "Novo.php";
require_once "Usado.php";

$imovel = new Imovel("rua do fut, nº 10", 1500000);
echo "{$imovel->getEndereco()}, valor: {$imovel->getPreco()}<br>";

$novo = new Novo("Rua do baska, nº 93", 2500000, 10);
echo "{$novo->getEndereco()}, valor: {$novo->valor()}<br>";

$usado = new Usado("Rua do baseball bat, nº 32", 300000, 20);
echo "{$usado->getEndereco()}, valor: {$usado->valor()}<br>";