<?php

require_once ('departamento.php');
    class Produto
    {
        private $id_produto;
        private $nome;
        private $preco;
        private $departamento;

public function __construct($id_produto, $nome, $preco, $departamento)
{
    $this->id_produto = $id_produto;
    $this->nome = $nome;
    $this->preco = $preco;
    $this->departamento = $departamento;
}

        /**
         * Get the value of id_produto
         */ 
        public function getId_produto()
        {
                return $this->id_produto;
        }

        public function setId_produto($id_produto)
        {
                $this->id_produto = $id_produto;
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


        /**
         * Get the value of preco
         */ 
        public function getPreco()
        {
                return $this->preco;
        }

        public function setPreco($preco)
        {
                $this->preco = $preco;
        }



        /**
         * Get the value of departamento
         */ 
        public function getDepartamento()
        {
                return $this->departamento;
        }

        public function setDepartamento($departamento)
        {
                if ($departamento instanceof Departamento) {
                        $this->departamento = $departamento;
        }

        }
    }
    

