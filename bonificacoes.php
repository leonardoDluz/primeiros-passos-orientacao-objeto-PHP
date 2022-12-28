<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\{ControladorDeBonificacoes};

$umFuncionario = new Desenvolvedor(
    new CPF('123.456.789-10'),
    'leo luz',
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    new CPF('123.654.789-00'),
    'patricia',
    3000
);

$umDiretor = new Diretor(
    new CPF('234.546.709-18'),
    'carlo',
    5000
);

$umEditorDeVideo = new EditorVideo(
    new CPF('154.234.876-09'),
    'paulo',
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditorDeVideo);

echo $controlador->recuperaTotal();