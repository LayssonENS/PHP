<?php

require_once ('produto.php');

class Venda_produto
{
    private $produto;
    private $quantidade;
    private $desconto;


public function __construct($produto, $quantidade, $desconto)
{
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->desconto = $desconto;
}

    /**
     * Get the value of produto
     */ 
    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto($produto)
    {
        if ($produto instanceof Produto) {
            $this->produto = $produto;
        }
    }


    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }



    /**
     * Get the value of desconto
     */ 
    public function getDesconto()
    {
        return $this->desconto;
    }

    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

    }
}


?>