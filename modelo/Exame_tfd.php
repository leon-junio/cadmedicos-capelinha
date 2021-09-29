<?php

class ExameTfd
{

    private $id_tfd;
    private $id_medico;
    private $municipio_origem;
    private $DRS;
    private $numero;
    private $nome_paciente;
    private $identidade_paciente;
    private $residencia_paciente;
    private $telefone_paciente;
    private $cep_paciente;
    private $profissao;
    private $data_nasc_ac;
    private $nome_ac;
    private $identidade_ac;
    private $residencia_ac;
    private $telefone_ac;
    private $cep_ac;
    private $relacao_pc;
    private $historico;
    private $exame_fisico;
    private $diagnostico;
    private $cid;
    private $exames_comp;
    private $tratamentos_real;
    private $trat_exam_indicado;
    private $just_imp_tratamento;
    private $just_urgencia;
    private $just_acompanhante;
    private $transporte;
    private $observacoes;
    private $localidade;
    private $data_atual;
    private $tipo_transporte;
    private $local_assistencial;
    private $data_assistencial;
    private $horas_assistencial;
    private $endereco_assistencial;

    public function getEnderecoAssistencial()
    {
        return $this->endereco_assistencial;
    }

    public function setEnderecoAssistencial($endereco_assistencial)
    {
        $this->endereco_assistencial = $endereco_assistencial;
    }

    public function getHorasAssistencial()
    {
        return $this->horas_assistencial;
    }

    public function setHorasAssistencial($horas_assistencial)
    {
        $this->horas_assistencial = $horas_assistencial;
    }

    public function getDataAssistencial()
    {
        return $this->data_assistencial;
    }

    public function setDataAssistencial($data_assistencial)
    {
        $this->data_assistencial = $data_assistencial;
    }

    public function getLocalAssistencial()
    {
        return $this->local_assistencial;
    }

    public function setLocalAssistencial($local_assistencial)
    {
        $this->local_assistencial = $local_assistencial;
    }

    public function getTipoTransporte()
    {
        return $this->tipo_transporte;
    }

    public function setTipoTransporte($tipo_transporte)
    {
        $this->tipo_transporte = $tipo_transporte;
    }

    public function getDataAtual()
    {
        return $this->data_atual;
    }

    public function setDataAtual($data_atual)
    {
        $this->data_atual = $data_atual;
    }

    public function getLocalidade()
    {
        return $this->localidade;
    }

    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }

    public function setObeservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
    }

    public function getTransporte()
    {
        return $this->transporte;
    }

    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;
    }

    public function getJustAcompanhate()
    {
        return $this->just_acompanhante;
    }

    public function setJustAcompanhante($just_acompanhante)
    {
        $this->just_acompanhante = $just_acompanhante;
    }

    public function getJustUrgencia()
    {
        return $this->just_urgencia;
    }

    public function setJustUrgencia($just_urgencia)
    {
        $this->just_urgencia = $just_urgencia;
    }

    public function getJustImpTratamento()
    {
        return $this->just_imp_tratamento;
    }

    public function setJustImpTratamento($just_imp_tratamento)
    {
        $this->just_imp_tratamento = $just_imp_tratamento;
    }

    public function getTratExamIndicado()
    {
        return $this->trat_exam_indicado;
    }

    public function setTratExameIndicado($trat_exam_indicado)
    {
        $this->trat_exam_indicado = $trat_exam_indicado;
    }

    public function getTratamentosReal()
    {
        return $this->tratamentos_real;
    }

    public function setTratamentosReal($tratamentos_real)
    {
        $this->tratamentos_real = $tratamentos_real;
    }

    public function getCid()
    {
        return $this->cid;
    }

    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;
    }

    public function getExamesComp()
    {
        return $this->exames_comp;
    }

    public function setExamesComp($exames_comp)
    {
        $this->exames_comp = $exames_comp;
    }

    public function getExameFisico()
    {
        return $this->exame_fisico;
    }

    public function setExameFisico($exame_fisico)
    {
        $this->exame_fisico = $exame_fisico;
    }

    public function getHistorico()
    {
        return $this->historico;
    }

    public function setHistorico($historico)
    {
        $this->historico = $historico;
    }

    public function getRelacaoPc()
    {
        return $this->relacao_pc;
    }

    public function setRelacaoPC($relacao_pc)
    {
        $this->relacao_pc = $relacao_pc;
    }

    public function getCepAc()
    {
        return $this->cep_ac;
    }

    public function setCepAc($cep_ac)
    {
        $this->cep_ac = $cep_ac;
    }

    public function getTelefoneAc()
    {
        return $this->telefone_ac;
    }

    public function setTelefoneAc($telefone_ac)
    {
        $this->telefone_ac = $telefone_ac;
    }

    public function getResidenciaAc()
    {
        return $this->residencia_ac;
    }

    public function setResidenciaAc($residencia_ac)
    {
        $this->residencia_ac = $residencia_ac;
    }

    public function getIdentidadeAc()
    {
        return $this->identidade_ac;
    }

    public function setIdentidadeAc($identidade_ac)
    {
        $this->identidade_ac = $identidade_ac;
    }

    public function getNomeAc()
    {
        return $this->nome_ac;
    }

    public function setNomeAc($nome_ac)
    {
        $this->nome_ac = $nome_ac;
    }

    public function getDataNascAc()
    {
        return $this->data_nasc_ac;
    }

    public function setDataNascAc($data_nasc_ac)
    {
        $this->data_nasc_ac = $data_nasc_ac;
    }

    public function getId_tfd()
    {
        return $this->id_tfd;
    }

    public function setId_tfd($id_tfd)
    {
        $this->id_tfd = $id_tfd;
    }

    public function getId_medico()
    {
        return $this->id_medico;
    }

    public function setId_medico($id_medico)
    {
        $this->id_medico = $id_medico;
    }

    public function getMunicipio_origem()
    {
        return $this->municipio_origem;
    }

    public function setMunicipio_origem($municipio_origem)
    {
        $this->municipio_origem = $municipio_origem;
    }

    public function getDRS()
    {
        return $this->DRS;
    }

    public function setDRS($DRS)
    {
        $this->DRS = $DRS;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


    public function getNome_paciente()
    {
        return $this->nome_paciente;
    }

    public function setNome_paciente($nome_paciente)
    {
        $this->nome_paciente = $nome_paciente;
    }

    public function getIdentidade_paciente()
    {
        return $this->identidade_paciente;
    }

    public function setIdentidade_paciente($residencia_paciente)
    {
        $this->residencia_paciente = $residencia_paciente;
    }
    public function getResidencia_paciente()
    {
        return $this->residencia_paciente;
    }

    public function setResidencia_paciente($identidade_paciente)
    {
        $this->residencia_paciente = $identidade_paciente;
    }
    public function getTelefone_paciente()
    {
        return $this->telefone_paciente;
    }

    public function setTelefone_paciente($telefone_paciente)
    {
        $this->telefone_paciente = $telefone_paciente;
    }

    public function getCep_paciente()
    {
        return $this->cep_paciente;
    }

    public function setCep_paciente($cep_paciente)
    {
        $this->cep_paciente = $cep_paciente;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }

    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }
}

