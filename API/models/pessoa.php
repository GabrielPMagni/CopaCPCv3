<?php
include_once("./API/models/utils/shared.php");
class Pessoa 
{
    private $id;
    private $nome;
    private $cpf;
    private $estadoRegional;
    private $cidade;
    private $email;

    function __construct()
    {
        
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getEstadoRegional()
    {
        return $this->estadoRegional;
    }

    public function setEstadoRegional($estadoRegional)
    {
        $this->estadoRegional = $estadoRegional;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
?>