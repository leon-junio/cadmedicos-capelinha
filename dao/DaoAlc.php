<?php
require_once '../modelo/Conexao.php';
require_once '../modelo/Exame_alc.php';
class DaoAlc
{

    public function __construct()
    {
    }
    public function getLista()
    {
        $sql = 'select * from exame_alc;';
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

    public function incluir($exame_alc)
    {
        $sql = 'insert into exame_alc (id_alc,id_medico,origem,sia,municipio,numero_prontuario,nome_mae_pac,nome_pai_pac,data_nasc_pac,sexo,telefone,rua,bairro,cep,numero_casa,municipio_casa,uf,consulta,identidade) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $exame_alc->getId_alc());
            $pst->bindValue(2, $exame_alc->getId_medico());
            $pst->bindValue(3, $exame_alc->getOrigem());
            $pst->bindValue(4, $exame_alc->getSia());
            $pst->bindValue(5, $exame_alc->getMunicipio());
            $pst->bindValue(6, $exame_alc->getNumero_prontuario());
            $pst->bindValue(7, $exame_alc->getNome_pac());
            $pst->bindValue(8, $exame_alc->getNome_mae_pac());
            $pst->bindValue(9, $exame_alc->getNome_pai_pac());
            $pst->bindValue(10, $exame_alc->getData_nasc_pac());
            $pst->bindValue(11, $exame_alc->getSexo());
            $pst->bindValue(12, $exame_alc->getTelefone());
            $pst->bindValue(13, $exame_alc->getRua());
            $pst->bindValue(14, $exame_alc->getBairro());
            $pst->bindValue(15, $exame_alc->getCep());
            $pst->bindValue(16, $exame_alc->getNumero_casa());
            $pst->bindValue(17, $exame_alc->getMunicipio_casa());
            $pst->bindValue(18, $exame_alc->getUf());
            $pst->bindValue(19, $exame_alc->getConsulta());
            $pst->bindValue(20, $exame_alc->getIdentidade());
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
