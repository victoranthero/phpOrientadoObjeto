<?php

class Produto
{

    private $nome;
    private $codigo;
    private $preco;
    private $categoria;
    private $quantidade;

    public function __construct($nome, $codigo, $preco, $categoria, $quantidade)
    {

        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setPreco($preco);
        $this->setCategoria($categoria);
        $this->setQuantidade($quantidade);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
}
