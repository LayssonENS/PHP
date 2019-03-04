<?php
require_once('pessoa.php');

class Vendedor extends Pessoa
{
    private $salario;

    //public function __construct($id = null, $nome = "", $endereco = "", $telefone = "", $salario = "")
   // {
   //     parent::__construct($id, $nome, $endereco, $telefone);
  //      $this->salario = $salario;
  //  }

    //salario GETTER E SETTER
    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
}
 