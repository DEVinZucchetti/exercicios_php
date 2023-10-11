<?php

// 1 - Criar a classe
// 2 - Criar os atributos da classe
// 3 - Criar métodos

abstract class Pessoa
{

    private $id;
    private $nome;
    private $idade;
    private $cpf;

    public function __construct($nome, $cpf)
    {
        $this->id = uniqid();
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getId()
    {
        return $this->id;
    }

}
