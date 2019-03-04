<?php

//strtolower converte texto para letras minusculas
$texto = "Curso Completo de PHP 10 # %";
echo strtolower($texto .'<br>');

//strtoupper converter para letra maiuscula
$texto = "Curso Completo de PHP 10 # %";
echo strtoupper( $texto . '<br>');

//ucfirst coloca o primeiro caracter em maiusculo43th
$texto = "curso completo de php 10 # %";
echo ucfirst($texto . '<br>');

//strlen calculua tamanho da string, conta espaço tbm
$texto = "curso completo de php 10 # %";
echo strlen($texto . '<br>');

//str_replace procura alguma caracter para ser substituido
$texto = "345.332.456-40";
$cpf = str_replace(".","", $texto);
$cpf = str_replace("-","" , $cpf);
echo $cpf . '<br>';

//substr imprimi a partir e a quatidade de letras que quiser
$texto = "Entenda porque seu smartfone esquenta tanto, se voce tem um smartfone.";
$noticias =substr($texto, 0, 45);
echo $noticias."...";
?>