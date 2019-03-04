<?php


class Departamento
{
    private $id_departamento;
    private $nome;

    public function __construct($id_departamento, $nome)
    {
        $this->id_departamento= $id_departamento;
        $this->nome= $nome;
    }

    /**
     * Get the value of id_departamento
     */ 
    public function getId_departamento()
    {
        return $this->id_departamento;
    }

    public function setId_departamento($id_departamento)
    {
        $this->id_departamento = $id_departamento;

    }


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

    }
}

?>