<?php

 class Medico{
     
    private $id_med;
    private $nome;
    private $cpf;
    private $senha;
    private $cns;
    private $data_nasc;
    private $sexo;
    private $email;
    private $telefone;
    private $cnes;
    private $cbo;


    public function getId_med()
    {
        return $this->id_med;
    }

    public function setId_med($id_med)
    {
        $this->id_med = $id_med;
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

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getCns()
    {
        return $this->cns;
    }

    public function setCns($cns)
    {
        $this->cns = $cns;
    }


    public function getData_nasc()
    {
        return $this->data_nasc;
    }

    public function setData_nasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($sexo)
    {
        $this->email = $sexo;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getCnes()
    {
        return $this->cnes;
    }

    public function setCnes($cnes)
    {
        $this->cnes = $cnes;
    }

    public function getCbo()
    {
        return $this->cbo;
    }

    public function setCbo($cbo)
    {
        $this->cbo = $cbo;
    }


}
