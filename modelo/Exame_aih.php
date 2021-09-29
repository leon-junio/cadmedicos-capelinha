<?php

 class ExameAih{
     
    private $id_aih;
    private $id_medico;
    private $nome_unidade;
    private $codigo_cnpj;
    private $nome_paciente;
    private $endereco;
    private $municipio;
    private $nome_pai;
    private $data_nasc_paciente;
    private $sexo;
    private $nome_mae;
    private $cpf_med_responsavel;
    private $cpf_med_solicitante;
    private $cep;
    private $data_emissao;
    private $procedimento_sol;
    private $uf;
    private $aut_cirurgia_eletiva;
    private $fornecida_aih;
    private $data_atual;
    private $sinais_sintomas;
    private $condicoes_just;
    private $provas_diagnosticas;
    private $procedimento_solicitado;
    private $cid;
    private $clinica;
    private $crm_solicitante;
    private $data_solicitante;

    public function getDataSolicitante()
    {
        return $this->data_solicitante;
    }

    public function setDataSolicitante($data_solicitante)
    {
        $this->data_solicitante = $data_solicitante;
    }

    public function getCrmSolicitante()
    {
        return $this->crm_solicitante;
    }

    public function setCrmSolicitante($crm_solicitante)
    {
        $this->crm_solicitante= $crm_solicitante;
    }

    public function getClinica()
    {
        return $this->clinica;
    }

    public function setClinica($clinica)
    {
        $this->clinica = $clinica;
    }

    public function getCid()
    {
        return $this->cid;
    }

    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    public function getProcedimentoSolicitado()
    {
        return $this->procedimento_solicitado;
    }

    public function setProcedimentoSolicitado($procedimento_solicitado)
    {
        $this->procedimento_solicitado = $procedimento_solicitado;
    }

    public function getProvasDiagnosticas()
    {
        return $this->provas_diagnosticas;
    }

    public function setProvasDiagnosticas($provas_diagnosticas)
    {
        $this->provas_diagnosticas = $provas_diagnosticas;
    }

    public function getCondicoesJust()
    {
        return $this->condicoes_just;
    }

    public function setCondicoesJust($condicoes_just)
    {
        $this->condicoes_just = $condicoes_just;
    }

    public function getSinaisSintomas()
    {
        return $this->sinais_sintomas;
    }

    public function setSinaisSintomas($sinais_sintomas)
    {
        $this->sinais_sintomas = $sinais_sintomas;
    }

    public function getDataAtual()
    {
        return $this->data_atual;
    }

    public function setDataAtual($data_atual)
    {
        $this->data_atual = $data_atual;
    }

    public function getFornecida_aih()
    {
        return $this->fornecida_aih;
    }

    public function setFornecida_aih($fornecida_aih)
    {
        $this->fornecida_aih = $fornecida_aih;
    }

    public function getAut_cirurgia_eletiva()
    {
        return $this->aut_cirurgia_eletiva;
    }

    public function setAut_cirurgia_eletiva($aut_cirurgia_eletiva)
    {
        $this->aut_cirurgia_eletiva = $aut_cirurgia_eletiva;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    public function getProcedimentoSol()
    {
        return $this->procedimento_sol;
    }

    public function setProcedimentoSol($procedimento_sol)
    {
        $this->procedimento_sol = $procedimento_sol;
    }

    public function getDataEmissao()
    {
        return $this->data_emissao;
    }

    public function setDataEmissao($data_emissao)
    {
        $this->data_emissao = $data_emissao;
    }
    
    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getCpf_med_solicitante()
    {
        return $this->cpf_med_solicitante;
    }

    public function setCpf_med_solicitante($cpf_med_solicitante)
    {
        $this->cpf_med_solicitante = $cpf_med_solicitante;
    }
    
    public function getCpf_med_responsavel()
    {
        return $this->cpf_med_responsavel;
    }

    public function setCpf_med_responsavel($cpf_med_responsavel)
    {
        $this->cpf_med_responsavel = $cpf_med_responsavel;
    }

    public function getNome_mae()
    {
        return $this->nome_mae;
    }

    public function setNome_mae($nome_mae)
    {
        $this->nome_mae = $nome_mae;
    }

    public function getId_aih()
    {
        return $this->id_aih;
    }

    public function setId_aih($id_aih)
    {
        $this->id_aih = $id_aih;
    }

    public function getId_medico()
    {
        return $this->id_medico;
    }

    public function setId_medico($id_medico)
    {
        $this->id_medico = $id_medico;
    }

    public function getNome_unidade()
    {
        return $this->nome_unidade;
    }

    public function setNome_unidade($nome_unidade)
    {
        $this->nome_unidade = $nome_unidade;
    }

    public function getCodigo_cnpj()
    {
        return $this->codigo_cnpj;
    }

    public function setCodigo_cnpj($codigo_cnpj)
    {
        $this->codigo_cnpj = $codigo_cnpj;
    }

    public function getNome_paciente()
    {
        return $this->nome_paciente;
    }

    public function setNome_paciente($nome_paciente)
    {
        $this->nome_paciente = $nome_paciente;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    public function getNome_pai()
    {
        return $this->nome_pai;
    }

    public function setNome_pai($nome_pai)
    {
        $this->nome_pai = $nome_pai;
    }

    public function getData_nasc_paciente()
    {
        return $this->data_nasc_paciente;
    }

    public function setData_nasc_paciente($data_nasc_paciente)
    {
        $this->data_nasc_paciente = $data_nasc_paciente;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }


}
