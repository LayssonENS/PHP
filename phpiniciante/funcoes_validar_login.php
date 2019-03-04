<?php

function valida_login($login, $senha)
{

    //validar direto em banco de dados
    $login_db = 'laysson';
    $senha_db = '123';

    if ($login == $login_db && $senha == $senha_db) {
        return true;
    }

    return false;
}
?>