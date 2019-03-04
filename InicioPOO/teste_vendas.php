<?php

require_once('cliente.php');
require_once('vendedor.php');
require_once('departamento.php');
require_once('produto.php');
require_once('venda_produto.php');
require_once('venda.php');

$depAlimentos = new Departamento(1, "Alimentos");
$depRoupas = new Departamento(2, "Roupas");
$depEletronicos = new Departamento(3, "Eletronicos");
$depRevistas = new Departamento(4, "Revistas");


$prodNote = new Produto(1, "Notebook Dell", 4999.99, $depEletronicos);
$prodInfo = new Produto(2, "Revistas exame", 99.99, $depRevistas);
$prodPastel = new Produto(3, "Pastel", 9.99, $depAlimentos);
$prodFeijao = new Produto(4, "Feijao", 0.99, $depAlimentos);
$prodMouse = new Produto(5, "Mouse", 10.99, $depEletronicos);
$produtos = [$prodNote, $prodInfo, $prodPastel, $prodFeijao, $prodMouse];

echo "<table>";
echo "<tr><td>ID</td><td>Nome</td><td>Preco</td><td>Departamento</td></tr>";


foreach ($produtos as $prod) {
    echo "<tr>";
    echo "<td>" . $prod->getId_produto() . "</td>";
    echo "<td>" . $prod->getNome() . "</t d>";
    echo "<td>" . $prod->getPreco() . "</t d>";
    echo "<td>" . $prod->getDepartamento()->getNome() . "</t d>";
    echo "</tr>";
}
echo "</table>";

$vendedorLaysson = new Vendedor(1, "Laysson", "Av. Castelo, 600", "54 4444-333", 5000.00);
$vendedorPedro = new Vendedor(2, "Pedro", "Av. Castelo, 70000", "77 44555-333", 8000.00);

$clienteMariana = new Cliente(1, "Mariana", "Rua Jose, 500", "111 2222 33", 100);
$clienteCarlita = new Cliente(2, "Carlita", "Rua Pedro, 600", "222 2222 33", 200);

$venda1 = new Venda(1, 0, $clienteMariana, $vendedorLaysson);
$venda1->addProdutos(new Venda_produto($prodMouse, 1, 0.0));
$venda1->addProdutos(new Venda_produto($prodPastel, 2, 0.10));
$venda1->addProdutos(new Venda_produto($prodFeijao, 5, 0.20));
$venda1->calculaTotal();

$venda2 = new Venda(2, 0, $clienteCarlita, $vendedorPedro);
$venda2->addProdutos(new Venda_produto($prodInfo, 1, 0.0));
$venda2->addProdutos(new Venda_produto($prodFeijao, 2, 0.10));
$venda2->addProdutos(new Venda_produto($prodNote, 5, 0.60));
$venda2->calculaTotal();

$venda3 = new Venda(3, 0, $clienteMariana, $vendedorLaysson);
$venda3->addProdutos(new Venda_produto($prodNote, 1, 0.0));
$venda3->addProdutos(new Venda_produto($prodPastel, 10, 0.10));
$venda3->addProdutos(new Venda_produto($prodFeijao, 15, 0.20));
$venda3->calculaTotal();


$vendas = [$venda1, $venda2, $venda3];

function imprimirVendas($vendas)
{
    echo "<h3>Vendas</h3>";

    foreach ($vendas as $ven) {
        echo "<p>ID da venda: " . $ven->getId_venda() . "</p>";
        echo "<p>Nome do Cliente: " . $ven->getCliente()->getNome() . "</ p>";
        echo "<p>Nome do Vendedor:" . $ven->getVendedor()->getNome() . "</p>";
        
        echo "<table>";
        echo "<tr><td>ID</td><td>Nome</td><td>Departamento</td>
        <td>Quantidade</td><td>Desconto</td><td>Total</td></tr>";
    
    //ID NOME DEPARTAMENTO QUANTIDADE DESCONTO TOTAL
    foreach ($ven->getProdutos() as $vendaproduto) {
            echo "<tr>";
            echo "<td>" . $vendaproduto->getProduto()->getId_produto() . "</td>";
            echo "<td>" . $vendaproduto->getProduto()->getNome() . "</td>";
            echo "<td>" . $vendaproduto->getProduto()->getDepartamento()->getNome() . "</td>";
            echo "<td>" . $vendaproduto->getQuantidade() . "</td>";
            echo "<td>" . $vendaproduto->getDesconto() * 100 . " %</td>";
            
            $total_produto = ( $vendaproduto->getProduto()->getPreco()
            * $vendaproduto->getQuantidade()) * (1 - $vendaproduto->getDesconto());

            echo "<td> R$ " . $total_produto . "</td>";
            echo "</tr>";
    }
        echo "</table>";
        echo "<h3>Total da venda:" . $ven->getTotal() . "</h3>";
        echo "<hr><br>";
    }
}

imprimirVendas($vendas);

echo "<hr><br>";

