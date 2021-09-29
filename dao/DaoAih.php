<?php
require_once '../modelo/Conexao.php';
require_once '../modelo/Exame_aih.php';
class DaoAih
{

    public function __construct()
    {
    }
    public function getLista()
    {
        $sql = 'select * from exame_aih;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            if ($pst->execute()) {
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        return $lista;
    }

    public function incluir($exame_aih)
    {
        $sql = 'insert into exame_aih (id_aih,id_medico,nome_unidade,codigo_cnpj,nome_paciente,endereco,municipio,nome_pai,data_nasc_paciente,sexo,nome_mae,cpf_med_responsavel,cpf_med_solicitante,cep,data_emissao,procedimento_sol,uf,aut_cirurgia_eletiva,fornecida_aih,data_atual,sinais_sintomas,condicoes_just,provas_diagnosticas,procedimento_solicitado,cid,clinica,crm_solicitante,data_solicitante) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $exame_aih->getid_aih());
            $pst->bindValue(2, $exame_aih->getId_medico());
            $pst->bindValue(3, $exame_aih->getnome_unidade());
            $pst->bindValue(4, $exame_aih->getcodigo_cnpj());
            $pst->bindValue(5, $exame_aih->getnome_paciente());
            $pst->bindValue(6, $exame_aih->getendereco());
            $pst->bindValue(7, $exame_aih->getmunicipio());
            $pst->bindValue(8, $exame_aih->getnome_pai());
            $pst->bindValue(9, $exame_aih->getdata_nasc_paciente());
            $pst->bindValue(10, $exame_aih->getSexo());
            $pst->bindValue(11, $exame_aih->getnome_mae());
            $pst->bindValue(12, $exame_aih->getcpf_med_responsavel());
            $pst->bindValue(13, $exame_aih->getcpf_med_solicitante());
            $pst->bindValue(14, $exame_aih->getCep());
            $pst->bindValue(15, $exame_aih->getdata_emissao());
            $pst->bindValue(16, $exame_aih->getprocedimento_sol());
            $pst->bindValue(17, $exame_aih->getUf());
            $pst->bindValue(18, $exame_aih->getaut_cirurgia_eletiva());
            $pst->bindValue(19, $exame_aih->getFornecida_aih());
            $pst->bindValue(20, $exame_aih->getData_atual());
            $pst->bindValue(21, $exame_aih->getSinais_sintomas());
            $pst->bindValue(22, $exame_aih->getCondicoes_just());
            $pst->bindValue(23, $exame_aih->getProvas_diagnosticas());
            $pst->bindValue(24, $exame_aih->getProcedimento_solicitado());
            $pst->bindValue(25, $exame_aih->getCid());
            $pst->bindValue(26, $exame_aih->getClinica());
            $pst->bindValue(27, $exame_aih->getCrmSolicitante());
            $pst->bindValue(28, $exame_aih->getDataSolicitante());
            if ($pst->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

