<?php

require_once "cliente.php";
require_once "produto.php";
require_once "estoque.php";

//AQUI MOSTRA CLASSE CLINTE NA TELA
$cliente = new Cliente();
echo "<b>Cliente: </b>", "<br>";
echo "Codigo do Cliente: " . $cliente->codCliente = "01", "<br>";
echo "Nome: " . $cliente->nome = "Victor Anthero Caldas Pedro", "<br>";
echo "Data de Nascimento: " . $cliente->dataNascimento = "Victor Anthero Caldas Pedro", "<br>";
echo "Telefone: " . $cliente->telefone = "(11) 98953-5650", "<br>";
echo "Endereço: " . $cliente->endereco =  "Avenida Albert Einstein, 730, Nucleo Residencial Isabela, Taboãoda Serra/SP, CEP: 06780-110", "<br>";
echo "Sexo: " . $cliente->sexo = "Masculino", "<br>";
echo "RG: " . $cliente->rg = "11.111.111-1", "<br>";
echo "CPF: " . $cliente->cpf = "111.111.111-11", "<br>", "<br>";

//AQUI MOSTRA CLASSE PRODUTO NA TELA
$produto = new Produto("Budweiser", "001", "10.00", "Bebida", "100");

echo "<b>Produtos: </b>"  . "<br>" . "Nome: " . $produto->getNome() . "<br>" . "Codigo do Produto: " . $produto->getCodigo() . "<br>" . "Preço: " . $produto->getPreco() . "<br>" . "Categoria: " . $produto->getCategoria() . "<br>" . "Quantidade em Estoque: " . $produto->getQuantidade() .  "<br><br>";

//AQUI MOSTRA CLASSE ESTOQUE NA TELA
$estoque = new Estoque("001", "100");

echo "<b>Estoque: </b>" . "<br>" . "Codigo do Produto: " . $estoque->getProduto()['codigo produto'] . "<br>" . "Quantidade em Estoque: " . $estoque->getProduto()['quantidade do produto'];
