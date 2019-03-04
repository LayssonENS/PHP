<?php


require_once ('venda_produto.php');
class Venda
{
    private $id_venda;
    private $total;
    private $cliente;
    private $vendedor;
    private $produtos;


public function __construct($id_venda, $total, $cliente, $vendedor, $produtos=[])
{
    $this->id_venda = $id_venda;
        $this->total = $total;
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->produtos = $produtos;
}

    /**
     * Get the value of id_venda
     */ 
    public function getId_venda()
    {
        return $this->id_venda;
    }

    public function setId_venda($id_venda)
    {
        $this->id_venda = $id_venda;
    }



    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }



    /**
     * Get the value of cliente
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

    }



    /**
     * Get the value of vendedor
     */ 
    public function getVendedor()
    {
        return $this->vendedor;
    }

    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

    }



    /**
     * Get the value of produtos
     */ 
    public function getProdutos()
    {
        return $this->produtos;
    }

    public function addProdutos($venda_produtos)
    {

        if ($venda_produtos instanceof Venda_produto) {
            $this->produtos[] = $venda_produtos;
        }
        
    }

    public function calculaTotal(){
        $total = 0;
        foreach ($this->produtos as $prod) {
            $total += $prod->getProduto()->getPreco() * $prod->getQuantidade() *
            (1- $prod->getDesconto());
        }
        $this->total = $total;
    }

}
