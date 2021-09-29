<?php
require_once '../modelo/Conexao.php';
require_once '../modelo/Exame_tfd.php';
class DaoTfd
{

    public function __construct()
    {
    }
    public function getLista()
    {
        $sql = 'select * from exame_tfd;';
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

    public function incluir($exame_tfd)
    {
        $sql = 'insert into exame_tfd (id_tfd,id_medico,municipio_origem,DRS,numero,nome_paciente,residencia_paciente,telefone_paciente,cep_paciente,profissao,data_nasc_ac,nome_ac,identidade_ac,residencia_ac,telefone_ac,cep_ac,relacao_pc,historico,exame_fisico,diagnostico,cid,exames_comp,tratamentos_real,tratamento_indicado,just_imp_tratamento,just_urgencia,just_acompanhate,transporte,observacoes,localidade,data_atual,tipo_transporte,local_assistencial,data_assistencial,horas_assistencial,endereco_assistencial) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $exame_tfd->getId_tfd());
            $pst->bindValue(2, $exame_tfd->getId_medico());
            $pst->bindValue(3, $exame_tfd->getMunicipio_origem());
            $pst->bindValue(4, $exame_tfd->getDRS());
            $pst->bindValue(5, $exame_tfd->getNumero());
            $pst->bindValue(6, $exame_tfd->getNome_paciente());
            $pst->bindValue(7, $exame_tfd->getIdentidade_paciente());
            $pst->bindValue(8, $exame_tfd->getResidencia_paciente());
            $pst->bindValue(9, $exame_tfd->getTelefone_paciente());
            $pst->bindValue(10, $exame_tfd->getCep_paciente());
            $pst->bindValue(11, $exame_tfd->getProfissao());
            $pst->bindValue(12, $exame_tfd->getData_nasc_ac());
            $pst->bindValue(13, $exame_tfd->getNome_ac());
            $pst->bindValue(14, $exame_tfd->getIdentidade_ac());
            $pst->bindValue(15, $exame_tfd->getResidencia_ac());
            $pst->bindValue(16, $exame_tfd->getTelefone_ac());
            $pst->bindValue(17, $exame_tfd->getCep_ac());
            $pst->bindValue(18, $exame_tfd->getRelacao_pc());
            $pst->bindValue(19, $exame_tfd->getHistorico());
            $pst->bindValue(20, $exame_tfd->getExame_fisico());
            $pst->bindValue(21, $exame_tfd->getDiagnostico());
            $pst->bindValue(22, $exame_tfd->getCid());
            $pst->bindValue(23, $exame_tfd->getExames_comp());
            $pst->bindValue(24, $exame_tfd->getTratamentos_real());
            $pst->bindValue(25, $exame_tfd->getTrat_exam_indicado());
            $pst->bindValue(26, $exame_tfd->getJust_imp_tratamento());
            $pst->bindValue(27, $exame_tfd->getJust_urgencia());
            $pst->bindValue(28, $exame_tfd->getJust_acompanhante());
            $pst->bindValue(29, $exame_tfd->getTransporte());
            $pst->bindValue(30, $exame_tfd->getObservacoes());
            $pst->bindValue(31, $exame_tfd->getLocalidade());
            $pst->bindValue(32, $exame_tfd->getdata_atual());
            $pst->bindValue(33, $exame_tfd->getTipo_transporte());
            $pst->bindValue(34, $exame_tfd->getLocal_assistencial());
            $pst->bindValue(35, $exame_tfd->getData_assistencial());
            $pst->bindValue(36, $exame_tfd->getHoras_assistencial());
            $pst->bindValue(37, $exame_tfd->getEndereco_assistencial());
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
