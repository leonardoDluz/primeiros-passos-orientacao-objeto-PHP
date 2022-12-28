<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;


$desenvolvedor = new Desenvolvedor(
    new CPF('123.456.789-10'),
    'leo luz',
    3000
);

//$desenvolvedor->nome = 'leo';

var_dump($desenvolvedor);