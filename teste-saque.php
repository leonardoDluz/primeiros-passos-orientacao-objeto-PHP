<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'leo luz',
        new Endereco('itape', 'aquele bairro', 'uma rua', '342')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();