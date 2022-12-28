<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('itape', 'um bairro', 'uma rua', '12');
$outroEndereco = new Endereco('sorocaba', 'centro', 'rua tal', '34');

echo $umEndereco->bairro . PHP_EOL;
$umEndereco->bairro = 'outro bairro';

echo $umEndereco. PHP_EOL;
echo $outroEndereco. PHP_EOL;