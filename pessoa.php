<?php

class Pessoa extends Cliente
{
    public $codCliente;
    public $rg;
    public $cpf;
    public $sexo;
    public $dataNascimento;

    function setCodCliente($codCliente)
    {
        $this->codCliente = $codCliente;
    }

    function getCodCliente()
    {
        return $this->codCliente;
    }

    function setRg($rg)
    {
        $this->rg = $rg;
    }

    function getRg()
    {
        return $this->rg;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    function getSexo()
    {
        return $this->sexo;
    }

    function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    function getDataNascimento()
    {
        return $this->dataNascimento;
    }
}
