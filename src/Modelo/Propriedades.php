<?php

namespace Alura\Banco\Modelo;

trait Propriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set($nomeAtributo, $value): void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);

    }
}