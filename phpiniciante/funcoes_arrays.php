<?php
//is_array verifica se é um array
$array = array('Notebook', 'Case');
$retorno = is_array($array);
if ($retorno) {
    echo 'Verdadeiro'. '<br>';
}else {
    echo 'Falso'.  '<br>';
}


//in_array verifica se uma certa variavel está no array
$array = array('Notebook', 'Case', 'Mac');
$retorno = in_array('Mac', $array);
if ($retorno) {
    echo 'Verdadeiro'.  '<br>';
} else {
    echo 'Falso'.  '<br>';
}


//array_keys pegar apenas chaves do array
$array = array(10=> 'Notebook', 11=>'Teclado');
$chaves_array = array_keys($array);
var_export($chaves_array) ;
echo '<br>';

//sort ordena por ordem alfabetica sem manter a chave
$frutas = array(0 => 'Banana', 1 => 'Amora', 3 => 'Carambola');
sort($frutas);
var_export($frutas);
echo '<br>';


//asort ordena por ordem alfabetica mantendo a chave
$frutas = array(0 => 'Banana', 1 => 'Amora', 3 => 'Carambola');
asort($frutas);
var_export($frutas);
echo '<br>';


//count contar quantas variaveis na array
$frutas = array(0 => 'Banana', 1 => 'Amora', 3 => 'Carambola');
$itens_array = count($frutas);
echo $itens_array . '<br>';


//array_merge junta duas ou mais arrays
$array1 = array('mac', 'linux');
$array2 = array('windows');
$array3 = array('android');
$novo_array = array_merge($array1, $array2, $array3);
var_export( $novo_array);
echo '<br>';


//explode atraves de um delimitador divide e retorna as variaveis
$string = "20/10/2020";
$retorno = explode("/", $string);
var_export($retorno);
echo '<br>';

//implode junta as strings com um delimitador
$nova_string = implode("/", $retorno);
echo $nova_string;

?>