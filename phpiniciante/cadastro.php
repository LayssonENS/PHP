<?php

//Validando campos com PHP

if (isset($_POST['nome']) && empty($_POST['nome'])) {
    echo 'Preencha o nome completo' . '<br>';
}

if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
    echo 'Preencha o cpf completo' . '<br>';
}

if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
    echo 'Apenas numeros no cpf' . '<br>';
}

//verifica se o cpf tem 11 caracter
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$total_string = strlen($cpf);
if ($total_string != 11 && $total_string != '') {
    echo 'Cpf invalido' . '<br>';
}

?>
<form method="post" action="">
    <label>
        Nome completo*:
        <input type="text" name="nome">
    </label>

    <label>
        CPF*:
        <input type="text" name="cpf">
    </label>

    <input type="submit" value="Cadastrar">

</form> 