<?php

use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Funcionario\{Diretor,Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    new CPF('123.456.789-10'),
    'leo luz',
    10000
);

$umGerente = new Gerente(
    new CPF('124.765.234-09'),
    'paulin',
    5000
);

$umTitular = new Titular(
    new CPF('432.765.897-12'),
    'cleyton',
    new Endereco('itape', 'bairro', 'rua', '143')
);

$autenticador->tentaLogin($umDiretor, '1234');
$autenticador->tentaLogin($umGerente, '431');
$autenticador->tentaLogin($umTitular, 'abcd');