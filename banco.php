<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta};
use Alura\Banco\Modelo\{Endereco, CPF};

$endereco = new Endereco('itape', 'bairro tal', 'rua tal', '135');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Leo Luz', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

//echo $primeiraConta->recuperaNome() . PHP_EOL;
//echo $primeiraConta->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('outra city', 'aquele bairro lá', 'aquela rua', '0');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Alberto', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
