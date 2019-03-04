<?php
$nome = 'Laysson';

function primeira_funcao(){
    echo "Curso de PHP";
}

function exibir_boas_vindas($nome = 'Indefinido'){
    echo'Bem vindo curso PHP,' .$nome;
}

function calcular_soma($numero1,$numero2){
    return $numero1+ $numero2;
}

primeira_funcao();
exibir_boas_vindas($nome);
echo calcular_soma(2,5);

?>