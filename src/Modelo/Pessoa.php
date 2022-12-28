<?php

namespace Alura\Banco\Modelo;
abstract class Pessoa
{
    use Propriedades;

    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    public function recupraNome(): string
    {
        return $this->nome;
    }
    public function recupraCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}