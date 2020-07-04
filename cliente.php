<?php

require "pessoa.php";

class Cliente
{
    public $nome;
    public $telefone;
    public $endereco;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTel($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEndereco($logradouro, $numero, $bairro, $cidade, $estado, $cep)
    {
        $this->endereco = ['logradouro' => $logradouro, 'numero' => $numero, 'bairro' => $bairro, 'cidade' => $cidade, 'estado' => $estado, 'cep' => $cep];
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTel()
    {
        return $this->telefone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}
