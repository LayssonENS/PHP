<?php

abstract class Pessoa
{
    protected $id;
    protected $nome;
    protected $endereco;
    protected $telefone;

    public function __construct($id, $nome, $endereco, $telefone)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }
    //ID Getter e setter
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

  
    //NOME Geter e seter
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

    }

   
    //ENDERECO geter e seter
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    

   //TELEFONE Geter e seter
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

    }
}
 