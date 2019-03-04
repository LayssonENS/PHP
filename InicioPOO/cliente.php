<?php
require_once ('pessoa.php');

class Cliente extends Pessoa
{
    private $pontos_fidelidade;

public function __construct($id=null, $nome="", $endereco="", $telefone="", $pontos="" )
{
    parent::__construct($id, $nome, $endereco, $telefone);
    $this->pontos_fidelidade = $pontos;
}

    //PONTOS GETTER E SETTER
    public function getPontos()
    {
        return $this->pontos;
    }

    public function setPontos($pontos)
    {
        $this->pontos = $pontos;
    }
}





?>