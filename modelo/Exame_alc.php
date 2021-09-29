<?php

class ExameAlc
{

    private $id_alc;
    private $id_medico;
    private $origem;
    private $sia;
    private $municipio;
    private $numero_prontuario;
    private $nome_pac;
    private $nome_mae_pac;
    private $nome_pai_pac;
    private $data_nasc_pac;
    private $sexo;
    private $telefone;
    private $rua;
    private $bairro;
    private $cep;
    private $numero_casa;
    private $municipio_casa;
    private $uf;
    private $consulta;
    private $identidade;
    private $justificativa_clinica;
    private $diagnostico_inicial;
    private $cid;
    private $clinica_solicitante;
    private $codigo_clinica;
    private $procedimento_solicitado;
    private $codigo_procedimento;
    private $medico_solicitante;
    private $crm_med;
    private $cpf_med;

    public function getCpf_med()
    {
        return $this->cpf_med;
    }

    public function setCpf_med($cpf_med)
    {
        $this->cpf_med = $cpf_med;
    }

    public function getCrm_med()
    {
        return $this->crm_med;
    }

    public function setCrm_med($crm_med)
    {
        $this->crm_med = $crm_med;
    }

    public function getMedico_solicitante()
    {
        return $this->medico_solicitante;
    }

    public function setMedico_solicitante($medico_solicitante)
    {
        $this->medico_solicitante = $medico_solicitante;
    }

    public function getCodigo_procedimento()
    {
        return $this->codigo_procedimento;
    }

    public function setCodigo_procedimento($codigo_procedimento)
    {
        $this->codigo_procedimento = $codigo_procedimento;
    }

    public function getProcedimento_solicitado()
    {
        return $this->procedimento_solicitado;
    }

    public function setProcedimento_solicitado($procedimento_solicitado)
    {
        $this->procedimento_solicitado = $procedimento_solicitado;
    }

    public function getCodigo_clinica()
    {
        return $this->codigo_clinica;
    }

    public function setCodigo_clinica($codigo_clinica)
    {
        $this->codigo_clinica = $codigo_clinica;
    }

    public function getClinica_solicitante()
    {
        return $this->clinica_solicitante;
    }

    public function setClinica_solicitante($clinica_solicitante)
    {
        $this->clinica_solicitante = $clinica_solicitante;
    }

    public function getCid()
    {
        return $this->cid;
    }

    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    public function getDiagnostico_inicial()
    {
        return $this->diagnostico_inicial;
    }

    public function setDiagnostico_inicial($diagnostico_inicial)
    {
        $this->diagnostico_inicial = $diagnostico_inicial;
    }
    public function getJustificativa_clinica()
    {
        return $this->justificativa_clinica;
    }

    public function setJustificativa_clinica($justificativa_clinica)
    {
        $this->justificativa_clinica = $justificativa_clinica;
    }


    public function getIdentidade()
    {
        return $this->identidade;
    }

    public function setIdentidade($identidade)
    {
        $this->identidade = $identidade;
    }

    public function getConsulta()
    {
        return $this->consulta;
    }

    public function setConsulta($consulta)
    {
        $this->consulta = $consulta;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    public function getMunicipioCasa()
    {
        return $this->municipio_casa;
    }

    public function setMunicipioCasa($municipio_casa)
    {
        $this->municipio_casa = $municipio_casa;
    }

    public function getNumeroCasa()
    {
        return $this->numero_casa;
    }

    public function setNumeroCasa($numero_casa)
    {
        $this->numero_casa = $numero_casa;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getId_alc()
    {
        return $this->id_alc;
    }

    public function setId_alc($id_alc)
    {
        $this->id_alc = $id_alc;
    }

    public function getId_medico()
    {
        return $this->id_medico;
    }

    public function setId_medico($id_medico)
    {
        $this->id_medico = $id_medico;
    }

    public function getOrigem()
    {
        return $this->origem;
    }

    public function setOrigem($origem)
    {
        $this->origem = $origem;
    }

    public function getSia()
    {
        return $this->sia;
    }

    public function setSia($sia)
    {
        $this->sia = $sia;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }


    public function getNumero_prontuario()
    {
        return $this->numero_prontuario;
    }

    public function setNumero_prontuario($numero_prontuario)
    {
        $this->numero_prontuario = $numero_prontuario;
    }

    public function getNome_pac()
    {
        return $this->nome_pac;
    }

    public function setNome_pac($nome_mae_pac)
    {
        $this->nome_mae_pac = $nome_mae_pac;
    }
    public function getnome_mae_pac()
    {
        return $this->nome_mae_pac;
    }

    public function setNome_mae_pac($nome_pac)
    {
        $this->nome_mae_pac = $nome_pac;
    }
    public function getNome_pai_pac()
    {
        return $this->nome_pai_pac;
    }

    public function setNome_pai_pac($nome_pai_pac)
    {
        $this->nome_pai_pac = $nome_pai_pac;
    }

    public function getData_nasc_pac()
    {
        return $this->data_nasc_pac;
    }

    public function setData_nasc_pac($data_nasc_pac)
    {
        $this->data_nasc_pac = $data_nasc_pac;
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

