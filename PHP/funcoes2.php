<?php

$pessoas = [];

function adicionarPessoa1($nome, $idade, $cidade)
{
    global $pessoas;
    $pessoas[] = ["nome" => $nome, "idade" => $idade, "cidade" => $cidade];
}

function imprimirPessoas($pessoas)
{
    var_dump($pessoas);
}

adicionarPessoa1("Laysson", 20, "Colatina");

imprimirPessoas($pessoas);

