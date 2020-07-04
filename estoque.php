<?php

class Estoque
{

    private $produto;

    public function __construct($codigo, $quantidade)
    {
        $this->setProduto($codigo, $quantidade);
    }

    public function setProduto($codigo, $quantidade)
    {
        $this->produto = ['codigo produto' => $codigo, 'quantidade do produto' => $quantidade];
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setSaida($vendaProduto){
        $this->produto = $vendaProduto;
    }

    public function getSaida (){
        return $this->produto;
    }
}
